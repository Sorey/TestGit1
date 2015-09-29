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

/*Route::get('/', function () {
    return view('welcome');
});
*/

get('/', ['as' => 'posts', 'uses' => 'PostController@index']);
get('/unpublished', ['as' => 'posts.unpublished', 'uses' => 'PostController@unpublished']);

get('post/create',       ['as' => 'post.create', 'uses' => 'PostController@create']);
post('post',             ['as' => 'post.store',  'uses' => 'PostController@store']);
get('post/{post}',       ['as' => 'post.show',   'uses' => 'PostController@show']);
get('post/{post}/edit',  ['as' => 'post.edit',   'uses' => 'PostController@edit']);
post('post/{post}',      ['as' => 'post.update', 'uses' => 'PostController@update']);

//$router->resource('post', 'PostController');