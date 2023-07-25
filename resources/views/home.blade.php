@extends('master')

@section('title','home')
@section('content')
<div class="main" ng-controller="HomeController" >
    <div class="slideshow-banner">
        <!-- Carousel -->
        <div id="demo" class="carousel slide" data-bs-ride="carousel">

            <!-- Indicators/dots -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>

            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <video autoplay muted loop id="myVideo">
                        <source src="{{ url('/img/videobanner.mp4')}}" type="video/mp4">
                    </video>
                    <div class="carousel-caption text-banner">
                        <p class="banner-tittle">WELCOME YOU CARBREEZY</p>
                        <p class="banner-tittle-2">OWN YOUR DREAM CAR</p>
                        <br><br><br><br>
                        <a href="" class="buynow"><button class="btn">BUY NOW</button></a>
                        <a href="" class="getstart"><button class="btn">GET STARTED</button></a>

                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{url('/img/car-1.jpg')}}" alt="" style="width:100%">
                    <div class="carousel-caption text-banner" >
                        <p class="banner-tittle">WELCOME YOU CARBREEZY</p>
                        <p class="banner-tittle-2">OWN YOUR DREAM CAR</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{url ('/img/car-8.jpg')}}" alt="" class="d-block" style="width:100%">
                    <div class="carousel-caption text-banner">
                        <p class="banner-tittle" data-aos="fade-up" data-aos-duration="2500">LET CHOSSE YOURS CAR</p>
                        <p class="banner-tittle-2" data-aos="fade-down" data-aos-duration="2500">OWN YOUR DREAM CAR</p>
                    </div>
                </div>
            </div>
            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>

    <div class="welcom" >
        
        <div class="container">
            <div class="row">
                <div class="col-md-6" id="wc-amina">
                    <div class="welcome-content" >
                        <canvas id="canvas2">    
                        </canvas>
                        <h1 style="position: relative;"><span>WELCOME</span> TO CAR BREEZY</h1>
                        <p>If you would like to import your car from overseas, please note that you will be required to
                            provide the relevant government agencies with the correct documentation for your car and to
                            register it once it arrives in the UK. It will also need to meet local vehicle compliance
                            standards and have insurance arranged for it. </p>
                        <ul>
                            <li>
                                <i class="fa-solid fa-user-tie" style="color:#3c5bfc ;"></i>
                                <span>Free Support Anytime</span>
                            </li>
                            <li>
                                <i class="fa-solid fa-car-wrench" style="color:#3c5bfc ;"></i>
                                <span>Oll Changes</span>
                            </li>
                            <li>
                                <i class="fa-solid fa-tire-rugged" style="color:#3c5bfc ;"></i>
                                <span>Air Conditionninds</span>
                            </li>
                        </ul>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="img" >
                        <img src="{{url('/img/welcome-7.png')}}" alt="" width="100%">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="featured" style="position: relative">
        
        <div class="featured-title" style="position: relative;">
            <canvas id="canvas3">    
            </canvas>
            <h1 style="position: relative;"><span>FEATURED</span> PRODUCT</h1>
            <ul class="featured-brand">
                <li>
                    <button class="item-filter active form-control" ng-click="doFilter('')"><span id="">All</span></button>
                </li>
                <li>
                    <button class="item-filter form-control" ng-click="doFilter('Vinfast')"><span>Vinfast</span></button>
                </li>
                <li>
                    <button class="item-filter form-control" ng-click="doFilter('Mazda')"><span>Mazda</span></button>
                </li>
                <li>
                    <button class="item-filter form-control" ng-click="doFilter('Toyota')"><span>Toyota</span></button>
                </li>
            </ul>
        </div>
        <div class="featured-item" >
            
            <div class="container">
                <div class="row">
                    @foreach($productList as $product)
                    <div class="col-md-3">
                        <div class="ft-item" >
                            <div class="ft-item-img effect-quickview">
                                <img src="{{url('/img/car-4.2.jpg')}}" alt="">
                                <figcaption>
                                    <h3>DETAIL</h3>
                                </figcaption>
                                <a href="{{ route('product', $product->id) }}" class="detail"></a>
                                
                            </div>
                            <div class="ft-item-inf">
                                <h5>{{ $product->name }}</h5>
                                <h6>{{ $product->price }}</h6>
                                <div class="con-ft-item">
                                    <ul>
                                        <li><span>{{ $product->slug }}</span>
                                            <span>{{ $product->year }}</span>
                                        </li>
                                        <li><span>{{ $product->quantity }}</span>
                                            <span>{{ $product->category_id }}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
    <div class="testimonial" ></div>
    <div class="latest-news" style="position: relative;;">
        <canvas id="canvas4" data-aos="fade-right" data-aos-duration="2800" >    
        </canvas>
        <div class="ltns-title" style="position: relative;">
            <h1><span>LATEST </span>NEWS</h1>
            <p>Check out some latest news posts.</p>
        </div>
        <div class="ltns-item">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="ltns-item-detail">
                            <ul>
                                <li>
                                    <img src="{{url('/img/car-6.jpg')}}" alt="" width="100%">
                                </li>
                                <li>
                                    <h6>Selling your awesome car</h6>
                                    <p>Seller: Jonatony</p>
                                    <p>Comments: 7 comments</p>
                                    <p>Please search all product before transfer money to my banking</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="ltns-item-detail">
                            <ul>
                                <li>
                                    <img src="{{url('/img/car-8.jpg')}}" alt="" width="100%">
                                </li>
                                <li>
                                    <h6>Selling your awesome car</h6>
                                    <p>Seller: Jonatony</p>
                                    <p>Comments: 7 comments</p>
                                    <p>Please search all product before transfer money to my banking</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h1>CARBREEZY</h1>
                </div>
                <div class="col-md-6">
                    <h6>have any queries? call us anytime</h6>
                </div>
                <div class="col-md-3">
                    <a href="#!/contact" style="text-decoration: none;"><button type="submit" class="form-control"
                            style="color: #3c5bfc; font-weight: bold;">CONTACT US</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection