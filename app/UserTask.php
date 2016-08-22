<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserTask extends Model
{
    protected $fillable = ['task_id', 'user_course_id', 'status'];

    public function task()
    {
        return $this->belongsTo('App\Task');
    }

    public function userCourse()
    {
        return $this->belongsTo('App\UserCourse');
    }
}
