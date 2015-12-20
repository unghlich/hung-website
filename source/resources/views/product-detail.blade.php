@extends('layout')

@section('content')
        <!--=== Shop Product ===-->
<div class="shop-product">

    <div class="container">
        <div class="row">
            <div class="col-md-6 md-margin-bottom-50">
                <div class="ms-showcase2-template">
                    <!-- Master Slider -->
                    <div class="master-slider ms-skin-default" id="masterslider">
                        <div class="ms-slide">
                            <img class="ms-brd" src="/assets/img/blank.gif" data-src="/assets/img/blog/28.jpg" alt="lorem ipsum dolor sit">
                            <img class="ms-thumb img-responsive" src="/upload/14122015083654566f6eb6b5bb517.jpg" alt="thumb">
                        </div>
                    </div>
                    <!-- End Master Slider -->
                </div>
            </div>

            <div class="col-md-6">
                <div class="shop-product-heading">
                    <h2>Biểu Trưng Đồng Loại 1</h2>
                    <ul class="list-inline shop-product-social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    </ul>
                </div><!--/end shop product social-->

                <ul class="list-inline product-ratings margin-bottom-30">
                    <li><i class="rating-selected fa fa-star"></i></li>
                    <li><i class="rating-selected fa fa-star"></i></li>
                    <li><i class="rating-selected fa fa-star"></i></li>
                    <li><i class="rating fa fa-star"></i></li>
                    <li><i class="rating fa fa-star"></i></li>

                </ul><!--/end shop product ratings-->

                <p>Sản phẩm được làm trên công nghệ ăn mòn kim loại đỉnh cao.</p><br>

                <ul class="list-inline shop-product-prices margin-bottom-30">
                    <li class="shop-red">0.000vnd</li>

                    <!--                    <li class="line-through">$70.00</li>-->
                    <!--                    <li><small class="shop-bg-red time-day-left">4 days left</small></li>-->
                </ul><!--/end shop product prices-->


            </div>
        </div><!--/end row-->
    </div>
</div>
<!--=== End Shop Product ===-->
<!--=== Illustration v2 ===-->
<div class="container">
    <div class="heading heading-v1 margin-bottom-20">
        <h2>Sản phẩm liên quan</h2>
    </div>

    <div class="illustration-v2 margin-bottom-60">
        <div class="customNavigation margin-bottom-25">
            <a class="owl-btn prev rounded-x"><i class="fa fa-angle-left"></i></a>
            <a class="owl-btn next rounded-x"><i class="fa fa-angle-right"></i></a>
        </div>

        <ul class="list-inline owl-slider-v4">
            <li class="item">
                <a href="#"><img class="img-responsive" src="/upload/14122015083654566f6eb6b5aed18.jpg" alt=""></a>
                <div class="product-description-v2">
                    <div class="margin-bottom-5">
                        <h4 class="title-price"><a href="#">Biểu Trưng Đồng Loại 1</a></h4>
                        <span class="title-price">0.000vnd</span>
                    </div>
                    <ul class="list-inline product-ratings">
                        <li><i class="rating-selected fa fa-star"></i></li>
                        <li><i class="rating-selected fa fa-star"></i></li>
                        <li><i class="rating-selected fa fa-star"></i></li>
                        <li><i class="rating fa fa-star"></i></li>
                        <li><i class="rating fa fa-star"></i></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>
<!--=== End Illustration v2 ===-->
@stop