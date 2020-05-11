@include('components.header')
<link rel="stylesheet" type="text/css" href="{{ asset('styles/main_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('styles/responsive.css') }}">
<link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
<body>
    <div class="super_container">
        @component('components.menu', ['categories' => $categories])
        @endcomponent

        <style>
            .swiper-container {
                width: 100%;
                padding-top: 100px;
                padding-bottom: 50px;
            }
            .swiper-slide {
                background-position: center;
                background-size: cover;
                width: 300px;
                height: 300px;
            }
        </style>

        <div class="swiper-container">
            <div class="swiper-wrapper">
                @foreach ($brands as $brand)
                    <a href="{{ route('brand', $brand) }}" class="swiper-slide" style="background-image:url({{ $brand->logo ?? asset('/images/product_1.jpg')}})"></a>
                @endforeach
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
        <div class="products">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="product_grid" style="display: flex;">
                            @foreach ($brands as $brand)
                                <div class="product" style="flex-direction: row; padding-left: 10px;">
                                    <div class="product_image" style="width: 245px; height: 250px;"><img style="max-width: 100%;" src="{{ $brand->logo ?? '/images/product_1.jpg'}}" alt=""></div>
                                    <div class="product_content">
                                        <div class="product_title"><a href="{{ route('brand', $brand) }}">{{ $brand->name }}</a></div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('components.newsletter')
        @include('components.footer')
    </div>

    @include('components.scripts')
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows : true,
            },
            pagination: {
                el: '.swiper-pagination',
            },
        });
    </script>
</body>