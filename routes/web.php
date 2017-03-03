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

Route::get('/home', 'HomeController@index');
Route::get('/que-es-redtica', 'InstitucionController@redtica');
Route::get('/introduccion', 'InstitucionController@introduccion');
Route::get('/areas-tematicas', 'InstitucionController@areas');
Route::get('/actores', 'InstitucionController@actores');
Route::get('/sistema-productivo', 'InstitucionController@sistemaProductivo');
Route::get('/objetivos', 'InstitucionController@objetivos');
Route::get('/mision', 'InstitucionController@mision');
Route::get('/vision', 'InstitucionController@vision');
Route::get('/ubicacion', 'InstitucionController@ubicacion');
