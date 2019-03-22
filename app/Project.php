<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;


class Project extends Model
{
    use SoftDeletes;

    protected $guarded = [];


    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function addTask($task)
    {
       $this->tasks()->create($task);

        //        Task::create([
//
//            'project_id' => $project->id,
//            'description' => request('description')
//
//        ]);

    }
    protected $dates = ['deleted_at'];

}
