<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    public function clubs()
  {
      return $this->hasMany('App\Reservation');
  }
}
