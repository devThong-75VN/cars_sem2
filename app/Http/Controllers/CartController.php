<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $cart = $request->session()->get('cart');
        if ($cart == null) $cart = array();

        return view('cart', compact('cart'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     $product = Product::findOrFail($request->productId);

    //     $order = array(
    //         'productId' => $product->id,
    //         'productName' => $product->name,
    //         'productPrice' => $product->price,
    //         'quantity' => $request->quantity
    //     );

    //     $request->session()->push('cart', $order);

    //     return redirect()->route('cart.index');
    // }

    public function store(Request $request)
    {
        $productId = $request->productId;
        $product = Product::findOrFail($productId);
        $quantity = $request->quantity;

        $cart = $request->session()->get('cart', []);

        // Kiểm tra xem sản phẩm đã có trong giỏ hàng hay chưa
        $productExists = false;
        foreach ($cart as $key => $item) {
            if ($item['productId'] == $productId) {
                $cart[$key]['quantity'] += $quantity;
                $productExists = true;
                break;
            }
        }

        // Nếu sản phẩm chưa tồn tại trong giỏ hàng, thêm mới vào giỏ
        if (!$productExists) {
            $order = [
                'productId' => $product->id,
                'productName' => $product->name,
                'productPrice' => $product->price,
                'quantity' => $quantity
            ];
            $cart[] = $order;
        }

        $request->session()->put('cart', $cart);

        return redirect()->route('cart.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cart = $request->session()->get('cart'); //(cart mot mang chua id, name, quantity)
        for ($i = 0; $i < count($cart); $i++) {
            if ($cart[$i]['productId'] == $id) {
                $cart[$i]['quantity'] = $request->quantity;
            }
        }

        $request->session()->put('cart', $cart);

        return redirect()->route('cart.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        $cart = $request->session()->get('cart');
        for ($i = 0; $i < count($cart); $i++) {
            array_splice($cart, $i, 1);
        }

        $request->session()->put('cart', $cart);
        return redirect()->route('cart.index');
    }
}
