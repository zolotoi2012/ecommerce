<?php
declare(strict_types = 1);

namespace App\Http\Controllers\Admin;

use App\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class BrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::orderBy('id', 'desc')->get();
        return view('admin/brands/index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/brands/create');
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
            'name' => 'required|max:255'
        ]);

        // TODO add image to Brands
        Brand::create(['name' => $request->input('name')]);

        return redirect()->route('brands.index')
            ->with('success','Brand added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param Brand $brand
     * @return void
     */
    public function show(Brand $brand)
    {
        $brand = Brand::find($brand->id);
        $count = count($brand->products);

        return view('admin/brands/show', compact('brand', 'count'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Brand $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        $brand = Brand::find($brand->id);

        return view('admin/brands/edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Brand $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        Validator::make($request->all(), [
            'name' => 'required|max:255',
        ])->validate();

        $brand->update($request->all());

        return redirect()->route('brands.index')
            ->with('success','Brand updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Brand $brand
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Brand $brand)
    {
        $brand->delete();

        return redirect('/admin/brands')->with('success', 'Brand deleted!');
    }
}
