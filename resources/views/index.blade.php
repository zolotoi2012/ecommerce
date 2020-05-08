@include('components.header')
<link rel="stylesheet" type="text/css" href="{{ asset('styles/main_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('styles/responsive.css') }}">
<body>
    <div class="super_container">
        @component('components.menu', ['categories' => $categories])
        @endcomponent
        @component('components.slider')
        @endcomponent
        @component('components.ads')
        @endcomponent

        <div class="products">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="product_grid">
                            @foreach ($products as $product)
                                <div class="product">
                                    <div class="product_image"><img style="width: 250px; height: 250px;" src="{{ $product->image ?? 'images/product_1.jpg'}}" alt=""></div>
                                    <div class="product_extra product_new"><a href="/categories">{{ $product->category['name'] ?? 'New'}}</a></div>
                                    <div class="product_content">
                                        <div class="product_title"><a href="{{ route('product', $product) }}">{{ $product->name }}</a></div>
                                        <div class="product_price">{{ $product->price }}$</div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @component('components.ad')
        @endcomponent

        @component('components.icon-boxes')
        @endcomponent

        @component('components.newsletter')
        @endcomponent

        @component('components.footer')
        @endcomponent
    </div>

    @include('components.scripts')
    <script src="js/custom.js"></script>
</body>
