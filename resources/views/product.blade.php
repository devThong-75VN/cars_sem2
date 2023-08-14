@extends('master')

@section('title','product')
@section('content')

<div class="container">
    <div class="row">
        <h2>{{ $product->year }} {{ $product->name }}</h2>
    </div>
    <div class="row">
        <div class="col-6 ">
            <!-- <img height="auto" width="50px" src="{{url('./img/car-4c.jpg')}}" alt=""> -->
            <div class="container mt-4">
                <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{url('./img/car-4c.jpg')}}" class="d-block w-100 img-product" alt="Image 1">
                        </div>
                        <div class="carousel-item">
                            <img src="{{url('./img/car-4c.jpg')}}" class="d-block w-100 img-product" alt="Image 2">
                        </div>
                        <div class="carousel-item">
                            <img src="{{url('./img/car-4c.jpg')}}" class="d-block w-100 img-product" alt="Image 3">
                        </div>
                        <div class="carousel-item">
                            <img src="{{url('./img/car-4c.jpg')}}" class="d-block w-100 img-product" alt="Image 4">
                        </div>
                        <div class="carousel-item">
                            <img src="{{url('./img/car-4c.jpg')}}" class="d-block w-100 img-product" alt="Image 5">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#imageCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

        </div>
        <div class="col-md-6">
            <form action="{{ route('cart.store') }}" method="post">
                @csrf
                <input type="hidden" name="productId" value="{{ $product->id }}">
                <h1>{{ $product->name }}</h1>
                <div class="price">
                    <div>
                        <span class="old-price">&dollar;car.PriceOld</span>
                        <span class="new-price">&dollar;{{ $product->price }}</span>
                    </div>
                    <span>Mã SP: {{ $product->slug }}</span>
                </div>
                <div class="quantity">
                    <label>Số lượng</label>
                    <div class="quantity-input">
                        <input type="number" value="1" class="text" min="1" max="10" name="quantity">
                    </div>
                </div>
                <div class="button">
                    <button type="submit">Thêm giỏ hàng</button>
                </div>
                <div class="call">
                    <p class="title">{{ $product->description }}</p>
                </div>
            </form>

        </div>
    </div>

</div>

<div class="container py-4 my-4 mx-auto d-flex flex-column">
    <div class="header">
        <div class="row r1">
            <div class="col-md-9 abc">
                <h1>Tyre Mountain Cycle 21</h1>
            </div>
            <div class="col-md-3 text-right pqr"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
            <p class="text-right para">Based on 250 Review</p>
        </div>
    </div>
    <div class="container-body mt-4">
        <div class="row r3">
            <div class="col-md-5 p-0 klo">
                <ul>
                    <li>100% Quality</li>
                    <li>Free Shipping</li>
                    <li>Easy Returns</li>
                    <li>12 Months Warranty</li>
                    <li>EMI Starting from (On Credit Cards)</li>
                    <li>Normal Delivery : 4-5 Days</li>
                    <li>Express Delivery : 2-3 Days</li>
                    <li>COD Available (All Over India)</li>
                </ul>
            </div>
            <div class="col-md-7"> <img src="{{ url('/img/car-9.jpg') }}"> </div>
        </div>
    </div>
    <div class="footer d-flex flex-column mt-5">
        <div class="row r4">
            <div class="col-md-2 myt des"><a href="#">Description</a></div>
            <div class="col-md-2 myt "><a href="#">Review</a></div>
            <div class="col-md-2 mio offset-md-4"><a href="#">ADD TO CART</a></div>
            <div class="col-md-2 myt "><button type="button" class="btn btn-outline-warning"><a href="#">BUY NOW</a></button></div>
        </div>
    </div>
</div>

@endsection