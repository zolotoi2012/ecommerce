@component('admin.components.header')
@endcomponent
@component('admin.components.left_panel')
@endcomponent
@extends('admin.components.scripts')

<!-- Right Panel -->
<div id="right-panel" class="right-panel">
    @component('admin.components.menu')
    @endcomponent

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Dashboard</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="/admin">Dashboard</a></li>
                        <li class="active">Products</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <a href="{{ route('products.create') }}" class="btn btn-success" style="margin-bottom: 5px; margin-left: 15px;"><i class="fa fa-plus-square"></i> Create product</a>
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
                                    <th>Controls</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                <tr>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->price}}$</td>
                                    <td>{{$product->count}}</td>
                                    <td>{{$product->views ?? 0}}</td>
                                    <td>{{$product->rates ?? 0}}</td>
                                    <td>{{$product->brand['name'] }}</td>
                                    <td>{{$product->category['name'] }}</td>
                                    <td>{{$product->created_at}}</td>
                                    <td>{{$product->updated_at}}</td>
                                    <td>
                                        <a href="{{ route('products.show', $product) }}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        <a href="{{ route('products.edit', $product) }}"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                        <form action="{{ route('products.destroy', $product) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
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
        </div><!-- .animated -->
    </div><!-- .content -->
</div><!-- /#right-panel -->