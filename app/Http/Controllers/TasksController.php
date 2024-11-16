<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index(){
        $tasks = Task::orderBy('completed_at')
        ->orderBy('id', 'DESC')
        ->get();

        return view('tasks.index',[
          'tasks' => $tasks, // he called it {{'tasks' =>}} (it will come $$tasks)because alone it will be undefined variables
        ]);
    }

    public function create(){
        return view(view: 'tasks.create');
    }

    public function store()
    {   
        $validated = request() -> validate([
            'description' => 'required|max:255',
        ]);
        
        $task = Task::create([
        'description' => request('description'),
    ]);


    return redirect('/');
}

public function update($id){
    $task = Task::where('id', $id) -> first();

    $task -> completed_at = now();
    $task -> save();

    return redirect('/');
}


public function delete($id) 
{
    $task = Task::where('id', $id) -> first();
    $task -> delete();

    return redirect('/');
}



}