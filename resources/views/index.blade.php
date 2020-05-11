@include('components.header')
<link rel="stylesheet" type="text/css" href="{{ asset('styles/main_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('styles/responsive.css') }}">
<body>
    <div class="super_container">
        @include('components.menu', ['categories' => $categories])
        @include('components.slider')
        @include('components.ads')
        <div class="products">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="product_grid">
                            @foreach ($products as $product)
                                <div class="product">
                                    <div class="product_image"><img style="width: 250px; height: 250px;" src="{{ $product->images->first()->name ?? 'images/product_1.jpg'}}" alt=""></div>
                                    <div class="product_content">
                                        <div class="product_title"><a href="{{ route('product', $product) }}">{{ $product->name }}</a></div>
                                        <div class="product_price">${{ $product->price }}</div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('components.ad')
        @include('components.icon-boxes')
        @include('components.newsletter')
        @include('components.footer')
    </div>

    @include('components.scripts')
    <script src="{{ asset('js/custom.js') }}"></script>
</body>
