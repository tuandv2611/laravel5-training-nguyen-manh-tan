<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
  public function course_subjects()
  {
    return $this->hasMany('App\CourseSubject');
  }

  public function activities()
  {
    return $this->morphMany('App\Activity', 'target');
  }
}
