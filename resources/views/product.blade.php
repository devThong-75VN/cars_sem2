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
            <!-- <form action="{{ route('cart.update', [ $product->id]) }}" method="post">
            @method('put')
            @csrf
            <input type="hidden" name="productId" value="{{ $product->id }}">
            <h1>{{ $product->name }}</h1>
            <div class="price ng">
                <div><span class="price-new">Price: {{ $product->price }}</span></div>
                <span>Mã SP: {{ $product->slug }}</span>
            </div>
            <div class="quantity">
                <label>Số lượng</label>
                <div class="quantity-input">
                    <input type="number" value="1" class="text" min="1" max="10" name="quantity">
                </div>
            </div>
            <div class="button">
                <button type="submit">sửa giỏ hàng</button>
            </div>
            <div class="call">
                <p class="title">Để lại số điện thoại, chúng tôi sẽ tư vấn ngay</p>
                <div class="input">
                    <div class="input-group">
                        <input class="form-control" type="text">
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="button"><i class="fa fa-phone"></i> Gọi lại cho tôi</button>
                        </span>
                    </div>
                </div>
            </div>
        </form> -->

        </div>
    </div>

</div>

@endsection