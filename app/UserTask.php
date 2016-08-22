<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserTask extends Model
{
  public function task()
  {
    return $this->belongsTo('App\Task');
  }

  public function user_course()
  {
    return $this->belongsTo('App\UserCourse');
  }
}
