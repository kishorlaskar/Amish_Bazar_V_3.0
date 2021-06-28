<?php

namespace App\Http\Controllers;

use App\CartProduct;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
//        return view('home');
//        $cart_count = CartProduct::count();
//        return view('exampleHosted',compact('cart_count'));
        return redirect()->route('example2');
    }
}
