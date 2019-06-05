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

    public function index(Request $request){
 
		if(config('custom.use_cache') == true && \Cache::has('main_page_latest_photos') && \Cache::has('total_photos') && \Cache::has('sample_tags') && \Cache::has('total_downloads')){

			$latest_photos = \Cache::get('main_page_latest_photos');
			$photos_count = \Cache::get('total_photos');
			$tags_sample = \Cache::get('sample_tags');
			$downloads_count = \Cache::get('total_downloads');
			
		}else{
	 		$latest_photos = Post::with('user')->limit(config('custom.main_page_latest_photos'))->get();
	 		$photos_count = Post::count();
	 		$tags_sample = Tag::limit(8)->get();
	 		$downloads_count = Post::sum('downloads_count');
		}



 		$data['latest_photos'] = $latest_photos;
 		$data['photos_count'] = $photos_count;
 		$data['tags_sample'] = $tags_sample;
 		$data['downloads_count'] = $downloads_count;
    	return view('pages.home', $data);

    }

}