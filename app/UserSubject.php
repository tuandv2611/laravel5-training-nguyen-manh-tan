<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserSubject extends Model
{
    protected $fillable = ['subject_id', 'user_course_id', 'status'];

    public function subject()
    {
        return $this->belongsTo('App\Subject');
    }

    public function userCourse()
    {
        return $this->belongsTo('App\UserCourse');
    }
}
