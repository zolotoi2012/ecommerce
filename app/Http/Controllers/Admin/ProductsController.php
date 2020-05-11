<?php

namespace App\Http\Controllers\Admin;

use App\Brand;
use App\Category;
use App\Image;
use App\Product;
use Encore\Admin\Actions\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        return view('admin/products/index', ['products' => Product::all()]);
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
            'images' => 'required'
        ]);

        $product = new Product();
        $product->name = $request['name'];
        $product->price = $request['price'];
        $product->count = $request['count'];
        $product->desc = $request['desc'];
        $product->brand_id = $request['brand_id'];
        $product->category_id = $request['category_id'];

        $product->save();

        foreach ($request['images'] as $image) {
            $images = new Image();
            $images->name = '/images/products/' . $image->getClientOriginalName();
            $images->product_id = $product->id;
            $images->save();
        }

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
        return view('admin/products/edit', ['product' => Product::find($product->id), 'categories' => Category::all(), 'brands' => Brand::all()]);
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
            'count' => 'required'
        ])->validate();

        $product->update($request->all());

        if ($request['images'][0] != '') {
            foreach ($request['images'] as $name) {
                Image::where('product_id', '=', $product->id)
                    ->where('created_at', '<', date('Y-m-d H:i:s'))
                    ->delete();

                $image = new Image();
                $image->name = '/images/products/' . $name;
                $image->product_id = $product->id;
                $image->save();
            }
        }

        return redirect()->route('products.index')
            ->with('success','Product updated successfully');
    }


    public function destroy(Product $product)
    {
        $product->delete();

        return redirect('/admin/products/')->with('success', 'Product deleted!');
    }
}
