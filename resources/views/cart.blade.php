@extends('master')

@section('title','Shopping Cart')
@section('content')
<!-- <div class="container">
    @if(Session::has('message'))
    <p class="alert alert-info">{{ Session::get('message') }}</p>
    @endif
    <div class="row">
        <h4 class="heading">Shopping Bag</h4>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Total</th>
                    <th scope="col">Remove</th>
                </tr>
            </thead>
            <tbody>
                @php $index = 1 @endphp
                @foreach($cart as $order)
                <tr>
                    <th scope="row">{{ $index++ }}</th>
                    <td>
                        <div class="cart-img" style="display: inline-block">
                            <img height="80px" src="{{url('./img/car-4c.jpg')}}" alt="">
                        </div>
                        <div class="cart-name" style="display: inline-block">
                            {{ $order['productName'] }}
                        </div>
                    </td>
                    <td>{{ $order['productPrice'] }}</td>
                    <td>
                        <form action="{{ route('cart.update', $order['productId'] ) }}" method="post">
                            @csrf
                            @method('put')
                            <input onchange="this.form.submit()" type="number" value="{{ $order['quantity'] }}" class="text" min="1" max="10" name="quantity">
                        </form>
                    </td>
                    <td>{{ order_item_total($order['productPrice'], $order['quantity']) }}</td>
                    <td>
                        <form action="{{ route('cart.delete', $order['productId'] ) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-outline-danger" type="submit"><i class="fa-solid fa-trash-can"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="row">
        <div class="col-6"></div>
        <div class="col-3">
            <p class="mb-1 ">Subtotal</p>
            <p class="mb-1 ">Shipping</p>
            <p class="mb-1 ">Total (tax included)</p>
        </div>
        <div class="col-3">
            <h6 class="mb-1 text-right">{{ cart_total($cart) }}</h6>
            <h6 class="mb-1 text-right">$2.99</h6>
            <h6 class="mb-1 text-right">${{ cart_total($cart, 100) }}</h6>
        </div>
        <a href="{{ route('checkout') }}" class="btn btn-outline-success">Checkout</a>
    </div>
</div> -->


<section class="h-100 h-custom" style="background-color: #d2c9ff;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12">
                <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                    <div class="card-body p-0">
                        <div class="row g-0">
                            <div class="col-lg-8">
                                <div class="p-5">
                                    <div class="d-flex justify-content-between align-items-center mb-5">
                                        <h1 class="fw-bold mb-0 text-black">Shopping Cart</h1>
                                        <h6 class="mb-0 text-muted">{{count($cart)}} item</h6>
                                    </div>
                                    <hr class="my-4">
                                    @foreach($cart as $order)
                                    <!-- Begin cart-item -->
                                    <div class="row mb-3 d-flex justify-content-between align-items-center">
                                        <div class="col-md-2 col-lg-2 col-xl-2">
                                            <img src="{{ url('/img/car-9.jpg') }}" class="img-fluid rounded-3" alt="Cotton T-shirt">
                                        </div>
                                        <div class="col-md-2 col-lg-3 col-xl-3">
                                            <h6 class="text-muted">Shirt</h6>
                                            <h6 class="text-black mb-0">{{ $order['productName'] }}</h6>
                                        </div>
                                        <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                            <form action="{{ route('cart.update', $order['productId'] ) }}" method="post">
                                                @csrf
                                                @method('put')
                                                <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                    <i class="fas fa-minus"></i>
                                                </button>

                                                <input id="form1" min="0" name="quantity" value="{{ $order['quantity'] }}" type="number" class="form-control form-control-sm" />

                                                <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </form>

                                        </div>
                                        <div class="col-md-1 col-lg-1 col-xl-2">
                                            <h6 class="mb-0">€ {{ $order['productPrice'] }}</h6>
                                        </div>
                                        <div class="col-md-2 col-lg-1 col-xl-2">
                                            <h6 class="mb-0">€ {{ order_item_total($order['productPrice'], $order['quantity']) }}</h6>
                                        </div>
                                        <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                            <form action="{{ route('cart.delete', $order['productId'] ) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-outline-danger" type="submit"><i class="fa-solid fa-trash-can"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                    <hr class="my-4">
                                    @endforeach
                                    <!-- ket thuc cart-item -->
                                    <div class="pt-5">
                                        <h6 class="mb-0"><a href="shop" class="text-body"><i class="fas fa-long-arrow-alt-left me-2"></i>Back to shop</a></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 bg-grey">
                                <div class="p-5">
                                    <h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>
                                    <hr class="my-4">
                                    <div class="d-flex justify-content-between mb-4">
                                        <h5 class="text-uppercase">items 3</h5>
                                        <h5>€ {{ cart_total($cart) }}</h5>
                                    </div>
                                    <h5 class="text-uppercase mb-3">Shipping</h5>
                                    <div class="mb-4 pb-2">
                                        <select class="select">
                                            <option value="1">Standard-Delivery- €5.00</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                            <option value="4">Four</option>
                                        </select>
                                    </div>
                                    <hr class="my-4">
                                    <div class="d-flex justify-content-between mb-5">
                                        <h5 class="text-uppercase">Total price</h5>
                                        <h5>€ ${{ cart_total($cart, 100) }}</h5>
                                    </div>
                                    <a href="{{ route('checkout') }}" class="btn btn-dark btn-block btn-lg">Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection