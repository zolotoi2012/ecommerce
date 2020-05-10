@section('left_panel')
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="{{ asset('adminLTE/images/logo.png') }}" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="/admin/"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <li class="active">
                        <a href="{{ route('products.index') }}"><i class="menu-icon fa fa-table"></i>Products</a>
                    </li>
                    <li class="active">
                        <a href="{{ route('categories.index') }}"><i class="menu-icon fa fa-table"></i> Categories</a>
                    </li>
                    <li class="active">
                        <a href="{{ route('brands.index') }}"><i class="menu-icon fa fa-table"></i>Brands</a>
                    </li>
                    <li class="active">
                        <a href="/admin/solds"><i class="menu-icon fa fa-table"></i>Solds</a>
                    </li>
                </ul>
            </div>
        </nav>
    </aside>
@endsection

@yield('left_panel')