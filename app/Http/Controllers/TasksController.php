<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use Illuminate\Support\Facades\Auth;

class TasksController extends Controller
{

    /**
     * Create an instance of the class
     */
    public function __construct() {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('app.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate input
        $validated = request()->validate([
            'title' => 'required|min:3',
            'description' => 'required'
        ]);

        // add user field to $validated
        $validated += ['user_id' => Auth::id()];

        // insert to DB
        Task::create($validated);

        // return to view page
        return redirect('/tasks/view')->with([
            'success' => 'Task added successfully'
        ]);
    }

    /**
     * Display all tasks
     * @param  
     * @return \Illuminate\Http\Response
     */
    public function tasks() {
        $tasks = Task::where('user_id', Auth::id())->latest()->get();
            
        return view('app.tasks')->with('tasks', $tasks);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        $task->delete();

        // fetch tasks and go to view tasks template
        $tasks = $this->fetch();
        return redirect('/tasks/view')->with([
            'success' => 'Task deleted successfully',
           
        ]);
    }

   
}
