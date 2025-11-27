@extends('frontend.layouts.app')

@section('contents')
    @include('frontend.home.sections.hero-section')
    <!--End hero slider-->
    @include('frontend.home.sections.category-section')
    <!--End category slider-->
    @include('frontend.home.sections.banner-section')
    <!--End banners-->
    @include('frontend.home.sections.product-tab-section')
    <!--Products Tabs-->
    @include('frontend.home.sections.banner-section-two')
    <!--End 4 banners-->
    @include('frontend.home.sections.flash-sale-section')
    <!--End Best Sales-->
    @include('frontend.home.sections.new-arrival-section')
    <!-- new arrival end -->
    <section class="wsus__ctg mt-40">
        <div class="container">
            <a href="#" class="wsus__ctg_area">
                <img src="assets/imgs/cta_bg.png" alt="cta" class="img-fluid w-100" />
            </a>
        </div>
    </section>
    <!--CTA section end-->
    @include('frontend.home.sections.special-product-section')
    <!-- special products end -->
    @include('frontend.home.sections.for-col-product-section')
    <!--End 4 columns-->
@endsection
