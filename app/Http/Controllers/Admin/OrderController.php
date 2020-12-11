<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Shipping;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::latest()->get();
        return view('Admin.order.index',compact('orders'));
    }
    
    public function view_order($id)
    {
        $orders = Order::findOrFail($id);
        $orderitems = OrderItem::where('order_id',$id)->get();
        $shipping = Shipping::where('order_id',$id)->first();
        return view('Admin.order.view',compact('orders','orderitems','shipping'));
    }
}
