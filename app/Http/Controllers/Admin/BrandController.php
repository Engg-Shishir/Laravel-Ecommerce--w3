<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use Carbon\Carbon;

class BrandController extends Controller
{
    #<----======= Make User Login Guard ========----->
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    #<-------===== Show Brand page ======------>
    public function index()
    {
        $brand = Brand::latest()->get();
        return view('Admin.brand.index',compact('brand'));
    }
    #<-------===== Store Brand ======------>
    public function store_brand(Request $request)
    {
        #<-------===== Custom Validation Message ======------>
        $request->validate([
            'brand_name' => 'required|unique:brands,brand_name',
        ],[
            'brand_name.required' => 'Enter Brand Name',
        ]);
        
        Brand::insert([
            'brand_name' => $request->brand_name,
            'created_at' => Carbon::now()
        ]);
    
        return back()->with('brand_insert','Data Inserted Successfully');
    }

    
    
    #<---====== Brand Edit ======------>
    public function edit($id)
    {
      $get = Brand::findOrFail($id);
      return view('Admin.brand.edit', compact('get'));
    }
    #<-------===== Update Brand ======------>
    public function brand_update(Request $request)
    {
        #<-------===== Custom Validation Message ======------>
        $request->validate([
            'brand_name' => 'required|unique:brands,brand_name',
        ],[
            'brand_name.required' => 'Enter Brand Name',
        ]);
        
        Brand::find($request->brand_id)->update([
            'brand_name' => $request->brand_name,
            'updated_at' => Carbon::now()
        ]);
    
        return Redirect()->route('admin.brand')->with('message','Data Updated Successfully');
    }
    #<-------===== Delete Brand ======------>
    public function delete($id)
    {
        
        Brand::find($id)->delete();
    
        return back()->with('message','Data Deleted Successfully');
    }
    #<---====== Brand Status Manage ======------>
    public function status($bid,$status)
    {
        if($status == 1){
            Brand::find($bid)->update([
                'status' => 0,
                'updated_at' => Carbon::now()
            ]);

        }else{
            Brand::find($bid)->update([
                'status' => 1,
                'updated_at' => Carbon::now()
            ]);

        }

        return back()->with('message',' Status Updated Successfully');
    }

}
