<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['web']], function () {
    //

    Route::auth();

    // show all
    Route::get('/', 'PostController@index');
    Route::get('/home',  ['as' => 'home', 'uses' => 'PostController@index']);

    // New post
    Route::get('/new-post', 'PostController@create');
    Route::post('/add-post',  ['as' => 'add-post', 'uses' => 'PostController@store']);

    // Delete Post
    //Route::delete('/{post}/delete',  ['as' => 'delete', 'uses' => 'PostController@destroy']);
    Route::get('/{post}/delete', 'PostController@destroy');

    // edit post
    //Route::get('/edit', 'PostController@edit');
    //Route::patch('/{post}','PostController@update');

    // show one
    Route::get('/{post}', 'PostController@show');

    // New Comment
    Route::post('/{post}/comments', 'CommentController@store');









});




