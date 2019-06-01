<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Tag;
use App\User; 
use App\ColorPalette; 
use App\Category;
use App\Comment;
use Intervention\Image\ImageManagerStatic as Image;
use \BrianMcdo\ImagePalette\ImagePalette as ImagePalette;
use Illuminate\Support\Collection;
use Carbon\Carbon;
use Illuminate\Routing\Controller as BaseController;


class ApiController extends BaseController
{

	public function addPost(Request $request)
	{
		//dd(4);
	    $request->validate([
	        'user_id' => 'required_without:user_name|exists:users,id',
	        'user_name' => 'required_without:user_id',
	        'image_name' => 'required',
	        'title' => 'required',
	        'base64_image' => 'required|is_supported_type',
	        'category_id' => 'required_without:category_name|exists:categories,id',
	        'category_name' => 'required_without:category_id',
	    ]);

		$post = new Post();

		$post->user_id = $request->user_id;
		$post->title = $request->title;
		$post->description = $request->description;
		if($request->views_count){
			$post->views_count = $request->views_count;
		}
		if($request->downloads_count){
			$post->downloads_count = $request->downloads_count;
		}		
		if($request->likes_count){
			$post->likes_count = $request->likes_count;
		}		
		$post->category_id = $request->category_id;


		$encoded_image = $request->base64_image;
		$decoded_image = base64_decode($encoded_image);
	


		$file = finfo_open();
		$image_type = finfo_buffer($file, $decoded_image, FILEINFO_MIME_TYPE);
		$image_type = explode('/', $image_type);
		$image_type = $image_type[1];

		$image_resolution = getimagesizefromstring($decoded_image);

		$post->image_width = $image_resolution[0];
		$post->image_height = $image_resolution[1];
		$post->image_type = $image_type;		

		$image_name = \Str::slug(time() . ' ' . $request->image_name) . '.' . $image_type;

		$post->main_image = $image_name;


		$saved_image = \Storage::disk('large_image')->put($image_name, $decoded_image);

		if($saved_image){


			// Check user:
			if(is_null($request->user_id)){

			    $user = User::firstOrCreate(
			    	['name' => \Str::slug($request->user_name)],
			    	['name' => $request->user_name]);

			    $post->user_id = $user->id;

			}

			// Check category:
			if(is_null($request->category_id)){

			    $category = Category::firstOrCreate(
			    	['slug' => \Str::slug($request->category_name)],
			    	['name' => $request->category_name, 'slug' => \Str::slug($request->category_name)]);

			    $post->category_id = $category->id;

			}

			// Save post
			if($post->save()){

				$tags = [];

				foreach ($request->tags as $post_tag) {
				    $tag = Tag::firstOrCreate(
				    	['slug' => \Str::slug($post_tag)],
				    	['name' => $post_tag, 'slug' => \Str::slug($post_tag)]);

				    $tags[] = $tag->id;
				}



				$post->tags()->sync($tags);

				$large_image_path = public_path(config('custom.images_main_path').$image_name);
				
				
				$palette = new ImagePalette($large_image_path, 1, 5);	

				$colors = $palette->colors;

				$palettes_collection = new Collection();
				foreach ($colors as $color) {
					$palettes_collection->push(new ColorPalette(['color' => str_replace('#', '', $color)]));
				}

				$post->color_palettes()->saveMany($palettes_collection);
				


				if($request->comments){
					$comments_collection = new Collection();

					foreach ($request->comments as $comment) {
						$comments_collection->push(new Comment($comment));
					}

					$post->comments()->saveMany($comments_collection);					
				}



				$thumbnail =  Image::make($large_image_path);

				$thumbnail->resize(null, config('custom.thumbnail_height'), function ($constraint) {
				    $constraint->aspectRatio();
				});


				$thumbnail->save(public_path(config('custom.thumbnail_main_path').$image_name));

			}


		}

		return response()->json($post, 202);		
	}

	public function getCategories(Request $request)
	{
		return response()->json(Category::all(), 202);
	}

	public function getTags(Request $request)
	{
		return response()->json(Tag::all(), 202);
	}

	public function addCategory(Request $request)
	{
		try {
			$request->merge([
			    'slug' => \Str::slug($request->name)
			]);

		    $request->validate([
		        'name' => 'required',
		        'slug' => 'unique:categories,slug',
		    ]);

		    $slug = $request->slug;

		    $category = new Category();
		    $category->name = $request->name;
		    $category->slug = $slug;

		    if($category->save()){
		    	return response()->json($category, 202);
		    }			
		} catch (Exception $e) {
			return response()->json(['Server Errors'], 500);
		}
		
	}

	public function removePhoto(Request $request)
	{
		foreach ($request->ids as $id) {
			$photo = Post::where('id', $id)->first();//->delete();

			if($photo){
				$image_name = $photo->main_image;

				if($photo->delete()){
					$large_image_path = public_path(config('custom.images_main_path').$image_name);
					$thumbnail_path = public_path(config('custom.thumbnail_main_path').$image_name);

					if(File::exists($large_image_path)) {
					    File::delete($large_image_path);
					}

					if(File::exists($thumbnail_path)) {
					    File::delete($thumbnail_path);
					}
				}
			}
		}

		return response()->json(['message' => 'photos deleted successfully'], 202);
	}

	public function addComment(Request $request)
	{
		$photo = Post::where('id', $request->comment['post_id'])->first();

		$comment_data = $request->comment;

		if(!isset($request->comment['comment_date'])){
			$comment_data['comment_date'] = Carbon::now()->toDateTimeString();
		}
		$comment = new Comment($comment_data);

		$photo->comments()->save($comment);

		return response()->json($comment, 202);
	}

	public function updateCache(Request $request)
	{
		$header_categories = Category::withCount('posts')->limit(config('custom.categories_count'))->get();
		\Cache::forever('header_categories', $header_categories);


		$latest = Post::with('user')->orderBy('created_at', 'desc')->paginate(config('custom.paging.latest'));
		$latest->withPath(route('latest_photos'));
		\Cache::forever('latest', $latest);

		$popular = Post::with('user')->orderBy('downloads_count', 'desc')->paginate(config('custom.paging.popular'));
		$popular->withPath(route('popular_photos'));
		\Cache::forever('popular', $popular);

		$tags = Tag::withCount('post_tags')->paginate(config('custom.paging.tags_index'));
		$tags->withPath(route('tags'));
		\Cache::forever('tags', $tags);

		$nested = Post::select('main_image')
		       ->whereNotNull('main_image')
		       ->where('category_id', \DB::raw("categories.id"))
		       ->limit(1)
		       ->toSql();

		$categories = Category::selectRaw(\DB::raw("categories.*, ({$nested}) as thumbnail_image"))
		       ->paginate(config('custom.paging.categories_index'));
		$categories->withPath(route('categories'));
		\Cache::forever('categories', $categories);

		$total_downloads = Post::sum('downloads_count');
		\Cache::forever('total_downloads', $total_downloads);
		
		$total_photos = Post::count();
		\Cache::forever('total_photos', $total_photos);
		
		$sample_tags = Tag::limit(8)->get();
		\Cache::forever('sample_tags', $sample_tags);

		$main_page_latest_photos = Post::with('user')->limit(config('custom.main_page_latest_photos'))->get();
		\Cache::forever('main_page_latest_photos', $main_page_latest_photos);

		return response()->json(['message' => 'Cache is successfully updated'], 202);
	}
}