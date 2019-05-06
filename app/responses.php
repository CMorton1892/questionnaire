<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class responses extends Model
{
  protected $guarded = [];

  public function questions()
  {
    return $this->hasMany('App\questions');
  }

}
