<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserCourse extends Model
{
    protected $fillable = ['user_id', 'course_id', 'status'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function course()
    {
        return $this->belongsTo('App\Course');
    }

    public function userSubjects()
    {
        return $this->hasMany('App\UserSubject');
    }

    public function userTasks()
    {
        return $this->hasMany('App\UserTask');
    }
}
