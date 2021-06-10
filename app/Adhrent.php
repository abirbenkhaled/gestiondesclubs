<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adhrent extends Model
{
    protected $guarded = []; 
    public function clubs()
    {
        return $this->belongsToMany('App\clubs');
    }
}

