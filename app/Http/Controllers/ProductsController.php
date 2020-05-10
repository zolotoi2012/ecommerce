<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use App\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $view = new View();
        $view->product_id = $product->id;
        $view->user_id = Auth::user()->id;
        $view->save();

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
