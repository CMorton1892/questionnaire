<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class questionnaires extends Model
{
    protected $guarded = [];

    /**
     * Create relationship with questions model
     * One-to-many relationship
     */
    public function questions()
    {
      return $this->hasMany('App\questions');
    }
}
