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

 		$data['latest_photos'] = $latest_photos;
    	return view('pages.home', $data);

    }

}