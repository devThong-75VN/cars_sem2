<?php

function order_item_total($quantity, $price){
    return $quantity * $price;
}

function cart_total($cart, $ship=0){
    $total = 0;
    for($i = 0; $i < count($cart); $i++){
        $order_item = $cart[$i];
        $total += order_item_total($order_item['quantity'], $order_item['productPrice']);
    }
    return $total + $ship;
}

function random_string($length = 8){
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
    return $randomString;
}

function format_money($number)
{
    return number_format($number, 2, ".", ",") . "VNĐ";
}