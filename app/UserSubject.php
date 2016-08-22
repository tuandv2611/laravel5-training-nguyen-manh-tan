<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserSubject extends Model
{
  public function subject()
  {
    return $this->belongsTo('App\Subject');
  }

  public function user_course()
  {
    return $this->belongsTo('App\UserCourse');
  }
}
