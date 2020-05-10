@include('admin.components.header')
@include('admin.components.left_panel')
@include('admin.components.scripts')
<div id="right-panel" class="right-panel">
    @include('admin.components.menu')
    @include('admin.components.breadcrumbs', ['title' => 'Brands'])
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <a href="{{ route('brands.create') }}" class="btn btn-success create-button"><i class="fa fa-plus-square"></i> Add brand</a>
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
                                    <th>Image</th>
                                    <th>Count of Products</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($brands as $brand)
                                <tr>
                                    <td>{{ $brand->id }}</td>
                                    <td>{{ $brand->name }}</td>
                                    <td><img class="image-size" src="{{ $brand->image ?? asset('/images/product_1.jpg') }}" alt="{{ $brand->name }}"></td>
                                    <td>{{ count($brand->products) }}</td>
                                    <td>
                                        <form id="trash-form" action="{{ route('brands.destroy', $brand) }}" method="POST">
                                            <a class="btn btn-info" href="{{ route('brands.show', $brand) }}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a class="btn btn-primary" href="{{ route('brands.edit', $brand)}}"><i class="fa fa-edit" aria-hidden="true"></i></a>
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