<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <title>KuantumID</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/theme/favicon.svg" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/dist/css/main.css') }}" />
</head>

<body>
    <!-- Quick view -->
    <div class="modal fade custom-modal" id="quickViewModal" tabindex="-1" aria-labelledby="quickViewModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12 mb-md-0 mb-sm-5">
                            <div class="detail-gallery">
                                <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                <!-- MAIN SLIDES -->
                                <div class="product-image-slider">
                                    <figure class="border-radius-10">
                                        <img src="assets/imgs/shop/product_slider_b1.png" alt=" product image" />
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="assets/imgs/shop/product_slider_b2.png" alt=" product image" />
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="assets/imgs/shop/product_slider_b3.png" alt=" product image" />
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="assets/imgs/shop/product_slider_b4.png" alt=" product image" />
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="assets/imgs/shop/product_slider_b1.png" alt=" product image" />
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="assets/imgs/shop/product_slider_b2.png" alt=" product image" />
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="assets/imgs/shop/product_slider_b3.png" alt=" product image" />
                                    </figure>

                                </div>
                                <!-- THUMBNAILS -->
                                <div class="slider-nav-thumbnails">
                                    <div><img src="assets/imgs/shop/thumbnail-3.jpg" alt="product image" /></div>
                                    <div><img src="assets/imgs/shop/thumbnail-4.jpg" alt="product image" /></div>
                                    <div><img src="assets/imgs/shop/thumbnail-5.jpg" alt="product image" /></div>
                                    <div><img src="assets/imgs/shop/thumbnail-6.jpg" alt="product image" /></div>
                                    <div><img src="assets/imgs/shop/thumbnail-7.jpg" alt="product image" /></div>
                                    <div><img src="assets/imgs/shop/thumbnail-8.jpg" alt="product image" /></div>
                                    <div><img src="assets/imgs/shop/thumbnail-9.jpg" alt="product image" /></div>
                                </div>
                            </div>
                            <!-- End Gallery -->
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="detail-info pr-30 pl-30">
                                <span class="stock-status out-stock"> Sale Off </span>
                                <h3 class="title-detail"><a href="#" class="text-heading">Seeds of
                                        Change Organic Quinoa, Brown</a></h3>
                                <div class="product-detail-rating">
                                    <div class="product-rate-cover text-end">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (32 reviews)</span>
                                    </div>
                                </div>
                                <div class="clearfix product-price-cover">
                                    <div class="product-price primary-color float-left">
                                        <span class="current-price text-brand">$38</span>
                                        <span>
                                            <span class="save-price font-md color3 ml-15">26% Off</span>
                                            <span class="old-price font-md ml-15">$52</span>
                                        </span>
                                    </div>
                                </div>
                                <div class="detail-extralink mb-30">
                                    <div class="detail-qty border radius">
                                        <a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
                                        <span class="qty-val">1</span>
                                        <a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
                                    </div>
                                    <div class="product-extra-link2">
                                        <button type="submit" class="button button-add-to-cart"><i
                                                class="fi-rs-shopping-cart"></i>Add to cart</button>
                                    </div>
                                </div>
                                <div class="font-xs">
                                    <ul>
                                        <li class="mb-5">Vendor: <span class="text-brand">ShopX</span></li>
                                        <li class="mb-5">MFG:<span class="text-brand"> Jun 4.2025</span></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Detail Info -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Begin -->
    @include('frontend.layouts.header')
    <!-- Header End -->
    <main class="main">
        @yield('contents')
    </main>
    @include('frontend.layouts.footer')

    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="text-center">
                    <img src="{{asset('assets/frontend/dist/imgs/theme/loading.gif')}}" alt="" />
                </div>
            </div>
        </div>
    </div>

    <!-- Vendor JS-->
    <script src="{{ asset('assets/frontend/dist/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/dist/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/dist/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/dist/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/dist/js/plugins/slick.js') }}"></script>
    <script src="{{ asset('assets/frontend/dist/js/plugins/jquery.syotimer.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/dist/js/plugins/waypoints.js') }}"></script>
    <script src="{{ asset('assets/frontend/dist/js/plugins/wow.js') }}"></script>
    <script src="{{ asset('assets/frontend/dist/js/plugins/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/frontend/dist/js/plugins/magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/frontend/dist/js/plugins/select2.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/dist/js/plugins/counterup.js') }}"></script>
    <script src="{{ asset('assets/frontend/dist/js/plugins/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/dist/js/plugins/images-loaded.js') }}"></script>
    <script src="{{ asset('assets/frontend/dist/js/plugins/isotope.js') }}"></script>
    <script src="{{ asset('assets/frontend/dist/js/plugins/scrollup.js') }}"></script>
    <script src="{{ asset('assets/frontend/dist/js/plugins/jquery.vticker-min.js') }}"></script>
    <script src="{{ asset('assets/frontend/dist/js/plugins/jquery.theia.sticky.js') }}"></script>
    <script src="{{ asset('assets/frontend/dist/js/plugins/jquery.elevatezoom.js') }}"></script>
    <script src="{{ asset('assets/frontend/dist/js/plugins/slider-range.js') }}"></script>
    <script src="{{ asset('assets/frontend/dist/js/plugins/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/frontend/dist/js/plugins/custom-parallax.js') }}"></script>
    <script src="{{ asset('assets/frontend/dist/js/plugins/leaflet.js') }}"></script>
    <script src="{{ asset('assets/frontend/dist/js/plugins/TweenMax.min.js') }}"></script>
    <!-- Template  JS -->
    <script src="{{ asset('assets/frontend/dist/js/main.js') }}"></script>
    <script src="{{ asset('assets/frontend/dist/js/shop.js') }}"></script>
</body>

</html>
