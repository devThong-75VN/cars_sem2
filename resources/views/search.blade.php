@extends('master')

@section('title','SEARCH')
@section('content')

<div class="mainproduct">
    <div class="container" class="main">

        <div class="row">
            <canvas id="canvas5" data-aos="fade-right" data-aos-duration="2800">
            </canvas>
            <div class="col-md-12" style="position: relative;">
                <p class="main_tittle_product">
                    <span style="color: #3c5bfc;">ALL</span> <span>PRODUCT</span>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8" style="overflow: hidden;">
                <ul class="allProduct ">
                    @foreach($productList as $product)
                    <li>
                        <div class="p1 row">
                            <div class="col-5 effect-quickview" style="overflow: hidden;" data-aos="fade-right" data-aos-duration="2500">
                                <div class="box-featured">
                                    <span id="featured">FEATURED</span>
                                </div>
                                <div class="img-detail">
                                    <img src="{{url ('/img/image-2.jpg')}}" alt="">
                                </div>
                                <figcaption>
                                    <h3>DETAIL</h3>
                                </figcaption>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"></a>
                            </div>
                            <div class="col-7 object-detail" data-aos="fade-left" data-aos-duration="2500">
                                <h3 class="tittle">
                                    <a href="{{ route('product', $product->id) }}">{{$product->name}}</a>
                                </h3>
                                <div class="price">
                                    <span class="old-price">&dollar;car.PriceOld</span>
                                    <span class="new-price">&dollar;car.PriceNew</span>
                                </div>
                                <p>car.description</p>
                                <ul class="info-detail">
                                    <li><i class="fa-sharp fa-solid fa-road"></i>car.Km Km</li>
                                    <li><i class="fa-solid fa-heart"></i>car.HorsepowerHP</li>
                                    <li><i class="fa-solid fa-car"></i>car.Category</li>
                                    <li><i class="fa-solid fa-gears"></i>car.Tranmission</li>
                                    <li><i class="fa-solid fa-gas-pump"></i>car.Fuel</li>
                                    <li><i class="fa-solid fa-calendar-days"></i>car.Year</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>

            </div>
            <!-- col-md-9 -->
        </div>
    </div>
</div>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
@endsection