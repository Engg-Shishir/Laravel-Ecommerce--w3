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
                          <span>All Wishlist</span>
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
                      <h2>Your WishList</h2>
                      <div class="breadcrumb__option">
                         <a href="{{url('/')}}">Home</a>
                          <span>Your WishList</span>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Breadcrumb Section End -->


<section class="container">
  <div class="row">
    <div class="col-md-8 m-auto">
      <!--======== Category DataTable =========-->
      <table  class="table table-striped table-bordered table-dark">
        <thead>
          <tr class="text-center">
            <th>Products</th>
            <th>Price</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($wishlists as $row)
          <tr class="text-center" >
            <td class="shoping__cart__item">
              <div class="row">
                <div class="col-md-6">
                  <img src="{{asset($row->product->image_one)}}" style="height: 
                    100px;width:100px;" alt="">
                </div>
                <div class="col-md-6">
                  <h5 class="text-light">{{$row->product->pro_name}}</h5>
                </div>
              </div>
            </td>
            <td class="shoping__cart__price">
              {{$row->product->price}}
            </td>
            <td>
              <div class="row">
                <div class="col-md-6">
                  <form action="{{url('/add/to_cart/'.$row->product_id)}}" method="POST">
                      @csrf
                      <input type="hidden" name="price" value="{{$row->product->price}}">
                      <button type="submit" class="btn bg-danger"><i class="fa fa-shopping-cart"></i></button>
                  </form>
                </div>
                <div class="col-md-6">
                  <a href="{{url('/wishlist/remove/'.$row->id)}}" class="btn bg-danger"><i class="fas fa-trash"></i></a>
                </div>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>  
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
      </div>
  </section>
  <!-- Shoping Cart Section End -->

@endsection