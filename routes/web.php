<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::group(['middleware' => ['web']], function() {
    Route::get('blog/{slug}', 'BlogsController@getSingle')
            ->name('blog.single')
            ->where('slug', '[\w\d\-\_]+');
    Route::get('blog', 'BlogsController@getIndex')->name('blog.index');
    Route::get('/', 'PagesController@getIndex')->name('pages.welcome');
    Route::get('/about', 'PagesController@getAbout')->name('pages.about');
    Route::get('/contact', 'PagesController@getContact')->name('pages.contact');
    Route::resource('posts', 'PostsController');
});