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
                    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('post')
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Iphone X">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="desc" placeholder="Give good desc :3"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="text" name="price" class="form-control" placeholder="100.00">
                        </div>
                        <div class="form-group">
                            <label>Count</label>
                            <input type="text" name="count" class="form-control" placeholder="10">
                        </div>
                        <div class="form-group image-padding">
                            <label for="file" class="image-label"><i class="fa fa-photo" style="color: #fff;"></i> &nbsp <span class="image-text">Add Images</span></label>
                            <input id="file" name="images[]" type="file" multiple="multiple" accept="image/*">
                        </div>
                        <div class="form-group select-padding">
                            <label>Category:
                                <select name="category_id" class="form-control" id="exampleFormControlSelect1">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </label>
                            <label>Brand:
                                <select name="brand_id" class="form-control" id="exampleFormControlSelect1">
                                    @foreach ($brands as $brand)
                                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                    @endforeach
                                </select>
                            </label>
                        </div>
                        <button type="submit" class="btn btn-warning btn-flat m-b-30 m-t-30">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>