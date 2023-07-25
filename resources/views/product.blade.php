@extends('master')

@section('title','product')
@section('content')

<div class="container">
    <div class="row">
    <h2>{{ $product->year }} {{ $product->name }}</h2>
    </div>
    <div class="row">
        <div class="col-6 ">
            <img height="auto" width="50px" src="{{url('./img/car-4c.jpg')}}" alt="">
        </div>
        <div class="col-md-6">
        <form action="{{ route('cart.store') }}" method="post">
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
                <button type="submit">Thêm giỏ hàng</button>
            </div>
            <div class="call">
                <p class="title">Để lại số điện thoại, chúng tôi sẽ tư vấn ngay sau từ 5 › 10 phút</p>
                <div class="input">
                    <div class="input-group">
                        <input class="form-control" type="text">
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="button"><i class="fa fa-phone"></i> Gọi lại cho tôi</button>
                        </span>
                    </div>
                </div>
            </div>
        </form>
    </div>
    </div>
    
</div>
@endsection