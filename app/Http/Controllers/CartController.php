<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addOne(Product $product)
    {
        $cart = Cart::ensureExists();
        $cart->incrementItem($product);
        return back();
    }
}
