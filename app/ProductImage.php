<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
     public function products()
    {
    	return $this->belongsTo('App\Product');
    }
}
