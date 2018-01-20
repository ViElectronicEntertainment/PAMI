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
Route::get('/home', 'HomeController@index')->name('home');
Route::view('/profile', 'blinterprofile.profile');

//Usuario
Route::get('/blog', 			'Web\PageController@blog')->name('blog');
Route::get('entrada/{slug}', 	'Web\PageController@post')->name('post');
Route::get('categoria/{slug}', 	'Web\PageController@category')->name('category');
Route::get('etiqueta/{slug}', 	'Web\PageController@tag')->name('tag');

//Administrador
Route::resource('tags', 		'Admin\TagController');
Route::resource('categories', 	'Admin\CategoryController');
Route::resource('posts', 		'Admin\PostController');
