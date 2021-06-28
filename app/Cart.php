<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //
    protected $table = "carts";
    protected $fillable = ['product_id', 'product_quantity','user_ip','order_status'];

    public function product()
    {
//        return $this->belongsTo(Product::class);
//        return $this->hasMany(Product::class,'product_id','id');

        return $this->belongsToMany(Product::class);

    }


    public function cart_product(){

        return $this->belongsTo(CartProduct::class,'id','cart_id');
//        return $this->belongsTo(CartProduct::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public static function totalCarts()
    {
        $carts = Cart::all();

        return $carts;
    }
    public static function  totalItems()
    {
//        $carts = Cart::all();
        $total_items = Cart::count();

//        $total_items = 0;
//        foreach ($carts as $cart)
//        {
//            $total_items += $cart->product_quantity;
//        }
        return $total_items;
    }
}
