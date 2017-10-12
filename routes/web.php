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
});
// Route::get('/hello', function () {
//     return view('hello');
// });
Route::resource('hello','ArticleController');*/

Route::get('/','HomeController@index');
Route::get('search','HomeController@search');

Route::get('login','auth\authController@showLoginForm');
Route::post('login','auth\authController@loging');
Route::get('logout','auth\authController@logout');

Route::resource('post','PostController');
Route::resource('type','PostTypeController',['except'=>['index']]);

