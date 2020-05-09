<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all()->orderBy('id', 'desc')->paginate(10);
        $categories = Category::all();
        return view('index', compact('products', 'products', 'categories'));
    }

    public function show(Product $product)
    {
        $product->update(['views' => $product->views + 1]);

        return view(
            'product',
            [
                'product' => Product::find($product->id),
                'categories' => Category::all(),
                'brands' => Brand::all()
            ]
        );
    }
}
