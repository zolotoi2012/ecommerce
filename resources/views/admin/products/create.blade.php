@component('admin.components.header')
@endcomponent
@component('admin.components.left_panel')
@endcomponent
@extends('admin.components.scripts')

<div id="right-panel" class="right-panel">
    @component('admin.components.menu')
    @endcomponent

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
                    <form action="{{ route('products.store') }}" method="POST">
                        @csrf
                        @method('post')
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Iphone X">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" name="desc" placeholder="Give good desc :3">
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="text" name="price" class="form-control" placeholder="100.00">
                        </div>
                        <div class="form-group">
                            <label>Count</label>
                            <input type="text" name="count" class="form-control" placeholder="10">
                        </div>
                        <label>Category:
                            <select class="form-control" id="exampleFormControlSelect1" name="category">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </label>
                        <label>Brand:
                            <select class="form-control" name="brand">
                                @foreach($brands as $brand)
                                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                @endforeach
                            </select>
                        </label>
                        <!-- TODO add select of category and brand -->
                        <button type="submit" class="btn btn-warning btn-flat m-b-30 m-t-30">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>