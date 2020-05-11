@include('components.header')
<link rel="stylesheet" type="text/css" href="{{ asset('styles/categories.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('styles/categories_responsive.css') }}">
<body>
    <div class="super_container">
        @component('components.menu', ['categories' => $categories])
        @endcomponent

        <div class="home">
            <div class="home_container">
                <div class="home_background" style="background-image:url({{ asset('images/categories.jpg') }})"></div>
                <div class="home_content_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="home_content">
                                    <div class="home_title">{{ $category->name }}<span>.</span></div>
                                    <div class="home_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros. Sed viverra velit venenatis fermentum luctus.</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Products -->
        <div class="products">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <!-- Product Sorting -->
                        <div class="sorting_bar d-flex flex-md-row flex-column align-items-md-center justify-content-md-start">
                            <div class="results">Showing <span>{{ count($category->products) }}</span> results</div>
                            <div class="sorting_container ml-md-auto">
                                <div class="sorting">
                                    <ul class="item_sorting">
                                        <li>
                                            <span class="sorting_text">Sort by</span>
                                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                            <ul>
                                                <li class="product_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'><span>Default</span></li>
                                                <li class="product_sorting_btn" data-isotope-option='{ "sortBy": "price" }'><span>Price</span></li>
                                                <li class="product_sorting_btn" data-isotope-option='{ "sortBy": "stars" }'><span>Name</span></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="product_grid">
                            @foreach($category->products as $product)
                            <div class="product">
                                <div class="product_image"><img style="width: 250px; height: 250px;" src="{{ $product->images->first()->name ?? asset('/images/product_1.jpg')}}" alt=""></div>
                                <div class="product_extra product_new"><a href="#">{{ $category->name }}</a></div>
                                <div class="product_content">
                                    <div class="product_title"><a href="{{ route('product', $product) }}">{{ $product->name }}</a></div>
                                    <div class="product_price">{{ $product->price }}</div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @component('components.icon-boxes')
        @endcomponent

        @component('components.newsletter')
        @endcomponent

        @component('components.footer')
        @endcomponent
    </div>

    @include('components.scripts')
    <script src="{{ asset('js/categories.js') }}"></script>
</body>
