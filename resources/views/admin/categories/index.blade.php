@include('admin.components.header')
@include('admin.components.left_panel')
@include('admin.components.scripts')
<div id="right-panel" class="right-panel">
    @include('admin.components.menu')
    @include('admin.components.breadcrumbs', ['title' => 'Categories'])
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <a href="{{ route('categories.create') }}" class="btn btn-success create-button"><i class="fa fa-plus-square"></i> Create category</a>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Categories Table</strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Count of Products</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ count($category->products) }}</td>
                                    <td>
                                        <form id="trash-form" action="{{ route('categories.destroy', $category) }}" method="POST">
                                            <a class="btn btn-info" href="{{ route('categories.show', $category) }}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a class="btn btn-primary" href="{{ route('categories.edit', $category)}}"><i class="fa fa-edit" aria-hidden="true"></i></a>
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