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


    // posts

    // show all

    Route::get('/', 'PostController@index');
    Route::get('/home', 'PostController@index');


    // show one

    Route::get('/posts/{post}', 'PostController@show');


    // New post

    Route::get('/create', 'PostController@create');

    Route::post('/home', 'PostController@store');




    // edit post

    Route::get('/posts/{post}/edit', 'PostController@edit');

    Route::patch('/posts/{post}','PostController@update');


    // comments

    Route::post('/posts/{post}/comments', 'CommentController@store');




});




