<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use View;
use Intervention\Image\ImageManagerStatic as Image;

class PostControler extends Controller
{
    //

    public function show($post_id){

    	$images_folder = config('custom.images_read_path');
    	$thumbnail_read_path = config('custom.thumbnail_read_path');

		$post = Post::find($post_id);

		$related_photos = $post->relatedPhotos(5);

		$image_url = $images_folder.$post->main_image;

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
	    $data['thumbnail_read_path'] = $thumbnail_read_path;
		

		$data['post'] = $post;

		return View::make('pages.post', $data);	

    }
}