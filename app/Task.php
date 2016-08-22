<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['name', 'description', 'status', 'subject_id'];

    public function subject()
    {
        return $this->belongsTo('App\Subject');
    }
}
