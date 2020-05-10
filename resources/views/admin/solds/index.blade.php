@include('admin.components.header')
@include('admin.components.left_panel')
@extends('admin.components.scripts')
<div id="right-panel" class="right-panel">
    @include('admin.components.menu')
    @include('admin.components.breadcrumbs', ['title' => 'Solds'])
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Solds Table</strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Image</th>
                                    <th>Count</th>
                                    <th>User</th>
                                    <th>Solded Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($solds as $sold)
                                <tr>
                                    <td>{{ $sold->products->name }}</td>
                                    <td><img class="image-size" src="{{ $sold->products->images->first()->name}}" alt="{{ $sold->products->name }}"></td>
                                    <td>{{ $sold->count }}</td>
                                    <td>{{ $sold->users->email }}</td>
                                    <td>{{ $sold->created_at }}</td>
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