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
                            <strong class="card-title">Brands Table</strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Count</th>
                                    <th>Controls</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $brand->id }}</td>
                                        <td>{{ $brand->name }}</td>
                                        <td>{{ $count }}</td>
                                        <td>
                                            <a href="{{ route('brands.update', $brand) }}"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                            <a href="{{ route('brands.destroy', $brand) }}"><i class="fa fa-trash" aria-hidden="true"></i></a>
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