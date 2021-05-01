<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resevent extends Model
{
    public function clubs()
    {
        return $this->hasMany('App\Club');
    }
}
