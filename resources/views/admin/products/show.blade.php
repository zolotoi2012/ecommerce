@component('admin.components.header')
@endcomponent
@component('admin.components.left_panel')
@endcomponent
@extends('admin.components.scripts')

<div id="right-panel" class="right-panel">
    @component('admin.components.menu')
    @endcomponent

    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Table</strong>
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
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Description</th>
                                    <th>Controls</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->price}}</td>
                                        <td>{{$product->count}}</td>
                                        <td>{{$product->views ?? 0}}</td>
                                        <td>{{$product->rates ?? 0}}</td>
                                        <td>{{$product->brand_id}}</td>
                                        <td>{{$product->category_id}}</td>
                                        <td>{{$product->created_at}}</td>
                                        <td>{{$product->updated_at}}</td>
                                        <td>{{$product->desc}}</td>
                                        <td>
                                            <a href="{{ route('products.update', $product) }}"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                            <a href="{{ route('products.destroy', $product) }}"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .animated -->
    </div><!-- .content -->
</div>