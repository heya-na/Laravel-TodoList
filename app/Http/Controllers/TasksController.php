<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;

class TasksController extends Controller
{
    public function index(){
    	$tasks = Task::all();
    	return view('tasks.index', compact('tasks'));
    }

    public function show(Task $task){

    	return view('tasks.show', compact('task'));
    }

    public function create(){

    	return view('tasks.create');
    }

    public function store(){

    	//dd(request()->all());

    	$this->validate(request(), [
    		'body' => 'required'
    	]);
    	
    	//create a new task using the request data
    	$task = new Task;

    	$task->body = request('body');

    	//save it to the database
    	$task->save();

    	//redirect to tasks page
    	return redirect('/tasks');
    }

    public function delete(Task $task){
    	$task->delete();

    	return redirect('/tasks');
    }
}
