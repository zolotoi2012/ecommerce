@include('admin.components.header')
@component('admin.components.left_panel')
@endcomponent
@extends('admin.components.scripts')
<div id="right-panel" class="right-panel">
    @include('admin.components.menu')
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Product: {{ $product->name }}</strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Count</th>
                                    <th>Views</th>
                                    <th>Rates</th>
                                    <th>Brand</th>
                                    <th>Category</th>
                                    <th>Image</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->price}}</td>
                                        <td>{{$product->count}}</td>
                                        <td>{{$product->views ?? 0}}</td>
                                        <td>{{$product->rates ?? 0}}</td>
                                        <td>{{$product->brand['name']}}</td>
                                        <td>{{$product->category['name']}}</td>
                                        <td>
                                            @foreach($product->images as $image)
                                                <img class="image-size" src="{{ $image->name ?? asset('images/product_1.jpg') }}" alt="{{ $product->image }}">
                                            @endforeach
                                        </td>
                                        <td>{{$product->created_at}}</td>
                                        <td>{{$product->updated_at}}</td>
                                        <td>{{$product->desc}}</td>
                                        <td>
                                            <form action="{{ route('products.destroy', $product) }}" method="POST">
                                                <a class="btn btn-primary" href="{{ route('products.edit', $product)}}"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>