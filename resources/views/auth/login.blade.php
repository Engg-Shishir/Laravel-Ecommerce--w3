@extends('layouts.frontend_master')
@section('frontend_content')
<div class="container">
    <div class="row">
        <div class="col-md-5 m-auto">
        </div>
    </div>
</div>
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
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">

                <div class="card-body bg-dark text-light">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-4">
                                <label for="email">{{ __('E-Mail Address') }}</label>
                            </div>
                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4">
                                <label for="password">{{ __('Password') }}</label>
                            </div>

                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0 text-right">
                            <div class="col-md-12 m-auto">
                                <div class="col-md-10"></div>
                                <div class="col-m-2">
                                    <button type="submit" class="btn btn-light mr-2">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                            </div>
                        </div>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                        <a class="btn btn-link" href="{{ route('register') }}">
                            {{ __('SignUp here ..') }}
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mb-3"></div>

@endsection
