<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class questions extends Model
{
  protected $guarded = [];

  /**
   * Create relationship with questionnaires Model
   * One-to-many relationship
   */
  public function questionnaires()
  {
  return $this->belongsTo('App\questionnaires');
  }

  /**
   * Create relationship with responses model
   * Many-to-many relationship
   */
  public function responses()
  {
    return $this->hasMany('App\responses');
  }
}
