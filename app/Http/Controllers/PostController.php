<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Comment;
use App\Tag;
use View;
use Intervention\Image\ImageManagerStatic as Image;
use Carbon\Carbon;

class PostController extends Controller
{
	public $images_folder;
	public $thumbnail_read_path;

	public function __construct(){
		
		$c = Carbon::now()->toDateTimeString();
		$tz = Carbon::now()->timezone->getName();
		//dd([$c, $tz]);
		parent::__construct();
		$this->images_folder = config('custom.images_read_path');
		$this->thumbnail_read_path = config('custom.thumbnail_read_path');
	}

    public function show($post_id){

		$post = Post::with('category')->find($post_id);


        $comments = Comment::where('post_id', $post_id)->orderByDesc('comment_date')->paginate(config('custom.paging.comments'));

	    if ( !\Cookie::get("{$post_id}_post_viewed") ) {

	        \Cookie::queue("{$post_id}_post_viewed", true, 60 * 24 * 30);

	        $post->update(['views_count' => $post->views_count + 1]);
	    }	

		$related_photos = $post->relatedPhotos(config('custom.paging.photo_related'));

		$image_url = $this->images_folder.$post->main_image;

		$post->main_image_url = asset($image_url);	
		$post->user = $post->user()->withCount('posts')->first();
		
	    $units = array('B', 'KB', 'MB', 'GB', 'TB'); 

	    $bytes = max(filesize(public_path($image_url)), 0); 
	    $pow = floor(($bytes ? log($bytes) : 0) / log(1024)); 
	    $pow = min($pow, count($units) - 1); 

	    $bytes /= pow(1024, $pow);

	    $image_resolution = getimagesize(public_path($image_url));

	    $data['photo_size'] = round($bytes, 2) . ' ' . $units[$pow]; 
	    $data['photo_width'] = $image_resolution[0];
	    $data['photo_height'] = $image_resolution[1];
	    $data['related_photos'] = $related_photos;
	    $data['comments'] = $comments;
	    $data['thumbnail_read_path'] = $this->thumbnail_read_path;

	

		$data['post'] = $post;

		return View::make('pages.post', $data);	

    }


    public function tagPhotos(Request $request, $tag_name){


    	$tag = Tag::withCount('post_tags')->where('slug', $tag_name)->first();

    	if($tag == false){
    		abort(404, 'The resource you are looking for could not be found');
    		die();
    	}
    	$tag_id = $tag->id;

        $tag_photos = Post::whereHas('tags', function ($query) use ($tag_id) {
            $query->where('tags.id', $tag_id);
        })->with('user');

        //dd(config('custom.paging.tag_photos'));
        $tag_photos = $tag_photos->paginate(config('custom.paging.tag_photos'));

		$data['photos'] = $tag_photos;
		$data['tag'] = $tag;
		$data['thumbnail_read_path'] = $this->thumbnail_read_path;

		return View::make('pages.tag_photos', $data);	

    }

    public function latest(){
    	$photos = Post::with('user')->orderBy('created_at', 'desc')->paginate(config('custom.paging.latest'));
    	//dd($photos);

		$data['photos'] = $photos;
		$data['thumbnail_read_path'] = $this->thumbnail_read_path;

    	return View::make('pages.latest_photos', $data);	
    }

    public function download($photo_id, $title, $size){
    	//dd(1);
    	$photo = Post::find($photo_id);

		$image =  Image::make(public_path(config('custom.images_main_path').$photo->main_image));


		$resize_factor = config('custom.height_resize_factor')[$size];

		if($resize_factor != 0){
			$new_hight = $image->height() - ($image->height() * $resize_factor / 100);

			$image->resize(null, $new_hight, function ($constraint) {
			    $constraint->aspectRatio();
			});			
		}


		$width = $image->width();
		$height = $image->height();
		$name = $image->filename;
		$extension = $image->extension;

		$filename = "{$name}-{$width}x{$height}.$extension";

		$image->encode($image->extension);
		
		
	    if(!\Cookie::get("photo_{$photo_id}_downloaded")){
			$photo->update(['downloads_count' => $photo->downloads_count + 1]);
	    }
	    
	    	

		header('Content-Disposition: attachment;filename="'.$filename.'"');
		header('Content-Type: application/force-download');  

		return response($image->encoded)->cookie(
			"photo_{$photo_id}_downloaded", true, 60 * 24 * 30
		);


    }
}