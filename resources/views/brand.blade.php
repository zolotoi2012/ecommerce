@include('components.header')
<link rel="stylesheet" type="text/css" href="{{ asset('styles/categories.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('styles/categories_responsive.css') }}">
<body>
<div class="super_container">
    @component('components.menu', ['categories' => $categories])
    @endcomponent
    <style>
        .home_title
        {
            font-size: 60px;
            font-weight: 600;
            line-height: 1.2;
            overflow: hidden;
            background: linear-gradient(90deg, #000, #00FFFF, #000);
            background-repeat: no-repeat;
            background-size: 80%;
            animation: animate 6s linear infinite;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .home_text
        {
            font-size: 60px;
            font-weight: 600;
            line-height: 1.2;
            overflow: hidden;
            background: linear-gradient(90deg, #000, #00FFFF, #000);
            background-repeat: no-repeat;
            background-size: 80%;
            animation: animate 6s linear infinite;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        @keyframes animate
        {
            0%
            {
                background-position: -500%;

            }
            100%
            {
                background-position: 500%;

            }
        }
    </style>
    <div class="home">
        <div class="home_container">
            <div class="home_background" style="filter: blur(1.5rem); background-image:url({{ $brand->logo ?? asset('images/categories.jpg') }})"></div>
            <div class="home_content_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home_content" style="left: 40%;">
                                <div class="home_title">{{ $brand->name }}</div>
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
                        <div class="results">Showing <span>{{ count($brand->products) }}</span> results</div>
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
                        @foreach($brand->products as $product)
                            <div class="product">
                                <div class="product_image"><img style="width: 250px; height: 250px;" src="{{ $product->images->first()->name ?? asset('/images/product_1.jpg')}}" alt=""></div>
                                <div class="product_extra product_new"><a href="#">{{ $product->category->name }}</a></div>
                                <div class="product_content" style="text-align: center;">
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
