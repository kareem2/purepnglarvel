<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Tag;
use App\Category;
use View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

	public function __construct(){
		$categories = Category::limit(5)->get();
		//dd($categories);
		$thumbnail_read_path = config('custom.thumbnail_read_path');

		View::share('menue_categories', $categories);
		View::share('thumbnail_read_path', $thumbnail_read_path);
	}

}