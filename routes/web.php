<?php

use App\Task;
Route::get('/', function(){
	return view('layout');
});

Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/{task}', 'TasksController@show');
