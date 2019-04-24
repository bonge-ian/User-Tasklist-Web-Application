<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    // fillable fields
    protected $fillable = ['title', 'description', 'user_id'];

    /**
     * A task belongs to a user
     * @return the user of a particular task
     */
    public function user() {
        return $this->belongsTo(User::class);
    }

    /**
     * A task has many sub tasks
     * @return subtasks belonging to a particular task
     */
    public function subTasks() {
        return $this->hasMany(SubTask::class);
    }
    
    /**
    * Add a subtask
    */
    public function addSubTask($sub_task) {
        return $this->subTasks()->create($sub_task);
    }

}
