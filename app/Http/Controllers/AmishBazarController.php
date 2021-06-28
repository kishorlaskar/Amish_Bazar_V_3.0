<?php

namespace App\Http\Controllers;

use App\Cart;
use App\CartProduct;
use App\Category;
use App\Order;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AmishBazarController extends Controller
{
    //
    public function home_page()
    {
        $cart_items = CartProduct::with('carts', 'product')->get();
//        dd($cart_items);

        $cart_count = CartProduct::count();

        $total_amount = 0;

        foreach ($cart_items as $item) {

            $total_amount += $item->product_quantity * $item->product->price;


        }
        $products = Product::with('cart_product')->where('active_status', 1)->get();
        $categories = Category::with('products')->get();
        return view('frontend.amish_bazar_home', compact('products', 'cart_count', 'total_amount', 'cart_items', 'categories'));

    }

    public function shop_page()
    {

        $cart_items = CartProduct::with('carts', 'product')->get();
//        dd($cart_items);

        $cart_count = CartProduct::count();

        $total_amount = 0;

        foreach ($cart_items as $item) {

            $total_amount += $item->product_quantity * $item->product->price;


        }
        $products = Product::with('cart_product')->where('active_status', 1)->get();
        $categories = Category::with('products')->get();

        return view('frontend.amish_bazar_shop', compact('products', 'cart_items', 'total_amount', 'cart_count', 'categories'));
    }

    public function blog_page()
    {
        return view('frontend.amish_bazar_blog');
    }

    public function category_wise_product(Request $request)
    {
        $category_id = $request->category_id;

        $products = Product::with('categories', 'cart_product')->where('category_id', $category_id)->get();

        return response()->json([

            "products" => $products
        ]);

    }

    public function sngle_product_page($id)
    {
        $cart_items = CartProduct::with('carts', 'product')->get();
//        dd($cart_items);

        $cart_count = CartProduct::count();

        $total_amount = 0;

        foreach ($cart_items as $item) {

            $total_amount += $item->product_quantity * $item->product->price;


        }

        $product = Product::with('cart_product')->find($id);
        $products = Product::with('cart_product')->where('active_status', 1)->get();

//        dd($product);
        return view('frontend.single_product', compact('product', 'cart_count', 'total_amount', 'cart_items', 'products'));
    }

    public function category_wise_product_home_page($id)
    {

        $hidden_category_id = $id;

        $products = Product::with('cart_product', 'categories')->where('category_id', $id)->get();
        $cart_items = CartProduct::with('carts', 'product')->get();
//        dd($cart_items);

        $cart_count = CartProduct::count();

        $total_amount = 0;

        foreach ($cart_items as $item) {

            $total_amount += $item->product_quantity * $item->product->price;


        }
        $categories = Category::with('products')->get();

        return view('frontend.category_wise_product', compact('products', 'cart_items', 'total_amount', 'cart_count', 'categories', 'hidden_category_id'));


    }

    public function custom_checkout(Request $request)
    {
        $cart_items = CartProduct::with('carts', 'product')->get();
//        dd($cart_items);

        $cart_count = CartProduct::count();
//        dd($cart_count);

        $total_amount = 0;

        foreach ($cart_items as $item) {

            $total_amount += $item->product_quantity * $item->product->price;


        }
        $cart_id = Cart::where('user_ip',$request->ip())->first();
        return view('frontend.custom_checkout_page', compact('cart_items', 'cart_count', 'total_amount','cart_id'));
    }

    public function payment_post(Request $request)
    {
//        dd($request->cart_id);
        $post_data = array();
        $post_data['amount'] = $request->amount; # You cant not pay less than 10
        $post_data['currency'] = "BDT";
        $post_data['transaction_id'] = uniqid(); // tran_id must be unique

        # CUSTOMER INFORMATION
        $post_data['name'] = $request->customer_name;
        $post_data['email'] = $request->customer_email;
        $post_data['address'] = $request->address_name;

        $post_data['cus_country'] = "Bangladesh";
        $post_data['phone'] = $request->customer_mobile;

        $post_data['user_ip'] = $request->ip();
        $post_data['status'] = "processed";
        $post_data['user_id'] = Auth::user()->id;

//        dd($post_data);
         $order_create = Order::create($post_data);

         if($order_create) {

             $cart = Cart::find($request->cart_id);

             $cart->order_status = 1;
             $cart->save();

             CartProduct::where('cart_id',$request->cart_id)->delete();


//             return redirect()->route('shop-page.index')->with('success', 'Transaction Successful');
             return redirect()->back()->with('success', 'Transaction Successful');


         }

    }


}
