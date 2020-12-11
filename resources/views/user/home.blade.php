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
                    <h2>My Profile</h2>
                    <div class="breadcrumb__option">
                        <a href="./index.html">Home</a>
                        <span>My Profile</span>
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
      <div class="card">
          <div class="card-body">
              <form action="">
                <div class="form-group px-3">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="">Name</label>
                        </div>
                        <div class="col-md-1"><strong class=" text-danger">:</strong></div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" placeholder="Enter Your Name" value="{{Auth::user()->name}}">
                        </div>
                    </div>
                </div>
                <div class="form-group px-3">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="">Email</label>
                        </div>
                        <div class="col-md-1"><strong class=" text-danger">:</strong></div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" placeholder="Enter Your Name" value="{{Auth::user()->email}}">
                        </div>
                    </div>
                </div>

              <br>
              <button class="btn btn-warning form-control"><strong>Submit</strong></button>
              </form>
          </div>
      </div>
    </div>
    
</div>
</div>
@endsection
<!--=========== User Home Page End ===========-->
<!--=========== User Home Page End ===========-->
