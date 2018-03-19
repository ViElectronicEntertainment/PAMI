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
    return view('welcome');
});

//Blinter Profile
Auth::routes();
Route::get('/home', 			'HomeController@index')->name('home');
Route::view('/profile', 		'blinterprofile.profile');

//Web
Route::get('blog',	 			'web\PageController@blog')->name('blog');
Route::get('blog/{slug}', 		'Web\PageController@post')->name('post');
Route::get('categoria/{slug}', 	'Web\PageController@category')->name('category');
Route::get('etiqueta/{slug}', 	'Web\PageController@tag')->name('tag');

//Admin
Route::resource('posts', 		'Admin\PostController');
Route::resource('categories', 	'Admin\CategoryController');
Route::resource('tags', 		'Admin\TagController');