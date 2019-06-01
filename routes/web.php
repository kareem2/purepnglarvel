<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('/', 'HomeController@index')->name('home');

Route::get('/photo/{post_id}', 'PostController@show')->name('photo');
Route::get('/photo/{post_id}/{title}', 'PostController@show')->name('photo_with_title');
Route::get('/photo/{post_id}/{title}/download/{size}', 'PostController@download')->name('photo_download');
Route::get('/user/{user_name}', 'UserController@show')->name('user');
Route::get('/tag/{tag_name}', 'PostController@tagPhotos')->name('tag_photos_by_name');
Route::get('/tag/id/{tag_name}', 'PostController@tagPhotos')->name('tag_photos_by_id');
Route::get('/tags', 'TagController@index')->name('tags');
Route::get('/latest', 'PostController@latest')->name('latest_photos');
Route::get('/popular', 'PostController@popular')->name('popular_photos');
Route::get('/categories', 'CategoryController@index')->name('categories');
Route::get('/category/{category_name}', 'CategoryController@show')->name('show_category');
Route::get('/search', 'TagController@search')->name('tags_search');
Route::get('/user/{user_name}', 'UserController@show')->name('user');
