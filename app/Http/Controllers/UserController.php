<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Shipping;

class UserController extends Controller
{
    public function order()
    {
        $orders = Order::where('user_id',Auth::id())->latest()->get();
        return view('pages.UserProfile.order',compact('orders'));
    }

    public function order_view($id)
    {
        $orders = Order::findOrFail($id);
        $orderitems = OrderItem::with('product')->where('order_id',$id)->get();
        $shipping = Shipping::where('order_id',$id)->first();
        return view('pages.UserProfile.order_view',compact('orders','orderitems','shipping'));
    }
}
