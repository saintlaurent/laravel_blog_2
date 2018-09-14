<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
	public function index(){
//		$tasks = Task::all();
//		return view('tasks.index', compact('tasks'));

		return view('layout');
	}

	//Route model binding
	public function show(Task $task){
		//$task is the same name as the wildcard passed in the routes
		return view('tasks.show', compact('task'));
	}
}
