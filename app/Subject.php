<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
  public function tasks()
  {
    return $this->hasMany('App\Task');
  }

  public function course_subject()
  {
    return $this->belongsTo('App\CourseSubject');
  }
}
