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
                        <li class="active">Brands</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <a href="{{ route('brands.create') }}" class="btn btn-success" style="margin-bottom: 5px; margin-left: 15px;"><i class="fa fa-plus-square"></i> Add brand</a>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Brands Table</strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Count of Products</th>
                                    <th>Controls</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($brands as $brand)
                                <tr>
                                    <td>{{ $brand->id }}</td>
                                    <td>{{ $brand->name }}</td>
                                    <td>{{ count($brand->products) }}</td>
                                    <td class="actions-control">
                                        <a href="{{ route('brands.show', $brand) }}" style="border-radius: 5px;"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        <a href="{{ route('brands.edit', $brand) }}" style="border-radius: 5px;"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                        <form class="" action="{{ route('brands.destroy', $brand) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="button-clear"><i class="fa fa-trash" aria-hidden="true"></i></button>
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