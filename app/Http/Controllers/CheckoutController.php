<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;



class CheckoutController extends Controller
{
    public function checkoutview()
    {
        $total = Cart::all()->where('user_ip', Request()->ip())->sum(function($t){
          return $t->price * $t->qty;
        });
        return view('pages.checkoutview',compact('total'));
    }

    public function order_success()
    {
      return view('pages.order_compleate');
    }
}
