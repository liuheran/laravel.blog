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

Route::get('/', 'WelcomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('blog', 'BlogController@index');

Route::get('blog/{slug}', 'BlogController@showPost')->where('slug', '[a-z0-9]+');

Route::get('category/{id}', 'CategoryController@index')->where('id', '[0-9]+');

Route::get('manager', function () {
    return redirect('/admin/post');
});

Route::prefix('admin')->group(function () {
    Route::namespace('Admin')->group(function () {
        // Controllers Within The "App\Http\Controllers\Admin" Namespace
        Route::any('post', 'PostController@index');
        Route::any('post/create', 'PostController@create');
        Route::any('post/store', 'PostController@store');
        Route::any('post/edit/{id}', 'PostController@edit')->where('id', '[0-9]+');
        Route::any('post/update/{id}', 'PostController@update')->where('id', '[0-9]+');
        Route::any('post/destroy/{id}', 'PostController@destroy')->where('id', '[0-9]+');
        Route::any('tag', 'TagController@index');
        Route::any('tag/create', 'TagController@create');
        Route::any('tag/store', 'TagController@store');
        Route::any('tag/edit/{id}', 'TagController@edit')->where('id', '[0-9]+');
        Route::any('tag/update/{id}', 'TagController@update')->where('id', '[0-9]+');
        Route::any('tag/destroy/{id}', 'TagController@destroy')->where('id', '[0-9]+');
        Route::any('upload', 'UploadController@index');
        Route::post('upload/file', 'UploadController@uploadFile');
        Route::delete('upload/file', 'UploadController@deleteFile');
        Route::post('upload/folder', 'UploadController@createFolder');
        Route::delete('upload/folder', 'UploadController@deleteFolder');
    });
});