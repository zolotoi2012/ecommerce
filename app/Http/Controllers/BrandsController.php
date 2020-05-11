<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
    public function index()
    {
        return view('brands', ['brands' => Brand::all(), 'categories' => Category::all()]);
    }

    public function show(Brand $brand)
    {
        return view('brand', ['brand' => Brand::find($brand->id), 'categories' => Category::all()]);
    }
}
