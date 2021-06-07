<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
  public function clubs()
  {
      return $this->hasMany('App\Workshop');
  }
}
