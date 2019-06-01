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
use Carbon\Carbon;
//use Cache;

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

	Route::post('/post/add', 'ApiController@addPost');

	Route::get('/categories', 'ApiController@getCategories');

	Route::post('/categories/add', 'ApiController@addCategory');

	Route::post('/photo/delete', 'ApiController@removePhoto');

	Route::post('/photo/comment/add', 'ApiController@addComment');

	Route::get('/tags', 'ApiController@getTags');

	Route::post('/cache/update', 'ApiController@updateCache');
});

Route::fallback(function(){
    return response()->json(['message' => 'Not Found!'], 404);
});