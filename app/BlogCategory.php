<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    public function blog(){
        return $this->hasMany('App\Blog', 'blog_cat_id');
    }
}
