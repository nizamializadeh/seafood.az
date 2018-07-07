<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Camp extends Model
{
    public function reservation_camp(){
        return $this->hasMany('App\Reservation', 'camp_id');
    }
}
