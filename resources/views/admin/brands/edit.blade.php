@include('admin.components.header')
@include('admin.components.left_panel')
@include('admin.components.scripts')
<div id="right-panel" class="right-panel">
    @include('admin.components.menu')
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <h1 align="center">Brand: {{$brand->name}}</h1>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="login-form">
                    <form action="{{ route('brands.update', $brand) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $brand->name }}">
                        </div>
                        <button type="submit" class="btn btn-warning btn-flat m-b-30 m-t-30">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>