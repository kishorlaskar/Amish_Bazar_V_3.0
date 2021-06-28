<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartProduct extends Model
{
    //
    protected $table ="cart_product";

    protected $fillable =
        [
            "cart_id",
            "product_id",
            "product_quantity",
        ];


    public function product(){

//        return $this->hasMany(Product::class,'product_id','id');
//        return $this->hasMany(Product::class,'product_id','id');
        return $this->belongsTo(Product::class,'product_id','id');
//        return $this->hasMany(Product::class);
    }

    public function carts(){

//        return $this->hasMany(Cart::class,'cart_id','id');
        return $this->belongsTo(Cart::class,'cart_id','id');
    }
}
