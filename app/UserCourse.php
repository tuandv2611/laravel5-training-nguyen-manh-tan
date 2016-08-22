<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserCourse extends Model
{
  public function user()
  {
    return $this->belongsTo('App\User');
  }

  public function course()
  {
    return $this->belongsTo('App\Course');
  }

  public function user_subjects()
  {
    return $this->hasMany('App\UserSubject');
  }

  public function user_tasks()
  {
    return $this->hasMany('App\UserTask');
  }
}
