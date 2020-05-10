@include('admin.components.header')
@include('admin.components.left_panel')
@extends('admin.components.scripts')
<div id="right-panel" class="right-panel">
    @include('admin.components.menu')
    @include('admin.components.breadcrumbs', ['title' => 'Products'])
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <a href="{{ route('products.create') }}" class="btn btn-success create-button"><i class="fa fa-plus-square"></i> Create product</a>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Products Table</strong>
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
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                <tr>
                                    <td>{{$product->name}}</td>
                                    <td>${{$product->price}}</td>
                                    <td>{{$product->count}}</td>
                                    <td>{{$product->views ?? 0}}</td>
                                    <td>{{$product->rates ?? 0}}</td>
                                    <td>{{$product->brand['name'] }}</td>
                                    <td>{{$product->category['name'] }}</td>
                                    <td>
                                        @foreach($product->images as $image)
                                            <img style="width: 50px; height: 50px;" src="{{ $image->name ?? asset('images/product_1.jpg') }}" alt="{{ $product->image }}">
                                        @endforeach
                                    </td>
                                    <td>{{$product->created_at}}</td>
                                    <td>{{$product->updated_at}}</td>
                                    <td>
                                        <form id="trash-form" action="{{ route('products.destroy', $product) }}" method="POST">
                                            <a class="btn btn-info" href="{{ route('products.show', $product) }}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a class="btn btn-primary" href="{{ route('products.edit', $product)}}"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>