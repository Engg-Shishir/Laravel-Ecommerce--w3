<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Cupon;
use App\Models\WishList;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function addToCart(Request $request,$id)
    {
      if(Auth::check())
      {
        WishList::where('product_id',$id)->delete();
        $check = Cart::where('pro_id',$id)->where('user_ip', request()->ip())->first();
        if($check)
        {
          if($request->update_qty > 1)
          {
            Cart::where('pro_id',$id)->where('user_ip', request()->ip())->increment('qty',$request->update_qty);
          }else{
            Cart::where('pro_id',$id)->where('user_ip', request()->ip())->increment('qty');
          }
          return back()->with('message',' Priduct Increment on cart');
        }else{
            if($request->update_qty > 1)
            {
              Cart::insert([
                'pro_id'=> $id,
                'qty'=> $request->update_qty,
                'price'=> $request->price,
                'user_ip'=> request()->ip(),
      
              ]);
            }else{
              Cart::insert([
                'pro_id'=> $id,
                'qty'=> 1,
                'price'=> $request->price,
                'user_ip'=> request()->ip(),
      
              ]);
            }

            return back()->with('message',' Priduct added on cart');
        }
      }else{
          return Redirect()->route('login')->with('error','You Should Login First');
      }
    }

    public function cartPage()
    {
      
      if(Auth::check())
      {
        $carts = Cart::where('user_ip',request()->ip())->latest()->get();
        $total = Cart::all()->where('user_ip', Request()->ip())->sum(function($t){
          return $t->price * $t->qty;
        });
        return view('pages.cart', compact('carts','total'));

      }else{
        return Redirect()->route('login')->with('error','You Should Login First');
      }
    }

    #<-------===== Delete Category ======------>
    public function remove($id)
    {
        Cart::where('id',$id)->where('user_ip',request()->ip())->delete();
        return back()->with('message','Data Deleted Successfully');
    }


    public function qty_update(Request $request,$id)
    {
        Cart::where('id',$id)->where('user_ip',request()->ip())->update([
          'qty'=> $request->update_qty
        ]);
        return back();
    }

    
    public function cupon_aplay(Request $request)
    {
      $check = Cupon::where('cupon_name',$request->cupon)->first();
      if($check)
      {
        $total = Cart::all()->where('user_ip', Request()->ip())->sum(function($t){
          return $t->price * $t->qty;
        });

        Session::put('cupon',[
           'cupon_name'=> $check->cupon_name,
           'cupon_discount'=> $check->discount,
           'discount_amount'=> $total*($check->discount/100)
        ]);
        return back();

      }else{
        return back()->with('error_cupon','You insert invalid cupon');
      }
       
    }

    public function  cupon_remove()
    {
      if(Session::has('cupon'))
      {
        session()->forget('cupon');
        return back()->with('error','you Removed  Cupon Successfully');
      }
    }
    
}
