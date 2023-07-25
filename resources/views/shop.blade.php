@extends('master')

@section('title','SHOP')
@section('content')

<div class="mainproduct">
    <div class="container" class="main" >

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
            <div class="col-md-4 search">
                <h3>ADVANCED SEARCH</h3>
                <form method="get">
                    <label for=""> SELECT BRAND</label>
                    <select class="searchfield" ng-model="brand">
                        <option value="Choose on" disabled> Choose on</option>
                        <option value="">All</option>
                        <option value="Audi">AUDI</option>
                        <option value="Vinfast">VINFAST</option>
                        <option value="Kia">KIA</option>
                        <option value="Huyndai">HUYNDAI</option>
                        <option value="Mercedes">MERCEDES</option>
                        <option value="Toyota">TOYOTA</option>
                        <option value="Mazda">MAZDA</option>
                        <option value="Ford">FORD</option>
                    </select>

                    <label for=""> SELECT YEAR</label>
                    <select class="searchfield" ng-model="year">
                        <option value="Choose on" disabled> Choose on</option>
                        <option value="">All</option>
                        <option value="2023">2023</option>
                        <option value="2022">2022</option>
                        <option value="2021">2021</option>
                        <option value="2020">2020</option>
                        <option value="2019">2019</option>
                        <option value="2018">2018</option>
                    </select>

                    <label for=""> SELECT CATEGORY</label>
                    <select class="searchfield" ng-model="category">
                        <option value="Choose on" disabled> Choose on</option>
                        <option value="">All</option>
                        <option value="Sedan">SEDAN</option>
                        <option value="Suv">SUV</option>
                        <option value="Sport">SPORT</option>
                        <option value="Ưagon">WAGON</option>
                        <option value="Pickup">PICKUP</option>
                    </select>

                    <label for="">OFFER</label>
                    <select class="searchfield" ng-model="offer">
                        <option value="offer" disabled> Choose on</option>
                        <option value="">All</option>
                        <option value="freeship">FREE SHIP</option>
                        <option value="discount">DISCOUNT</option>
                    </select>
                    <label for="">ODER BY</label>
                    <div class="row">
                        <div class="col-md-6">
                            <select class="searchfield" ng-model="prop">
                                <option value="">All</option>
                                <option value="Model">Model</option>
                                <option value="Year">Year</option>
                                <option value="Price">Price</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <select class="searchfield" ng-model="order">
                                <option value="+">A-Z</option>
                                <option value="-">Z-A</option>
                            </select>
                        </div>
                    </div>

                    <label for="">Price</label>
                    <div class="range">
                        <input type="range" min="0" max="30000" value="1500" step="100" ng-model="range">
                        <label for="">range</label>
                    </div>
                </form>
            </div>
            <div class="col-md-8" style="overflow: hidden;">
                <ul class="allProduct ">
                    @foreach($productList as $product)
                    <li >
                        <!-- Begin Modal -->
                        <!-- <div class="modal fade" id="exampleModal" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">INFO CAR</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="row">
                                            <div class="col-5" style="overflow: hidden;">
                                                <div class="img-detail1">
                                                    <img src="{{url ('/img/image-1.jpg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="col-7 object-detail" data-aos="fade-left"
                                                data-aos-duration="2500">
                                                <h3 class="tittle">
                                                    <a href="{{ route('product', $product->id) }}">{{ $product->name }}</a>
                                                </h3>
                                                <div class="price">
                                                    <span class="old-price">&dollar;{{ $product->price }}</span>
                                                    <span class="new-price">&dollar;{{ $product->price }}</span>
                                                </div>
                                                <p>{{ $product->description }}</p>
                                                <ul class="info-detail">
                                                    <li><i class="fa-sharp fa-solid fa-road"></i>car.Km Km</li>
                                                    <li><i class="fa-solid fa-heart"></i>car.HorsepowerHP</li>
                                                    <li><i class="fa-solid fa-car"></i>car.Category</li>
                                                    <li><i class="fa-solid fa-gears"></i>car.Tranmission</li>
                                                    <li><i class="fa-solid fa-gas-pump"></i>ar.Fuel</li>
                                                    <li><i class="fa-solid fa-calendar-days"></i>car.Year</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- End Modal -->
                        <div class="p1 row">
                            <div class="col-5 effect-quickview" style="overflow: hidden;" data-aos="fade-right"
                                data-aos-duration="2500">
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