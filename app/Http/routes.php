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

    // Store Card
    //Route::post('cards', 'CardsController@store');
    // Delete Card
    //Route::delete('cards/{card}/delete', 'CardsController@destroy');

    // show all
    Route::get('/', 'PostController@index');
    Route::get('/home', 'PostController@index');

    // show one
    Route::get('/{post}', 'PostController@show');

    // New post
    Route::get('/new-post', 'PostController@create');
    Route::post('/home', 'PostController@store');

    // edit post
    //Route::get('/{post}/edit', 'PostController@edit');
    //Route::patch('/{post}','PostController@update');


    // comments
    Route::post('/{post}/comments', 'CommentController@store');

});




