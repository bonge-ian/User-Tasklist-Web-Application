<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubTask;
use App\Task;

class SubTasksController extends Controller
{
    /**
    * Stores the a subtask belonging to a task
    * @param int $task - the id of the task
    * @return \Illuminate\Http\Response
    */
    public function store(Task $task) {
        // validated the subtask added
        $validated = request()->validate(['sub_task' => 'required']);
        
        // append task_id to $validated[]
        $validated += ['task_id' => $task->id];
        
        // store in db
        SubTask::create($validated);
        
        // return to view page
        return back()->with('success', 'Subtask Added successfully');
    }
    
    /**
     * Update the subtask.
     *
     * @param  int  $subtask - the id of the subtask
     * @return \Illuminate\Http\Response
     */
    public function update(SubTask $subtask) {
        // check to see if checkbox has been checked
       $method = request()->has('completed') ? 'complete' : 'incomplete';
    
        // update the completed column
        $subtask->$method();
        
        // return to view page
        return redirect()->route('tasks.view')->with('success', 'Subtask completed successfully');
    }

}
