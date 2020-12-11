<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WishList;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;




class WishListController extends Controller
{
    public function addToWishList($id)
    {
        if(Auth::check())
        {
            $check = WishList::where('product_id',$id)->where('user_id',Auth::id())->first();
            if($check)
            {
              return back()->with('error',' Priduct Allready Added In WishList');
            }else{
                $check = Cart::where('pro_id',$id)->where('user_ip',request()->ip())->first();
                if($check)
                {
                  return back()->with('message',' Priduct Allready Added In Cart');
                }else{
                  WishList::insert([
                    'product_id'=> $id,
                    'user_id'=> Auth::id(),
                  ]);
                  return back()->with('message',' Priduct added on WishList');
                }
            }
        }else{
            return Redirect()->route('login')->with('error','You Should Login First');
        }
    }

    
    public function wishlistPage()
    {
      $wishlists = WishList::where('user_id',Auth::id())->latest()->get();
      return view('pages.wishlist.index', compact('wishlists'));
    }

        #<-------===== Delete Category ======------>
        public function remove($id)
        {
            WishList::where('id',$id)->delete();
            return back()->with('message','You Remove A WishList');
        }
}
