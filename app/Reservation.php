<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    public function camp(){
        return $this->belongsTo('App\Camp');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
