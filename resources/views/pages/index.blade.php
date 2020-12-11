@extends('layouts.frontend_master')
@section('frontend_content')

    
  <!--=========== Hero Section Begin ============-->
  <section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                @include('pages.include.category')
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

	
                <div class="hero__item set-bg" data-setbg="{{asset('frontend')}}/img/hero/banner.jpg">
                    <div class="hero__text">
                        <span>FRUIT FRESH</span>
                        <h2>Vegetable <br />100% Organic</h2>
                        <p>Free Pickup and Delivery Available</p>
                        <a href="#" class="primary-btn">SHOP NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
<!--========= Hero Section End =========-->	
    
<!--========= Categories Section Begin =========-->
<section class="categories">
    <div class="container">
        <div class="row">
            <div class="categories__slider owl-carousel">
                @foreach ($products as $product)
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="{{$product->image_one}}">
                        <h5><a href="#">{{$product->pro_name}}</a></h5>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!--========= Categories Section End =========-->

<!--========= Featured Section Begin =========-->
<section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Featured Product</h2>
                </div>
                <div class="featured__controls">
                    <ul>
                        <li class="active" data-filter="*">All</li>
                        @foreach ($categoris as $categori)
                         <li data-filter=".filter{{$categori->id}}">{{$categori->cat_name}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="row featured__filter">
            @foreach ($categoris as $cat)
            @php
             $productss = App\Models\Product::where('category_id',$cat->id)->latest()->get();
            @endphp
            @foreach ($productss as $item)
            <div class="col-lg-3 col-md-4 col-sm-6 mix oranges filter{{$cat->id}}">
                <div class="featured__item">
                   <div class="featured__item__pic set-bg" data-setbg="{{asset($item->image_one)}}">
                        <ul class="featured__item__pic__hover">
                            <li><a href="{{url('/add/to_wishlist/'.$item->id)}}"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <form action="{{url('/add/to_cart/'.$item->id)}}" method="POST">
                                @csrf
                                <input type="hidden" name="price" value="{{$item->price}}">
                                <li><button type="submit"><i class="fa fa-shopping-cart"></i></button></li>
                            </form>
                        
                        </ul>
                    </div>
                    <div class="featured__item__text">
                    <h6><a href="{{url('/product/details/'.$item->id)}}">{{$item->pro_name}}</a></h6>
                        <h5>{{$item->price}}</h5>
                    </div>
                </div>
            </div>
            @endforeach
            @endforeach
        </div>
    </div>
</section>
<!--========= Featured Section End =========-->

<!--========= Banner Begin =========-->
<div class="banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="banner__pic">
                    <img src="{{asset('frontend')}}/img/banner/banner-1.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="banner__pic">
                    <img src="{{asset('frontend')}}/img/banner/banner-2.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!--========= Banner End =========-->

<!--========= Blog Section Begin =========-->
<section class="from-blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title from-blog__title">
                    <h2>From The Blog</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic">
                        <img src="{{asset('frontend')}}/img/blog/blog-1.jpg" alt="">
                    </div>
                    <div class="blog__item__text">
                        <ul>
                            <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                            <li><i class="fa fa-comment-o"></i> 5</li>
                        </ul>
                        <h5><a href="#">Cooking tips make cooking simple</a></h5>
                        <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic">
                        <img src="{{asset('frontend')}}/img/blog/blog-2.jpg" alt="">
                    </div>
                    <div class="blog__item__text">
                        <ul>
                            <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                            <li><i class="fa fa-comment-o"></i> 5</li>
                        </ul>
                        <h5><a href="#">6 ways to prepare breakfast for 30</a></h5>
                        <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic">
                        <img src="{{asset('frontend')}}/img/blog/blog-3.jpg" alt="">
                    </div>
                    <div class="blog__item__text">
                        <ul>
                            <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                            <li><i class="fa fa-comment-o"></i> 5</li>
                        </ul>
                        <h5><a href="#">Visit the clean farm in the US</a></h5>
                        <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--========= Blog Section End =========-->
@endsection