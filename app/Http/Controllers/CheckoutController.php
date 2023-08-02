<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function checkout()
    {
        $user = Auth::user();
        $order = Order::create(
            array(
                "name" => random_string(),
                "description" => "ORder description",
                "status" => "pending",
                "receiver" => $user->name,
                "user_id" => $user->id
            )
        );


        $cart = request()->session()->get('cart');
        if (!isset($cart)) return redirect()->route('404');

        for ($i = 0; $i < count($cart); $i++) {
            $order_item = $cart[$i];
            OrderItem::create(
                array(
                    "totalprice" => order_item_total($order_item['quantity'], $order_item['productPrice']),
                    "quantity" => $order_item['quantity'],
                    "product_id" => $order_item['productId'],
                    "order_id" => $order->id
                )
            );
        }
        request()->session()->flash('message', 'Checkout was successful!');
        request()->session()->forget('cart');

        return redirect()->route('cart.index');
    }
}
