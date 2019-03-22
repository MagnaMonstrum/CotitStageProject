<?php

use App\Repositories\UserRepository;

use App\Services\Twitter;

//app()->singleton('App\Services\Twitter', function(){
//
//    return new \App\Services\Twitter('tweetweet');
//
//});


Route::get('/', function () {


    return view('home');
});


Route::resource('projects','ProjectsController');

//    ->middleware('can:update, project');

Route::post('/projects/{project}/task', 'ProjectTasksController@store');
Route::post('/completed-task/{task}', 'CompletedTasksController@store');
Route::delete('/completed-task/{task}', 'CompletedTasksController@destroy');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');





//Route::get('/projects', "ProjectsController@index");
//Route::get('/projects/create', "ProjectsController@create");
//Route::get('/projects/{project}', "ProjectsController@show");
//Route::post('/projects', "ProjectsController@store");
//Route::get('projects/{project}/edit', 'ProjectsController@edit');
//Route::patch('projects/{project}', 'ProjectsController@update');
//Route::delete('projects/{project}', 'ProjectsController@destroy');

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

