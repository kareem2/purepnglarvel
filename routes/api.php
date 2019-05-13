<?php

use Illuminate\Http\Request;
use App\Post;
use App\Tag;
use App\User;
use App\Category;
use Intervention\Image\ImageManager;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::middleware(['simpleAuth'])->group(function () {


	Route::post('/add_post', function(Request $request){


	    $request->validate([
	        'user_id' => 'required_without:user_name|exists:users,id',
	        'user_name' => 'required_without:user_id',
	        'image_name' => 'required',
	        'title' => 'required',
	        'base64_image' => 'required',
	        'category_id' => 'required_without:category_name|exists:categories,id',
	        'category_name' => 'required_without:category_id',
	    ]);

		$post = new Post();

		$post->user_id = $request->user_id;
		$post->title = $request->title;
		$post->description = $request->description;

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

		$image_name = Str::slug(time() . ' ' . $request->image_name) . '.' . $image_type;

		$post->main_image = $image_name;


		$saved_image = Storage::disk('large_image')->put($image_name, $decoded_image);

		if($saved_image){


			// Check user:
			if(is_null($request->user_id)){

			    $user = User::firstOrCreate(
			    	['name' => Str::slug($request->user_name)],
			    	['name' => $request->user_name]);

			    $post->user_id = $user->id;

			}

			// Check category:
			if(is_null($request->category_id)){

			    $category = Category::firstOrCreate(
			    	['slug' => Str::slug($request->category_name)],
			    	['name' => $request->category_name, 'slug' => Str::slug($request->category_name)]);

			    $post->category_id = $category->id;

			}

			// Save post
			if($post->save()){

				$tags = [];

				foreach ($request->tags as $post_tag) {
				    $tag = Tag::firstOrCreate(
				    	['slug' => Str::slug($post_tag)],
				    	['name' => $post_tag, 'slug' => Str::slug($post_tag)]);

				    $tags[] = $tag->id;
				}

				$post->tags()->sync($tags);

				$thumbnail =  Image::make(public_path('uploads/large/'.$image_name));

				$thumbnail->resize(null, 100, function ($constraint) {
				    $constraint->aspectRatio();
				});

				$thumbnail->save(public_path('uploads/thumbnail/'.$image_name));

			}


		}

		return response()->json($post, 202);

	});

	Route::get('/categories', function(Request $request){
		return response()->json(Category::all());
	});

	Route::post('/categories/add', function(Request $request){

		$request->merge([
		    'slug' => Str::slug($request->name)
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

	});	

	Route::get('/tags', function(Request $request){
		return response()->json(Tag::all());
	});
});

Route::fallback(function(){
    return response()->json(['message' => 'Not Found!'], 404);
});