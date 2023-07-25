@extends('master')

@section('title','Shopping Cart')
@section('content')
<div class="container">
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
                    <td>{{ $order['productPrice'] * $order['quantity'] }}</td>
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
            <h6 class="mb-1 text-right">$23.49</h6>
            <h6 class="mb-1 text-right">$2.99</h6>
            <h6 class="mb-1 text-right">$2.99</h6>
        </div>
        <input class=" btn btn-outline-success" type="submit" value="Checkout-$26.48">
    </div>
</div>
@endsection