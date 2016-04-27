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

//Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

get('/', 			['as' => 'post', 'uses' => 'PostController@index']);
get('unpublished', 	['as' => 'post.unpublished', 'uses' => 'PostController@unpublished']);

get('/create', 		['as' => 'post.create', 'uses' => 'PostController@create']);
post('/store', 		['as' => 'post.store', 	'uses' => 'PostController@store']);
//get('post/{post}', 	['as' => 'post.show', 	'uses' => 'Postcontroller@show']);
//get('post/{post}/edit', 		['as' => 'post.dit', 	'uses' => 'Postcontroller@edit']);
//post('post/{post}', 			['as' => 'post.update', 'uses' => 'Postcontroller@update']);
get('/all_users',			['as' => 'user.show', 'uses' => 'GetUser@show']);