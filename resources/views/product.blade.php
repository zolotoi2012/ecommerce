@include('components.header')
<link rel="stylesheet" type="text/css" href="{{ asset('styles/product.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('styles/product_responsive.css') }}">
<link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
<body>
    <div class="super_container">
        @component('components.menu', ['categories' => $categories])
        @endcomponent

        <!-- Home -->
        <div class="home">
            <div class="home_container">
                <div class="home_background" style="background-image:url({{ asset('images/categories.jpg') }})"></div>
                <div class="home_content_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="home_content">
                                    <div class="home_title">Smart Phones<span>.</span></div>
                                    <div class="home_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros. Sed viverra velit venenatis fermentum luctus.</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="product_details">
            <div class="container">
                <div class="row details_row">
                    <div class="col-lg-6">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="details_image_large imgBx"><img src="{{ $product->image ?? asset('images/details_1.jpg') }}" alt=""><div class="product_extra product_new"><a href="#">{{ $product->category['name'] ?? 'New'}}</a></div></div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="details_image_large imgBx" data-image="{{ asset('images/details_2.jpg') }}"><img src="{{ asset('images/details_2.jpg') }}" alt=""></div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="details_image_large imgBx" data-image="{{ asset('images/details_3.jpg') }}"><img src="{{ asset('images/details_3.jpg') }}" alt=""></div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="details_image_large imgBx" data-image="{{ asset('images/details_4.jpg') }}"><img src="{{ asset('images/details_4.jpg') }}" alt=""></div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <!-- Product Content -->
                    <div class="col-lg-6">
                        <div class="details_content">
                            <div class="details_name">Smart Phone</div>
                            <div class="details_discount">$890</div>
                            <div class="details_price">$670</div>

                            <!-- In Stock -->
                            <div class="in_stock_container">
                                <div class="availability">Availability:</div>
                                <span>In Stock</span>
                            </div>
                            <div class="details_text">
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Phasellus id nisi quis justo tempus mollis sed et dui. In hac habitasse platea dictumst. Suspendisse ultrices mauris diam. Nullam sed aliquet elit. Mauris consequat nisi ut mauris efficitur lacinia.</p>
                            </div>

                            <!-- Product Quantity -->
                            <div class="product_quantity_container">
                                <div class="product_quantity clearfix">
                                    <span>Qty</span>
                                    <input id="quantity_input" type="text" pattern="[0-9]*" value="1">
                                    <div class="quantity_buttons">
                                        <div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
                                        <div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
                                    </div>
                                </div>
                                <div class="button cart_button"><a href="#">Add to cart</a></div>
                            </div>

                            <!-- Share -->
                            <div class="details_share">
                                <span>Share:</span>
                                <ul>
                                    <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row description_row">
                    <div class="col">
                        <div class="description_title_container">
                            <div class="description_title">Description</div>
                            <div class="reviews_title"><a href="#">Reviews <span>(1)</span></a></div>
                        </div>
                        <div class="description_text">
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Phasellus id nisi quis justo tempus mollis sed et dui. In hac habitasse platea dictumst. Suspendisse ultrices mauris diam. Nullam sed aliquet elit. Mauris consequat nisi ut mauris efficitur lacinia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Products -->

        <div class="products">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <div class="products_title">Related Products</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">

                        <div class="product_grid">

                            <!-- Product -->
                            <div class="product">
                                <div class="product_image"><img src="{{ asset('images/product_1.jpg') }}" alt=""></div>
                                <div class="product_extra product_new"><a href="categories.html">New</a></div>
                                <div class="product_content">
                                    <div class="product_title"><a href="product.html">Smart Phone</a></div>
                                    <div class="product_price">$670</div>
                                </div>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <div class="product_image"><img src="{{ asset('images/product_2.jpg') }}" alt=""></div>
                                <div class="product_extra product_sale"><a href="categories.html">Sale</a></div>
                                <div class="product_content">
                                    <div class="product_title"><a href="product.html">Smart Phone</a></div>
                                    <div class="product_price">$520</div>
                                </div>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <div class="product_image"><img src="{{ asset('images/product_3.jpg') }}" alt=""></div>
                                <div class="product_content">
                                    <div class="product_title"><a href="product.html">Smart Phone</a></div>
                                    <div class="product_price">$710</div>
                                </div>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <div class="product_image"><img src="{{ asset('images/product_4.jpg') }}" alt=""></div>
                                <div class="product_content">
                                    <div class="product_title"><a href="product.html">Smart Phone</a></div>
                                    <div class="product_price">$330</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        @component('components.newsletter')
        @endcomponent

        @component('components.footer')
        @endcomponent

        @include('components.scripts')
        <script src="{{ asset('js/product.js') }}"></script>
        <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
            <script>
                var swiper = new Swiper('.swiper-container', {
                    effect: 'cube',
                    grabCursor: true,
                    cubeEffect: {
                        shadow: true,
                        slideShadows: true,
                        shadowOffset: 20,
                        shadowScale: 0.94,
                    },
                    pagination: {
                        el: '.swiper-pagination',
                    },
                });
            </script>
    </div>
</body>