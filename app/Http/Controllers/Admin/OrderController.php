<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orderList = Order::all();
        return view('admin.orders.index', compact('orderList'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.orders.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $order = Order::create($request->only([
            'name', 'desc','status','reciver','user_id'
        ]));
        $message = "Success Create";
        if ($order == null) {
            $message = "Create Failed";
        }
        return redirect()->route('admin.orders.index')->with('message', $message);
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
        $order = Order::findOrFail($id);
        return view('admin.orders.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $order = Order::findOrFail($id);
        $bool = $order->update($request->only([
            'name', 'desc','status','reciver','user_id'
        ]));

        $message =  "Success  Update";
        if (!$bool) {
            $message = "Update Failed";
        }
        return redirect()->route('admin.orders.index')->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $message =  "Delete Full Failed";
        if (Order::destroy($id)) {
            $message = "Success Delete";
        }
        return redirect()->route('admin.orders.index')->with('message', $message);
    }
}