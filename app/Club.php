<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{ public function Events(){
    return $this->belongsTo('App\Club');
}
{

    public function adhrents()
    {
        return $this->belongsToMany('App\Adhrent');
    }
}


