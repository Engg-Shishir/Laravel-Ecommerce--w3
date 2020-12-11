<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;


class FrontendController extends Controller
{
    #<----======= Frontend Index Page ========----->
    public function index()
    {
        $products = Product::where('status',1)->latest()->get();
        $categoris = Category::where('status',1)->latest()->get();
        return view('pages.index',compact('products','categoris'));
    }

    public function productdetails($id)
    {
        $product = Product::FindOrFail($id);
        $categoris_id = $product->category_id;
        $related_product = Product::where('category_id',$categoris_id)->where('id','!=',$id)->latest()->get();
        return view('pages.product-details',compact('product','related_product'));
    }



    public function shopage()
    {
       $products = Product::latest()->get();
       $productsp = Product::latest()->paginate(3);
       $categorys = Category::where('status',1)->latest()->get();
       return view('pages.shop',compact('products','categorys','productsp'));
    }

    
    public function catWiseProduct($id)
    {
       $products = Product::where('category_id',$id)->latest()->paginate(9);
       $categorys = Category::where('status',1)->latest()->get();
       return view('pages.cat_product',compact('products','categorys'));
    }
}
