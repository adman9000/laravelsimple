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

use \App\Task;
Route::get('/posts', 'PostController@index'); //view all posts
Route::get('/post/{post}', 'PostController@show'); //view a post
Route::get('/posts/create', 'PostController@create'); // create post form
Route::get('/post/{post}/edit', 'PostController@edit'); //edit post form
Route::post('/posts', 'PostController@store'); //Submit new post
Route::patch('/post/{post}', 'PostController@update'); //Submit edit post
Route::delete('/post/{post}', 'PostController@delete'); //Submit delete post

Route::get('/', function () {
    return view('welcome');
});


//Using routes only
Route::get('/demo', function() {
	$tasks = Task::all();
	return view("demo", array("tasks" => $tasks));
});

//Using a controller
Route::get('/tasks', 'DemoController@index');


Route::get('/tasks/urgent', 'DemoController@urgent');

Route::get('/tasks/{task}', 'DemoController@show');


//Using a controller