<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class questionnaires extends Model
{
    protected $guarded = [];

    public function questions()
    {
      return $this->hasMany('App\questions');
    }
}
