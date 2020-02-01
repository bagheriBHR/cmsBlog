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

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//Route::middleware(['admin'])->group(function(){
    Route::resource('admin','admin\AdminController');
    Route::resource('user','admin\UserController');
    Route::resource('post','admin\PostController');
    Route::resource('category','admin\CategoryController');
    Route::resource('photo','admin\PhotoController');
    Route::resource('comment','admin\CommentController');
    Route::get('comment/action/{id}','admin\CommentController@action')->name('comment.action');
    Route::delete('deletePhoto','admin\PhotoController@deleteAll')->name('photo.delete.all');
//});

Route::get('/','Frontend\MainController@index')->name('frontend.index');
Route::get('posts/{slug}','Frontend\FrontendPostController@show')->name('frontend.post.show');
Route::get('posts','Frontend\FrontendPostController@all')->name('frontend.post.all');
Route::get('search','Frontend\FrontendPostController@searchTitle')->name('frontend.post.search');
Route::post('comments/{id}','Frontend\CommentController@store')->name('frontend.comment.store');
Route::post('comments','Frontend\CommentController@reply')->name('frontend.comment.reply');

