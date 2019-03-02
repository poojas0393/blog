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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', 'BlogController@index');
Route::get('preview/{id}', 'BlogController@preview_post')->name('preview');
Route::post('addcomment', 'BlogController@addcomment')->name('addcomment');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
