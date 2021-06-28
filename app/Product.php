<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = "products";
    protected $fillable = [
        'category_id', 'product_name', 'product_image', 'price', 'product_stock', 'quantity', 'description', 'active_status',
    ];


    public function categories()
    {
        return $this->belongsTo(Category::class);
    }


    public function cart_product(){

//        return $this->belongsTo(CartProduct::class,'id','product_id');
        return $this->belongsTo(CartProduct::class,'id','product_id');

    }
}
