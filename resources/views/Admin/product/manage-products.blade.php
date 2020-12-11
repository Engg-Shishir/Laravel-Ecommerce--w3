@extends('Admin.backend_master')
@section('title') Manage Product @endsection
@section('products') active show-sub @endsection 
@section('manage-products') active @endsection
@section('admin_content')
<div class="sl-mainpanel">
  <!--======== Page Breadcrumb=========-->
  <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="{{url('/admin/home')}}">Dashboard</a>
    <span class="breadcrumb-item active">Product Manage</span>
  </nav>

<div class="sl-pagebody">
  <div class="row">
    <div class="col-md-10 m-auto">
      <div class="card">
        <!--======== Card header =========-->
        <div class="card-header text-center bg-dark">
         <strong class="text-danger h3">All Products Details</strong>
       </div>
       <div class="card-body">
        <!--======== If session hs message =========-->
        @if(Session::has('message'))
          <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
          <strong>{{Session::get('message')}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
         @endif
          <div class="table
          -wrapper">
            <!--======== Category DataTable =========-->
            <table id="datatable1" class="table display responsive nowrap table-vordered table-hover">
              <thead>
                <tr>
                  <th class="text-center">Image</th>
                  <th class="text-center">Name</th>
                  <th class="text-center">Price</th>
                  <th class="text-center">Quantity</th>
                  <th class="text-center">C.Id</th>
                  <th class="text-center">B.Id</th>
                  <th class="text-center">Ststus</th>
                  <th class="text-center">Action</th>
                </tr>
              </thead>
              <tbody>
                <!--======== Show All Category One by One =========-->
                @foreach ($products as $key=> $product)
                <tr class="text-center">
                  <td>
                   <img src="{{asset($product->image_one)}}" width="50px" height="50px" alt="">
                  </td>
                  <td>{{$product->pro_name}}</td>
                  <td>{{$product->price}}</td>
                  <td>{{$product->pro_quantity}}</td>
                  <td>{{$product->category->cat_name}}</td>
                  <td>{{$product->brand_id}}</td>
                  <td>
                    <!--======== Check brand status =========-->
                    @if($product->status == 1)
                    <strong style="background-color: green;padding:2px;color:white;">Active</strong>
                    @else
                    <strong style="background-color: rgb(128, 0, 0);padding:2px;color:white;">InActive</strong>
                    @endif
                  </td>
                  <td>
                    <a href="{{url('/product/delete/'.$product->id)}}" class="btn btn-danger btn-sm"><i class="fas fa-trash text-light"></i></a>
                    <a href="{{url('/product/edit/'.$product->id)}}" class="btn btn-warning btn-sm"><i class="fas fa-edit text-light"></i></a>
                    <!--======== Check product status =========-->
                    @if($product->status == 1)
                    <a href="{{url('/product/status/'.$product->id.'/'.$product->status)}}" class="btn btn-sm"><i class="menu-item-icon icon ion-ios-gear-outline tx-24 " style="color: rgb(238, 0, 0) !important;"></i></a>
                    @else
                    <a href="{{url('/product/status/'.$product->id.'/'.$product->status)}}" class="btn btn-sm"><i class="menu-item-icon icon ion-ios-gear-outline tx-24 " style="color: rgb(0, 226, 68) !important;"></i></a>
                    @endif
                  </td>
                </tr>
                @endforeach

              </tbody>
            </table>
          </div><!-- table-wrapper -->
       </div>
      </div><!-- card -->
    </div>
  </div>

</div>
</div>
@endsection
