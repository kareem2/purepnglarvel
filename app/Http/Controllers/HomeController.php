<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Tag;
use View;

class HomeController extends Controller
{

	public function __construct(){
		parent::__construct();
	}

    public function index(){
 
 		$latest_photos = Post::with('user')->limit(config('custom.main_page_latest_photos'))->get();

 		$photos_count = Post::count();

 		$tags_sample = Tag::limit(8)->get();

 		$data['latest_photos'] = $latest_photos;
 		$data['photos_count'] = $photos_count;
 		$data['tags_sample'] = $tags_sample;
    	return view('pages.home', $data);

    }

}