<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function product_category(){
        return $this->belongsTo('App\Product_Category', 'product_cat_id');
    }

    /**
     * @return string
     */
//    public function presentPrice(){
//        $number->price;
//        return number_format($number, 2, ',');
//    }
}
