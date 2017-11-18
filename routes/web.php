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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Sistema de Proyectos
Route::get('/proyectos', function () {
    return view('proyectos');
});
//Crear
Route::post('/proyectos/crear', 'ProjectsController@create');
//Leer
Route::get('/proyectos/', 'ProjectsController@read');
//Actualizar
Route::post('/proyectos/update/{id}', 'ProjectsController@update');
//Eliminar
Route::delete('/proyectos/delete/{id}', 'ProjectsController@delete');
//Editar
Route::get('/proyectos/update/{id}', 'ProjectsController@edit');
//Preguntar
Route::get('/proyectos/delete/{id}', 'ProjectsController@preguntar');
