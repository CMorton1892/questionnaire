<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class respondents extends Model
{
    protected $fillable = [
      'respondentID',
      'respondentFirstName',
      'respondentLastName',
      'age',
      'country',
      'consent',
    ];
}
