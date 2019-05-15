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

Route::get('/', function () {
    return view('pages.home');
});



Route::get('/photo/{post_id}', 'PostControler@show')->name('photo');
Route::get('/tag/{tag_slug}', 'TagControler@show')->name('tag');
Route::get('/user/{user_name}', 'UserControler@show')->name('user');
