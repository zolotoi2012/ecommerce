@include('admin.components.header')
@include('admin.components.left_panel')
@include('admin.components.scripts')

<div id="right-panel" class="right-panel">
    @include('admin.components.menu')
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <h1 align="center">Product: {{$product->name}}</h1>
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
                    <form action="{{ route('products.update', $product) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $product->name }}">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="desc" placeholder="Give good desc :3">{{$product->desc}}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="text" name="price" class="form-control" value="{{ $product->price }}">
                        </div>
                        <div class="form-group">
                            <label>Count</label>
                            <input type="text" name="count" class="form-control" value="{{ $product->count }}">
                        </div>
                        <div class="form-group image-padding edit-image">
                            <label for="file" class="image-label"><i class="fa fa-photo" style="color: #fff;"></i> &nbsp <span class="image-text">Add Images</span></label>
                            @foreach($product->images as $image)
                            <img class="image-size" src="{{ $image->name ?? '/images/product_1.jpg'}}">
                            @endforeach
                            <input id="file" name="images[]" type="file" multiple="multiple" accept="image/*">
                        </div>
                        <div class="form-group select-padding">
                            <label>Category:
                                <select name="category_id" class="form-control" id="exampleFormControlSelect1">
                                    @foreach ($categories as $category)
                                        @if ($category->name === $product->category->name)
                                            <option selected value="{{ $category->id }}">{{ $category->name }}</option>
                                        @else
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </label>
                            <label>Brand:
                                <select name="brand_id" class="form-control" id="exampleFormControlSelect1">
                                    @foreach ($brands as $brand)
                                        @if ($brand->name === $product->brand->name)
                                            <option selected value="{{ $category->id }}">{{ $brand->name }}</option>
                                        @else
                                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </label>
                        </div>
                        <button type="submit" class="btn btn-warning btn-flat m-b-30 m-t-30">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>