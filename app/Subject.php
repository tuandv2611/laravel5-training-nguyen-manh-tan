<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = ['name', 'description', 'status'];

    public function tasks()
    {
        return $this->hasMany('App\Task');
    }

    public function courseSubject()
    {
        return $this->belongsTo('App\CourseSubject');
    }
}
