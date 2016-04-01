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

    // show one
    Route::get('/{post}', 'PostController@show');


    // New post
    Route::get('/new-post', 'PostController@create'); // change
    Route::post('/add-post', 'PostController@store');

    // New Comment
    Route::post('/{post}/comments', 'CommentController@store');

    // Delete Post
    Route::delete('/delete',  ['as' => 'delete', 'uses' => 'PostController@destroy']);

    // edit post
    Route::get('/edit', 'PostController@edit');
    //Route::patch('/{post}','PostController@update');







});




