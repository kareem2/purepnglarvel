<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Tag;
use App\Category;
use View;

class TagController extends Controller
{
	public function __construct(){
		parent::__construct();
	}

	public function index(){

		$categories = Tag::withCount('post_tags')
		->paginate(config('custom.paging.tags_index'));

		$data['tags'] = $categories;
		return View::make('pages.tags', $data);
	

	}

	public function search(Request $request){
		$query = $request->q;

		$tags = explode(' ', $query);

		$tagIds = Tag::whereIn('slug', $tags);
		$tagIds = $tagIds->pluck('tags.id')->all();

        $photos = Post::whereHas('tags', function ($query) use ($tagIds) {
            $query->whereIn('tags.id', $tagIds);
        })->with('user');

        $photos = $photos->paginate(config('custom.paging.search_results'));

        $data['photos'] = $photos->appends(request()->input());

        $data['query'] = $query;

        return View::make('pages.search_results', $data);


	}
}
