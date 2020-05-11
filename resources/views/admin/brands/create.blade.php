@include('admin.components.header')
@include('admin.components.left_panel')
@include('admin.components.scripts')
<div id="right-panel" class="right-panel">
    @include('admin.components.menu')
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
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
                    <form action="{{ route('brands.store') }}" method="POST">
                        @csrf
                        @method('post')
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" placeholder="New">
                        </div>
                        <div class="form-group image-padding edit-image">
                            <label for="file" class="image-label"><i class="fa fa-photo" style="color: #fff;"></i> &nbsp <span class="image-text">Add Logo</span></label>
                            <input id="file" name="logo" type="file" accept="image/*">
                        </div>
                        <button type="submit" class="btn btn-warning btn-flat m-b-30 m-t-30">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>