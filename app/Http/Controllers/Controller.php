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
		if(\Cache::has('header_categories') && config('custom.use_cache') == true){
			$categories = \Cache::get('header_categories');
		}else{
			$categories = Category::withCount('posts')->limit(config('custom.categories_count'))->get();
		}
		


		$menu_categories = $categories->slice(0, config('custom.menu_categories_count'));
		$main_page_categories = $categories->slice(0, config('custom.main_page_categories_count'));
		$footer_categories = $categories->slice(0, config('custom.footer_categories_count'));

		$thumbnail_read_path = config('custom.thumbnail_read_path');

		View::share('menu_categories', $menu_categories);
		View::share('main_page_categories', $main_page_categories);
		View::share('footer_categories', $footer_categories);
		View::share('thumbnail_read_path', $thumbnail_read_path);
	}

}