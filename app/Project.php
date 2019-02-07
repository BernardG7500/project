<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// class Project extends Model
// {
//     protected $fillable = [
//         'title', 'description'
//     ];
// }

class Project extends Model
{
    protected $guarded = [];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function addTask($task)
    {
        $this->tasks()->create($task);

        //$this->tasks()->create(['description' => $description]);

        // return Task::create([
        //     'project_id' => $this->id,
        //     'description' => $description
        // ]);
    }
}
