<?php

namespace App\Http\Controllers\Products;

use App\Brand;
use App\Category;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('admin/products/index', compact('products', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/products/create', ['categories' => Category::all(), 'brands' => Brand::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'desc' => 'required',
            'price' => 'required',
            'count' => 'required',
        ]);

        Product::create(
            [
                'name' => $request->all()['name'],
                'desc' => $request->all()['desc'],
                'price' => $request->all()['price'],
                'count' => $request->all()['count'],
                'category_id' => (int) $request->all()['category'],
                'brand_id' => (int) $request->all()['brand'],
            ]
        );

        Product::create($request->all());

        return redirect()->route('products.index')
            ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param Product $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('admin/products/show', ['product' => Product::find($product->id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Product $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin/products/edit', ['product' => Product::find($product->id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Product $product
     * @return void
     */
    public function update(Request $request, Product $product)
    {
        Validator::make($request->all(), [
            'name' => 'required|max:255',
            'desc' => 'required',
            'price' => 'required',
            'count' => 'required',
        ])->validate();

        $product->update($request->all());

        return redirect()->route('products.index')
            ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Product $product
     * @return void
     * @throws \Exception
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect('/admin/products/')->with('success', 'Product deleted!');
    }
}
