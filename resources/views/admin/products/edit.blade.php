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
                            <textarea class="form-control" name="desc">
                                {{ $product->desc }}
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="text" name="price" class="form-control" value="{{ $product->price }}">
                        </div>
                        <div class="form-group">
                            <label>Count</label>
                            <input type="text" name="count" class="form-control" value="{{ $product->count }}">
                        </div>
                        <!-- TODO add select of category and brand -->
                        <button type="submit" class="btn btn-warning btn-flat m-b-30 m-t-30">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>