<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Tag;
use View;
use Intervention\Image\ImageManagerStatic as Image;

class PostController extends Controller
{
	public $images_folder;
	public $thumbnail_read_path;

	public function __construct(){
		parent::__construct();
		$this->images_folder = config('custom.images_read_path');
		$this->thumbnail_read_path = config('custom.thumbnail_read_path');
	}

    public function show($post_id){

		$post = Post::find($post_id);

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

        $tag_photos = $tag_photos->paginate(10);

		$data['photos'] = $tag_photos;
		$data['tag'] = $tag;
		$data['thumbnail_read_path'] = $this->thumbnail_read_path;

		return View::make('pages.tag_photos', $data);	

    }

    public function latest(){
    	$photos = Post::orderBy('created_at', 'desc')->paginate(20);

		$data['photos'] = $photos;
		$data['thumbnail_read_path'] = $this->thumbnail_read_path;

    	return View::make('pages.latest_photos', $data);	
    }

    public function download($photo_id, $title, $size){
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
		

		header('Content-Disposition: attachment;filename="'.$filename.'"');
		header('Content-Type: application/force-download');  
		echo ($image->encoded);   	

    }
}