<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class questions extends Model
{
  protected $guarded = [];

  public function questionnaires()
  {
  return $this->belongsTo('App\questionnaires');
  }

  public function responses()
  {
    return $this->hasMany('App\responses');
  }
}
