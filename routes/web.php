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

// Route::resource('/', 'PostController');
// Route::resource('posts', 'PostController');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function()
{
    Route::get('/posts/{post}/edit', 'PostController@edit')->name('posts.edit');
    Route::get('/posts', 'PostController@destroy')->name('posts.destroy');
    Route::get('/posts/create', 'PostController@create')->name('posts.create');
    Route::post('/posts', 'PostController@store')->name('posts.store');
    Route::post('/posts/{post}', 'PostController@update')->name('posts.update');
});

Route::get('/', 'PostController@index');
Route::get('/posts/fetch', 'PostController@fetch')->name('posts.fetch');
Route::get('/posts/{post}', 'PostController@show')->name('posts.show');
