<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_Category extends Model
{
    public function product(){
        return $this->hasMany('App\Product', 'product_cat_id');
    }
}
