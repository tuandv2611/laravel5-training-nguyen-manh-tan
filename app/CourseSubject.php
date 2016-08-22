<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseSubject extends Model
{
  public function course()
  {
    return $this->belongsTo('App\Course');
  }

  public function subject()
  {
    return $this->belongsTo('App\Subject');
  }

  public function activities()
  {
    return $this->morphMany('App\Activity', 'target');
  }
}
