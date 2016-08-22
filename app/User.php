<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = ['name', 'email', 'password', 'is_supervisor'];
    protected $hidden = ['password', 'remember_token'];

    public function userCourses()
    {
        return $this->belongsToMany('App\UserCourse', 'user_courses');
    }
}
