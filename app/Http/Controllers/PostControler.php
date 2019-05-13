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

		$post = Post::find($post_id);

		$post->main_image_url = asset(config('custom.images_source').$post->main_image);	
		$post->user = $post->user()->withCount('posts')->first();
		
	    $units = array('B', 'KB', 'MB', 'GB', 'TB'); 

	    $bytes = max(filesize(public_path(config('custom.images_source').$post->main_image)), 0); 
	    $pow = floor(($bytes ? log($bytes) : 0) / log(1024)); 
	    $pow = min($pow, count($units) - 1); 

	    $bytes /= pow(1024, $pow);

	    $image_resolution = getimagesize(public_path(config('custom.images_source').$post->main_image));

	    $data['photo_size'] = round($bytes, 2) . ' ' . $units[$pow]; 
	    $data['photo_width'] = $image_resolution[0];
	    $data['photo_height'] = $image_resolution[1];
		

		$data['post'] = $post;

		return View::make('pages.post', $data);	

    }
}



/*


Route::get('ssl/{domain}', function($domain){
	$url = 'https://'.$domain;

	$stream = stream_context_create (array("ssl" => array("capture_peer_cert" => true)));
	$read = @fopen($url, "rb", false, $stream);
	if($read == false)
		die('false');
	$cont = stream_context_get_params($read);
	dd($cont);
	dd();
});


*/