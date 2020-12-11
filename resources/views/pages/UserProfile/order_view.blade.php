<!--=========== User Home Page Start ===========-->
<!--=========== User Home Page Start ===========-->
@extends('layouts.frontend_master')
@section('frontend_content')
<!-- Hero Section Begin -->
<section class="hero hero-normal">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span>All Categoryis</span>
                    </div>
                    @php
                      $categorys = App\Models\Category::where('status',1)->latest()->get();
                    @endphp
                    <ul>
                        @foreach ($categorys as $row)
                          <li><a href="#">{{$row->cat_name}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="#">
                            <div class="hero__search__categories">
                                All Categories
                                <span class="arrow_carrot-down"></span>
                            </div>
                            <input type="text" placeholder="What do yo u need?">
                            <button type="submit" class="site-btn">SEARCH</button>
                        </form>
                    </div>
                    <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="hero__search__phone__text">
                            <h5>+65 11.188.888</h5>
                            <span>support 24/7 time</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="{{asset('frontend')}}/img/breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>My Orders Details</h2>
                    <div class="breadcrumb__option">
                        <a href="./index.html">Home</a>
                        <span>My Orders Details</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->
<div class="container mt-4 mb-3">
<div class="row">
    <div class="col-md-4">
        @include('pages.UserProfile.include.profile_sidebar')
    </div>
    <div class="col-md-8">
      <div class="card  bg-dark ">
        <div class="card-header text-center">
          <span class="text-danger h3"><strong>Your Orders</strong></span>
        </div>
          <div class="card-body">
            <table class="table table-bordered table-striped table-dark">
              <thead>
                <tr>
                  <th>Invoice No</th>
                  <th>Sub Total</th>
                  <th>Total</th>
                  <th>Payment Type</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                 <td>{{$orders->invoice_no}}</td>
                 <td>{{$orders->subtotal}}</td>
                 <td>{{$orders->total}}</td>
                 <td>{{$orders->payment_type}}</td>
                </tr>
              </tbody>
            </table>
          </div>
      </div>
    </div>
</div>
<br>
<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-8">
    <div class="card  bg-dark ">
      <div class="card-header text-center">
        <span class="text-danger h3"><strong>Shipping Address</strong></span>
      </div>
        <div class="card-body">
          <table class="table table-bordered table-striped table-dark">
            <thead>
              <tr>
                <th>FName</th>
                <th>LName</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Adress</th>
                <th>State</th>
                <th>PCode</th>
              </tr>
            </thead>
            <tbody>
              <tr>
               <td>{{$shipping->ship_first_name}}</td>
               <td>{{$shipping->ship_last_name}}</td>
               <td>{{$shipping->ship_email}}</td>
               <td>{{$shipping->ship_phone}}</td>
               <td>{{$shipping->address}}</td>
               <td>{{$shipping->state}}</td>
               <td>{{$shipping->post_code}}</td>
              </tr>
            </tbody>
          </table>
        </div>
    </div>
  </div>
</div>
<br>



<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-8">
    <div class="card  bg-dark ">
      <div class="card-header text-center">
        <span class="text-danger h3"><strong>Order Items</strong></span>
      </div>
        <div class="card-body">
          <table class="table table-bordered table-striped table-dark">
            <thead>
              <tr>
                <th class="text-center">Image</th>
                <th class="text-center">Name</th>
                <th class="text-center">Price</th>
                <th class="text-center">Code</th>
                <th class="text-center">Quantity</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($orderitems as $key=> $row)
              <tr class="text-center">
                <td>
                 <img src="{{asset($row->product->image_one)}}" width="100px" height="100px" alt="">
                </td>
                <td>{{$row->product->pro_name}}</td>
                <td>{{$row->product->price}}</td>
                <td>{{$row->product->pro_code}}</td>
                <td>{{$row->pro_quatity}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
    </div>
  </div>
</div>
<br>
<br>
</div>
@endsection
<!--=========== User Home Page End ===========-->
<!--=========== User Home Page End ===========-->
