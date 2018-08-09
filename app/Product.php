<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function categories(){
        return $this->belongsToMany('App\Category', 'product_categories');
    }

    /**
     * @return string
     */
//    public function presentPrice(){
//        $number->price;
//        $price = number_format($number);
//        return $price;
//    }
}
