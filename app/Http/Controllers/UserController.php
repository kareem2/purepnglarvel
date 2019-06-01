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

class UserController extends Controller
{

    public function show($user_name){

		$user = User::where('name', $user_name)->first();

		if(!$user)
			abort(404, 'The resource you are looking for could not be found');

        $photos = Post::where('user_id', $user->id)->paginate(config('custom.paging.user_photos'));

		$data['photos'] = $photos;

		$data['user'] = $user;
		return View::make('pages.user', $data);	
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

		$data['photos'] = $photos;
		$data['thumbnail_read_path'] = $this->thumbnail_read_path;

    	return View::make('pages.latest_photos', $data);	
    }

    public function popular(){
    	$photos = Post::with('user')->orderBy('downloads_count', 'desc')->paginate(config('custom.paging.popular'));
    	//dd($photos);

		$data['photos'] = $photos;
		$data['thumbnail_read_path'] = $this->thumbnail_read_path;

    	return View::make('pages.popular_photos', $data);	
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