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
                      <h2>Shopping Cart</h2>
                      <div class="breadcrumb__option">
                          <a href="./index.html">Home</a>
                          <span>Shopping Cart</span>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Breadcrumb Section End -->


<section class="container">  
    <!--======== Category DataTable =========-->
    <table  class="table table-striped table-bordered table-dark">
      <thead>
        <tr class="text-center">
          <th colspan="2">Products</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Total</th>
          <th colspan="2">Improve</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($carts as $cart)
        <tr class="text-center" >
          <td class="shoping__cart__item">
          <img src="{{asset($cart->product->image_one)}}" style="height: 
            100px;width:100px;" alt="">
          </td>
          <td><h5>{{$cart->product->pro_name}}</h5></td>
          <td class="shoping__cart__price">
            {{$cart->product->price}}
          </td>
          <td class="shoping__cart__quantity">
            <form action="{{url('/cart/qty/update/'.$cart->id)}}" method="POST">
                @csrf
                <div class="quantity">
                    <div class="pro-qty">
                      <input type="text" name="update_qty" value="{{$cart->qty}}" min="1">
                    </div>
                </div>
                <button type="submit" class="btn bg-info">Update</button>
            </form>
          </td>
          <td class="shoping__cart__total">
            {{$cart->qty * $cart->price}}
          </td>
          <td>
            <a href="{{url('/cart/remove/'.$cart->id)}}" class="btn bg-danger"><i class="fas fa-trash"></i></a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
</section>




  <!-- Shoping Cart Section Begin -->
  <section class="shoping-cart spad">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="shoping__cart__table">
                      <table class="table table-bordered table-striped table-hover">
                          <thead>
                              <tr>
                              </tr>
                          </thead>
                      </table>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-lg-12">
                  <div class="shoping__cart__btns">
                  <a href="{{url('/')}}" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                  </div>
              </div>
              <div class="col-lg-6">
                  @if(Session::has('cupon'))
                  @else
                  <div class="shoping__continue">
                      <div class="shoping__discount">
                        @if(Session::has('error_cupon'))
                          <div class="alert bg-danger alert-dismissible fade show text-center" role="alert">
                          <strong>{{Session::get('error_cupon')}}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                         @endif
                          <h5>Discount Codes</h5>
                            <form action="{{url('/cupon/aplay')}}" method="POST">
                              @csrf
                              <input type="text" name="cupon" placeholder="Enter your coupon code">
                              <button type="submit" class="site-btn">APPLY COUPON</button>
                            </form>
                      </div>
                  </div>
                  @endif
              </div>
              <div class="col-lg-6">
                  <div class="shoping__checkout">
                      <h5>Cart Total</h5>
                      <ul>
                        @if(Session::has('cupon'))
                        <li>Subtotal <span>{{$total}} /=</span></li>

                      <li>Cupon <span>{{ session()->get('cupon')['cupon_name'] }} &nbsp;&nbsp;<a href="{{url('/cupon/remove')}}" class="btn btn-dark btn-sm">❌</a> </span></li>

                      <li>Discount <span>{{session()->get('cupon')['cupon_discount']}}% &nbsp; ({{session()->get('cupon')['discount_amount']}}tk)</span></li>

                        <li>Total <span>{{ $total - session()->get('cupon')['discount_amount'] }} /=</span></li>
                        @else
                        <li>Total <span>{{$total}} /=</span></li>
                        @endif
                      </ul>
                    <a href="{{url('/checkout')}}" class="primary-btn">PROCEED TO CHECKOUT</a>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Shoping Cart Section End -->

@endsection