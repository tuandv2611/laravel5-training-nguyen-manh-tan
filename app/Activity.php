<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = ['description', 'user_id', 'target_id', 'target_type'];

    public function target()
    {
        return $this->morphTo();
    }
}
