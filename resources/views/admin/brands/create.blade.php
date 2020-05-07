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
                    <form action="{{ route('brands.store') }}" method="POST">
                        @csrf
                        @method('post')
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" placeholder="New">
                        </div>
                        <button type="submit" class="btn btn-warning btn-flat m-b-30 m-t-30">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>