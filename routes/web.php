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
Route::get('gallery',[
    'as' => 'gallery',
    'uses' => 'PagesController@getGallery'
]);
Route::get('produce',[
    'as' => 'produce',
    'uses' => 'PagesController@getProduce'
]);
Route::get('about',[
    'as' => 'about',
    'uses' => 'PagesController@getAbout'
]);
Route::get('news',[
    'as' => 'news',
    'uses' => 'PagesController@getNews'
]);
