<?php

use Illuminate\Http\Request;
use App\Post;
use App\Tag;
use App\User; 
use App\ColorPalette; 
use App\Category;
use App\Comment;
use Intervention\Image\ImageManager;
use \BrianMcdo\ImagePalette\ImagePalette as ImagePalette;
use Illuminate\Support\Collection;


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


// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::middleware(['simpleAuth'])->group(function () {


	Route::post('/add_post', function(Request $request){


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

	Route::post('/photo/delete', function(Request $request){


		$photo = Post::where('id', $request->id)->first();//->delete();

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

			return response()->json(['message' => 'photo deleted successfully']);
		}
	});

	Route::post('/photo/comment/add', function(Request $request){


		$photo = Post::where('id', $request->comment['post_id'])->first();


		$comment = new Comment($request->comment);
		//dd($photo->comment);

		$photo->comments()->save($comment);

	});

	Route::get('/tags', function(Request $request){
		return response()->json(Tag::all());
	});
});

Route::fallback(function(){
    return response()->json(['message' => 'Not Found!'], 404);
});