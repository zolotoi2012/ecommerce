<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Product $product, Request $request)
    {
        Cart::add(
            $product->id,
            $product->name,
            $request->input('quantity'),
            $product->price,
            0,
            ['image' => $product->images->first()->name]
        );

        return redirect('/')->with('success', 'Product added successfully');
    }

    public function show()
    {
        return view('cart', ['cart' => Cart::content(), 'categories' => Category::all()]);
    }

    public function clear()
    {
        Cart::destroy();

        return view('cart', ['cart' => Cart::content(), 'categories' => Category::all()]);
    }
}
