<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class owners extends Model
{
    protected $fillable = [
      'ownerID',
      'ownerFirstName',
      'ownerLastName',
      'ownerEmail',
      'ownerUsername',
      'ownerPassword',
    ];
