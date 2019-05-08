<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class responses extends Model
{
  protected $guarded = [];

  /**
   * Create relationship with questions model
   * Many-to-many relationship
   */
  public function questions()
  {
    return $this->hasMany('App\questions');
  }

}
