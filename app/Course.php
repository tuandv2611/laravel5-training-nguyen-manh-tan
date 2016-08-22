<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['name', 'description', 'start_date', 'end_date', 'status'];

    public function courseSubjects()
    {
        return $this->hasMany('App\CourseSubject');
    }

    public function activities()
    {
        return $this->morphMany('App\Activity', 'target');
    }
}
