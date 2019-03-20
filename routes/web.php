<?php

app()->singleton('App\Example', function(){

    dd('called');

    return new \App\Example;
});


Route::get('/', function () {

    dd(app('App\Example'));

    return view('welcome');
});


Route::resource('projects','ProjectsController');

Route::post('/projects/{project}/task', 'ProjectTasksController@store');
Route::post('/completed-task/{task}', 'CompletedTasksController@store');
Route::delete('/completed-task/{task}', 'CompletedTasksController@destroy');







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
