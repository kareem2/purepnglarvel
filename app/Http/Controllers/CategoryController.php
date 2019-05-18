<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Tag;
use App\Category;
use View;

class CategoryController extends Controller
{
	public function __construct(){
		parent::__construct();
	}

	public function index(){

		$categories = Category::paginate(100);
		
		$data['categories'] = $categories;
		return View::make('pages.categories', $data);

	}

    public function show($Category_name){

		$category = Category::where('slug', $Category_name)->first();

		$category_id = $category->id;

        $related_photos = Post::where('category_id', $category_id)->with('user');
        $count = Post::where('category_id', $category_id)->count();

        $related_photos = $related_photos->paginate(10);	

		$data['category'] = $category;
		$data['count'] = $count;
		$data['photos'] = $related_photos;

		return View::make('pages.category_photos', $data);	

    }
}
