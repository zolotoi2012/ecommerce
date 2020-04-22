@extends('components.preloader')
@extends('components.scripts')
@extends('components.footer')
@extends('components.subscribe')
@component('components.header')
@endcomponent
@component('components.slider')
@endcomponent

<!-- product list part start-->
<section class="product_list section_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="product_sidebar">
                    <div class="single_sedebar">
                        <form action="#">
                            <input type="text" name="#" placeholder="Search keyword">
                            <i class="ti-search"></i>
                        </form>
                    </div>
                    <div class="single_sedebar">
                        <div class="select_option">
                            <div class="select_option_list">Category <i class="right fas fa-caret-down"></i> </div>
                            <div class="select_option_dropdown">
                                <p><a href="#">Category 1</a></p>
                                <p><a href="#">Category 2</a></p>
                                <p><a href="#">Category 3</a></p>
                                <p><a href="#">Category 4</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="single_sedebar">
                        <div class="select_option">
                            <div class="select_option_list">Type <i class="right fas fa-caret-down"></i> </div>
                            <div class="select_option_dropdown">
                                <p><a href="#">Type 1</a></p>
                                <p><a href="#">Type 2</a></p>
                                <p><a href="#">Type 3</a></p>
                                <p><a href="#">Type 4</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="product_list">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_product_item">
                                <img src="{{ asset('assets/img/categories/product6.png') }}" alt="" class="img-fluid">
                                <h3> <a href="single-product.html">Cervical pillow for airplane
                                        car office nap pillow</a> </h3>
                                <p>From $5</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_product_item">
                                <img src="{{ asset('assets/img/categories/product2.png') }}" alt="" class="img-fluid">
                                <h3> <a href="single-product.html">Geometric striped flower home classy decor</a> </h3>
                                <p>From $5</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_product_item">
                                <img src="{{ asset('assets/img/categories/product5.png') }}" alt="" class="img-fluid">
                                <h3> <a href="single-product.html">Foam filling cotton slow rebound pillows</a> </h3>
                                <p>From $5</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_product_item">
                                <img src="{{ asset('assets/img/categories/product6.png') }}" alt="" class="img-fluid">
                                <h3> <a href="single-product.html">Memory foam filling cotton Slow rebound pillows</a> </h3>
                                <p>From $5</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_product_item">
                                <img src="{{ asset('assets/img/categories/product1.png') }}" alt="" class="img-fluid">
                                <h3> <a href="single-product.html">Memory foam filling cotton Slow rebound pillows</a> </h3>
                                <p>From $5</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_product_item">
                                <img src="{{ asset('assets/img/categories/product4.png') }}" alt="" class="img-fluid">
                                <h3> <a href="single-product.html">Sleeping orthopedic sciatica Back Hip Joint Pain relief</a> </h3>
                                <p>From $5</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_product_item">
                                <img src="{{ asset('assets/img/categories/product5.png') }}" alt="" class="img-fluid">
                                <h3> <a href="single-product.html">Memory foam filling cotton Slow rebound pillows</a> </h3>
                                <p>From $5</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_product_item">
                                <img src="{{ asset('assets/img/categories/product3.png') }}" alt="" class="img-fluid">
                                <h3> <a href="single-product.html">Sleeping orthopedic sciatica Back Hip Joint Pain relief</a> </h3>
                                <p>From $5</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_product_item">
                                <img src="{{ asset('assets/img/categories/product2.png') }}" alt="" class="img-fluid">
                                <h3> <a href="single-product.html">Geometric striped flower home classy decor</a> </h3>
                                <p>From $5</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_product_item">
                                <img src="{{ asset('assets/img/categories/product1.png') }}" alt="" class="img-fluid">
                                <h3> <a href="single-product.html">Geometric striped flower home classy decor</a> </h3>
                                <p>From $5</p>
                            </div>
                        </div>
                    </div>
                    <div class="load_more_btn text-center">
                        <a href="#" class="btn_3">Load More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product list part end-->

<!-- client review part here -->
<section class="client_review">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="client_review_slider owl-carousel">
                    <div class="single_client_review">
                        <div class="client_img">
                            <img src="{{ asset('assets/img/client.png') }}" alt="#">
                        </div>
                        <p>"Working in conjunction with humanitarian aid agencies, we have supported programmes to help alleviate human suffering.</p>
                        <h5>- Micky Mouse</h5>
                    </div>
                    <div class="single_client_review">
                        <div class="client_img">
                            <img src="{{ asset('assets/img/client_1.png') }}" alt="#">
                        </div>
                        <p>"Working in conjunction with humanitarian aid agencies, we have supported programmes to help alleviate human suffering.</p>
                        <h5>- Micky Mouse</h5>
                    </div>
                    <div class="single_client_review">
                        <div class="client_img">
                            <img src="{{ asset('assets/img/client_2.png') }}" alt="#">
                        </div>
                        <p>"Working in conjunction with humanitarian aid agencies, we have supported programmes to help alleviate human suffering.</p>
                        <h5>- Micky Mouse</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- client review part end -->

<!-- Shop Method Start-->
<div class="shop-method-area section-padding30">
    <div class="container">
        <div class="row d-flex justify-content-between">
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="single-method mb-40">
                    <i class="ti-package"></i>
                    <h6>Free Shipping Method</h6>
                    <p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="single-method mb-40">
                    <i class="ti-unlock"></i>
                    <h6>Secure Payment System</h6>
                    <p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="single-method mb-40">
                    <i class="ti-reload"></i>
                    <h6>Secure Payment System</h6>
                    <p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
                </div>
            </div>
        </div>
    </div>
</div>