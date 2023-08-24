@extends('master')

@section('title', $product->year. ' ' .$product->name )
@section('content')
<style>
    .shop-productdetail {
        background: #8D9AF8;
        padding-top: 80px;
        padding-bottom: 80px;
        position: relative;
    }

    .macBookPro-1 {
        background: #FAFBFC;
        border-radius: 28px;
        overflow: hidden;
        height: 750px;
    }

    .backtoshop {
        color: #6F768D;
        font-family: Manrope;
        font-size: 12px;
        font-style: normal;
        font-weight: 700;
        line-height: 15px;
        /* 125% */
        letter-spacing: 0.24px;
        padding-left: "30px";
    }

    .frame {
        margin-left: 0px;
        width: 100%;
        height: 500px;
        padding-top: 20px;
        background-image: url('/img/car-3.jpeg');
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        border-radius: 28px;
    }

    label.hotdeal {
        display: inline-flex;
        padding: 2px 6px;
        align-items: flex-start;
        gap: 10px;
        border-radius: 4px;
        background: var(--red, #F12B2C);
    }

    p.hotdeal {
        color: var(--primary-grey-6, #FFF);
        font-family: Manrope;
        font-size: 9px;
        font-style: normal;
        font-weight: 600;
        line-height: normal;
        letter-spacing: 0.72px;
        text-transform: uppercase;
        margin-bottom: 0px;
    }

    p.shopproductname {
        width: 100%;
        color: #000;
        font-family: Manrope;
        font-size: 28px;
        font-style: normal;
        font-weight: 600;
        line-height: normal;
    }

    p.shopproductcategory {
        color: #50CC98;
        font-family: Manrope;
        font-size: 12px;
        font-style: normal;
        font-weight: 500;
        line-height: 15px;
        /* 125% */
        letter-spacing: 1.98px;
        text-transform: uppercase;
    }

    .description {
        color: #000;
        font-family: Manrope;
        font-size: 14px;
        font-style: normal;
        font-weight: 600;
        line-height: 15px;
        /* 125% */
        letter-spacing: 0.24px;
    }

    .content-description {
        width: 418px;
        color: #000;
        font-family: Manrope;
        font-size: 14px;
        font-style: normal;
        font-weight: 300;
        line-height: 177.994%;
        /* 21.359px */
        letter-spacing: 0.24px;
    }

    table {
        font-family: Manrope;
        font-size: 14px;
        font-style: normal;
        font-weight: 300;
        padding-top: 30px;
    }

    .addtocart {
        position: absolute;
        left: 200px;
        top: 710px;
        display: flex;
        width: 1200px;
        height: 83px;
        padding: 20px;
        margin-left: 30px;
        align-items: center;
        gap: 18px;
        flex-shrink: 0;
        border-radius: 14px;
        background: #FFF;
        box-shadow: 0px 2px 30px 0px rgba(53, 56, 90, 0.12);
    }

    .addtocart img {
        width: 68px;
        height: 65px;
        border-radius: 8px;
        background: url('/img/car-3.jpeg'), lightgray 100% / cover no-repeat;
        background-position: center;
        background-size: cover;

    }

    .shopproductname2 {
        width: 369px;
        color: #000;
        font-family: Manrope;
        font-size: 14px;
        font-style: normal;
        font-weight: 600;
        line-height: normal;
        margin: 0px;
        
        letter-spacing: 3px;
    }

    .shopproductcategory2 {
        color: #50CC98;
        font-family: Manrope;
        font-size: 10px;
        font-style: normal;
        font-weight: 500;
        line-height: 15px;
        /* 150% */
        letter-spacing: 5px;
        margin: 0px;
    }

    .addtocart div {
        width: 550px;
    }

    .quantity-input {
        width: 50px;
    }

    .button-product {
        display: flex;
        width: 173px;
        height: 42px;
        padding: 10px;
        justify-content: center;
        align-items: center;
        gap: 10px;
        border-radius: 10px;
        background: #828EF9;
    }
</style>
<form action="{{ route('cart.store') }}" method="post">
<input type="hidden" name="productId" value="{{ $product->id }}">
    <div class="shop-productdetail">
        <div class="container">
            <div class="row macBookPro-1">
                <div class="col-md-6" style="padding: 50px; background: #E3E5FA; ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="13" viewBox="0 0 12 13" fill="none">
                        <path d="M9.5 6.5H2.5" stroke="#6F768D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M6 10L2.5 6.5L6 3" stroke="#6F768D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="backtoshop">back to shop</p>
                    <div class="frame">
                    </div>

                </div>

                <div class="col-md-6" style="padding: 80px;">
                    @csrf
                    <label for="" class="hotdeal">
                        <p class="hotdeal">HOTDEAL</p>
                    </label>
                    <p class="shopproductname">{{ $product->name }}</p>
                    <p class="shopproductcategory">{{ $product->category_id }} | {{ $product->slug }}</p>
                    <div class="price">
                        <div>
                            <span class="old-price">&dollar;car.PriceOld</span>
                            <span class="new-price">&dollar;{{ $product->price }}.000</span>
                        </div>
                    </div>
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <th>Fuel Type</th>
                                <th>Diesel Oil</th>
                            </tr>
                            <tr>
                                <th>Tranmission</th>
                                <th>Auto Manual</th>
                            </tr>
                            <tr>
                                <th>Year Manufactor</th>
                                <th>{{ $product->year }}</th>
                            </tr>
                        </tbody>
                    </table>

                    <p class="description">Description</p>
                    <div class="content-description">
                        {{ $product->description }}
                    </div>
                </div>

                <div class="addtocart">
                    <img>
                    <div>
                        <p class="shopproductname2">{{ $product->name }}</p>
                        <p class="shopproductcategory2">{{ $product->slug }}</p>
                    </div>
                    <input class="quantity-input" type="number" value="1" class="text" min="1" max="10" name="quantity">
                    <button class="button-product" type="submit">ADD TO CART</button>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection