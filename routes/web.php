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

Route::resource('products', 'ProductController')->except(['index']);
Route::get('/', 'ProductController@Index');
Route::get('modal-view', 'ProductController@getQuickView');

Route::get('/about', 'PagesController@getAbout');
Route::get('/services', 'PagesController@getServices');

Route::get('profile', 'UserController@profile');
Route::post('profile', 'UserController@update_avatar');

Route::resource('posts', 'PostController');

Auth::routes();
Route::get('/dashboard', 'DashboardController@index');
