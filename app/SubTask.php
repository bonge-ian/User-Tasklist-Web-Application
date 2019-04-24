<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubTask extends Model
{
    // columns that are mass assignable
    protected $fillable = ['sub_task', 'task_id', 'completed'];
    
    
    /**
     * A sub task belongs to a task
     */
    public function task() {
        return $this->belongsTo(Task::class);
    }
    
    /**
    * Update the completed column in db to true
    * @param bool $completed
    */
    public function complete($completed = true) {
        // update the column
        $this->update(compact('completed'));
    }
    
    /**
    * Update the completed column in db to false
    */
    public function incomplete() {
        // call complete function
        $this->complete(false);
    }
}
