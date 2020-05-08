<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        return view('categories', ['categories' => Category::all(), 'products' => Product::all()]);
    }

    public function show(Category $category)
    {
        $category = Category::find($category->id);
        $categories = Category::all();

        return view('categories', compact('category', 'categories'));
    }
}
