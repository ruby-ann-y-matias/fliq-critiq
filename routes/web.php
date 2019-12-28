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

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/feed', 'HomeController@showFeed');

Route::get('/flicks', 'FlickController@showAll');

Route::get('/flicks/view/{id}', 'FlickController@showOne');

Route::get('/flicks/{id}', 'FlickController@retrieve');

Route::post('/flicks/{id}/add-genres', 'FlickController@addGenres');

Route::get('/flicks/genre/{id}', 'FlickController@filter');

Route::post('/flicks/create', 'FlickController@create');

Route::get('/flicks/edit/{id}', 'FlickController@edit');

Route::post('/flicks/update/{id}', 'FlickController@update');

Route::delete('/flicks/delete/{id}', 'FlickController@delete');

Route::get('/binge', 'UserController@showList');

Route::get('/profile', 'HomeController@viewCurrent');

Route::post('/profile/edit/{id}', 'HomeController@editSelf');

Route::get('/profile/retrieve/{id}', 'HomeController@retrieve');

Route::delete('/profile/delete/{id}', 'HomeController@delete');

Route::post('/profile/add-to-binge/{id}', 'HomeController@addToBinge');

Route::delete('/profile/remove-from-binge/{id}', 'HomeController@removeFromBinge');

Route::get('/discover', 'HomeController@showMatch');

Route::get('/profile/view/{id}', 'UserController@discover');

Route::post('/profile/follow/{id}', 'UserController@followUser');

Route::post('/profile/unfollow/{id}', 'UserController@unfollowUser');

Route::get('/profile/followers/{id}', 'UserController@getFollowers');

Route::get('/profile/following/{id}', 'UserController@getFollowing');

Route::post('/comment/new/{id}', 'UserController@newComment');

Route::post('/comment/delete/{id}', 'UserController@commentDelete');

Route::post('/comment/edit/{id}', 'UserController@editComment');

Route::post('/comment/like/{id}', 'UserController@like');

Route::post('/comment/reply/{id}', 'UserController@reply');

Route::post('/reply/like/{id}', 'UserController@replyLike');

Route::post('/reply/edit/{id}', 'UserController@editReply');

Route::post('/reply/delete/{id}', 'UserController@deleteReply');
