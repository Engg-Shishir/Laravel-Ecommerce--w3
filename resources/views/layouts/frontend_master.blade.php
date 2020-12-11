<!--============================== FrontEnd Master Tamplate ======================-->
<!--============================== FrontEnd Master Tamplate ======================-->
<!--============================== FrontEnd Master Tamplate ======================-->
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogani | Template</title>
    <!--=========== Google Font ============-->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!--=========== Css Styles ============-->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/bootstrap.min.css" type="text/css"><!--===bootstrap===-->
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}" type="text/css"><!--===font-awesome===-->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/elegant-icons.css" type="text/css"><!--===elegant-icons===-->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/nice-select.css" type="text/css"><!--===nice-select===-->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/jquery-ui.min.css" type="text/css"><!--===jquery-ui===-->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/owl.carousel.min.css" type="text/css"><!--===owl.carousel===-->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/slicknav.min.css" type="text/css"><!--===slicknav===-->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/style.css" type="text/css"><!--===style===-->
</head>

<body>
    <!--=========== Page Preloder ============-->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!--=========== Humberger Begin ============-->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="{{url('/')}}"><img src="{{asset('frontend')}}/img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>$150.00</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="{{asset('frontend/img/language.png')}}" alt="">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Spanis</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Login</a>
                <a href="#"><i class="fa fa-user"></i> Register</a>
            </div>
        </div>

        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="{{url('/')}}">Home</a></li>
                <li><a href="{{route('shop.page')}}">Shop</a></li>
                <li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./shop-details.html">Shop Details</a></li>
                        <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                        <li><a href="./checkout.html">Check Out</a></li>
                        <li><a href="./blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="./blog.html">Blog</a></li>
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                <li>Free Shipping for all Order of $99</li>
            </ul>
        </div>
    </div>
    <!--=========== Humberger End ============-->

    <!--=========== Header Section Begin ============-->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                                <li>Free Shipping for all Order of $99</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <div class="header__top__right__language">
                                <img src="{{asset('frontend')}}/img/language.png" alt="">
                                <div>English</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">Spanis</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>
                            <div class="header__top__right__language">
                                <i class="fa fa-user"></i>
                                <div>Settings</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    @auth 
                                    <li><a href="{{route('home')}}"><i class="fa fa-user"></i> Profile</a></li>
                                    <li>
                                        <a  href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                    @else 
                                    <li><a href="{{route('login')}}"><i class="fa fa-user"></i> Login</a></li>
                                    <li><a href="{{route('register')}}"><i class="fa fa-user"></i> Register</a></li>
                                    @endauth
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <!--======== If session hs message =========-->
            @if(Session::has('message'))
              <div class="alert bg-success alert-dismissible fade show text-center" role="alert">
              <strong>{{Session::get('message')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
             @endif
             <!--======== If session hs message =========-->
             @if(Session::has('error'))
               <div class="alert bg-danger alert-dismissible fade show text-center" role="alert">
               <strong>{{Session::get('error')}}</strong>
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                 </button>
               </div>
              @endif
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="{{url('/')}}"><img src="{{asset('frontend')}}/img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="{{url('/')}}">Home</a></li>
                            <li><a href="{{route('shop.page')}}">Shop</a></li>
                            <li><a href="#">Pages</a>
                                @auth
                                <ul class="header__menu__dropdown">
                                    <li><a href="./shop-details.html">Shop Details</a></li>
                                    <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                                    <li><a href="./checkout.html">Check Out</a></li>
                                    <li><a href="./blog-details.html">Blog Details</a></li>
                                </ul>
                                @else
                                @endauth
                            </li>
                            <li><a href="./blog.html">Blog</a></li>
                            <li><a href="./contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    @auth
                        @php
                        $total = App\Models\Cart::all()->where('user_ip', Request()->ip())->sum(function($t){
                        return $t->price * $t->qty;
                        });

                        $quantity = App\Models\Cart::all()->where('user_ip', Request()->ip())->sum('qty');
                        $wishquantity = App\Models\WishList::where('user_id', Auth::id())->get();
                        @endphp 
                    <div class="header__cart">
                        <ul>
                            @auth
                            <li><a href="{{url('/wishlist')}}"><i class="fa fa-heart"></i> <span>{{count($wishquantity)}}</span></a></li>
                            <li><a href="{{url('/cart')}}"><i class="fa fa-shopping-bag"></i> <span>{{$quantity}}</span></a></li>
                            @else
                            @endauth
                        </ul>
                        <div class="header__cart__price">item: <span>${{$total}}</span></div>
                    </div>
                    @else
                    <div class="header__cart">
                        <ul>
                            <li><i class="fa fa-heart"></i></li>
                            <li><i class="fa fa-shopping-bag"></i></li>
                        </ul>
                        <div class="header__cart__price">item: <span>$0</span></div>
                    </div>
                    @endauth
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!--=========== Header Section End ============-->


    <!--=========== Main Section Start ============-->
    @yield('frontend_content')
    <!--=========== Main Section End ============-->

    <!--=========== Footer Section Begin ============-->
    <footer class="footer spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer__about">
                            <div class="footer__about__logo">
                            <a href="{{url('/')}}"><img src="{{asset('frontend')}}/img/logo.png" alt=""></a>
                            </div>
                            <ul>
                                <li>Address: 60-49 Road 11378 New York</li>
                                <li>Phone: +65 11.188.888</li>
                                <li>Email: hello@colorlib.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                        <div class="footer__widget">
                            <h6>Useful Links</h6>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">About Our Shop</a></li>
                                <li><a href="#">Secure Shopping</a></li>
                                <li><a href="#">Delivery infomation</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Our Sitemap</a></li>
                            </ul>
                            <ul>
                                <li><a href="#">Who We Are</a></li>
                                <li><a href="#">Our Services</a></li>
                                <li><a href="#">Projects</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Innovation</a></li>
                                <li><a href="#">Testimonials</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="footer__widget">
                            <h6>Join Our Newsletter Now</h6>
                            <p>Get E-mail updates about our latest shop and special offers.</p>
                            <form action="#">
                                <input type="text" placeholder="Enter your mail">
                                <button type="submit" class="site-btn">Subscribe</button>
                            </form>
                            <div class="footer__widget__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer__copyright">
                            <div class="footer__copyright__text"><p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p></div>
                          <div class="footer__copyright__payment"><img src="{{asset('frontend')}}/img/payment-item.png" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
    </footer>
    <!--=========== Footer Section End ============-->

    <!--=========== Js Plugins ============-->
    <script src="{{asset('frontend')}}/js/jquery-3.3.1.min.js"></script><!--===jquery-3.3.1.min===-->
    <script src="{{asset('frontend')}}/js/bootstrap.min.js"></script><!--===bootstrap===-->
    <script src="{{asset('frontend')}}/js/jquery.nice-select.min.js"></script><!--===jquery.nice-select===-->
    <script src="{{asset('frontend')}}/js/jquery-ui.min.js"></script><!--===jquery-ui.min===-->
    <script src="{{asset('frontend')}}/js/jquery.slicknav.js"></script><!--===slicknav===-->
    <script src="{{asset('frontend')}}/js/mixitup.min.js"></script><!--===mixitup===-->
    <script src="{{asset('frontend')}}/js/owl.carousel.min.js"></script><!--===owl.carousel===-->
    <script src="{{asset('frontend')}}/js/main.js"></script><!--===main===-->



</body>

</html>