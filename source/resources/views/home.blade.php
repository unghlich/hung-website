@extends('layout')

@section('content')
<!--=== Slider ===-->
<div class="tp-banner-container">
    <div class="tp-banner">
        <ul>
            <!-- SLIDE -->
            <li class="" data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Slide 1">
                <!-- MAIN IMAGE -->
                <img src="/upload/banner4.jpg"  alt=""  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">


            </li>
            <!-- END SLIDE -->
            <!-- SLIDE -->
            <li class="revolution-mch-1" data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Slide 1">
                <!-- MAIN IMAGE -->
                <img src="/upload/banner.jpg"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

                <div class="tp-caption revolution-ch1 sft start"
                     data-x="left"
                     data-hoffset="0"
                     data-y="100"
                     data-speed="1500"
                     data-start="500"
                     data-easing="Back.easeInOut"
                     data-endeasing="Power1.easeIn"
                     data-endspeed="300">
                    <!--        The New <br>-->
                    <strong>HÀNG TRĂM MẪU PHA LÊ</strong><br>
                    <p><b>CÚP - BIỂU TRƯNG - KỶ NIỆM CHƯƠNG</b></p>
                    <!--        is here-->
                </div>

                <!-- LAYER -->
                <div class="tp-caption sft"
                     data-x="center"
                     data-hoffset="0"
                     data-y="380"
                     data-speed="1600"
                     data-start="1800"
                     data-easing="Power4.easeOut"
                     data-endspeed="300"
                     data-endeasing="Power1.easeIn"
                     data-captionhidden="off"
                     style="z-index: 6">
                    <a href="http://quatangthongminh.net/" class="btn-u btn-brd btn-brd-hover btn-u-light">Xem ngay</a>
                </div>
            </li>
            <!-- END SLIDE -->
            <!-- SLIDE -->
            <li class="revolution-mch-1" data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Slide 1">
                <!-- MAIN IMAGE -->
                <img src="/upload/banner2.jpg"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

                <div class="tp-caption revolution-ch1 sft start"
                     data-x="left"
                     data-hoffset="0"
                     data-y="100"
                     data-speed="1500"
                     data-start="500"
                     data-easing="Back.easeInOut"
                     data-endeasing="Power1.easeIn"
                     data-endspeed="300"
                     >
                    <!--        The New <br>-->
                    <strong>BIỂU TRƯNG <br> KỶ NIỆM CHƯƠNG ĐỒNG</strong>
                    <p><b>CUP - BIỂU TRƯNG - KỶ NIỆM CHƯƠNG</b></p>
                    <!--        is here-->
                </div>

                <!-- LAYER -->
                <div class="tp-caption sft"
                     data-x="center"
                     data-hoffset="0"
                     data-y="380"
                     data-speed="1600"
                     data-start="1800"
                     data-easing="Power4.easeOut"
                     data-endspeed="300"
                     data-endeasing="Power1.easeIn"
                     data-captionhidden="off"
                     style="z-index: 6">
                    <a href="http://quatangthongminh.net/san-pham/coc-thuy-tinh" class="btn-u btn-brd btn-brd-hover btn-u-light">Xem ngay</a>
                </div>
            </li>
            <!-- END SLIDE -->
            <!-- SLIDE -->
            <li class="revolution-mch-1" data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Slide 1">
                <!-- MAIN IMAGE -->
                <img src="/upload/banner3.jpg"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

                <div class="tp-caption revolution-ch1 sft start"
                     data-x="left"
                     data-hoffset="0"
                     data-y="100"
                     data-speed="1500"
                     data-start="500"
                     data-easing="Back.easeInOut"
                     data-endeasing="Power1.easeIn"
                     data-endspeed="300">
                    <!--        The New <br>-->
                    <strong>XƯỞNG LÀM ẢNH GỖ</strong><br>
                    <p><b>CÔNG NGHỆ IN ẢNH LAB HÀNG ĐẦU</b></p>
                    <!--        is here-->
                </div>

                <!-- LAYER -->
                <div class="tp-caption sft"
                     data-x="center"
                     data-hoffset="0"
                     data-y="380"
                     data-speed="1600"
                     data-start="1800"
                     data-easing="Power4.easeOut"
                     data-endspeed="300"
                     data-endeasing="Power1.easeIn"
                     data-captionhidden="off"
                     style="z-index: 6">
                    <a href="http://quatangthongminh.net/san-pham/bieu-trung-pha-le" class="btn-u btn-brd btn-brd-hover btn-u-light">Xem ngay</a>
                </div>
            </li>
            <!-- END SLIDE -->
        </ul>
        <div class="tp-bannertimer tp-bottom"></div>
    </div>
</div>
<!--=== End Slider ===-->
<!--=== Product Content ===-->
<div class="container content-md">

    <div class="row illustration-v4 margin-bottom-40">
        @foreach ($categories as $kCate => $category)
        <div class="col-md-4">

            <div class="thumb-product">
                <img class="thumb-product-img" src="/upload/productCategories/{{$category['name']}}.jpg" alt="">
                <div class="thumb-product-in">
                    <h4><a href="shop-ui-inner.html">{{$category['name']}}</a></h4>
                    <span class="thumb-product-type">{{$category['description']}}</span>
                </div>

            </div>

        </div>
        @endforeach
    </div><!--/end row-->


    <div>
        <div class="heading heading-v1 margin-bottom-40">
            <h2>Sản phẩm nổi bật</h2>
        </div>
        <div class="row illustration-v4 margin-bottom-40">
            <div class="col-md-4">

                <div class="thumb-product">
                    <img class="thumb-product-img" src="/upload/productCategories/08.jpg" alt="">
                    <div class="thumb-product-in">
                        <h4><a href="shop-ui-inner.html">Yuketen</a> – <a href="shop-ui-inner.html">Derby Shoe</a></h4>
                        <span class="thumb-product-type">Footwear - Oxfords</span>
                    </div>
                    <ul class="list-inline overflow-h">
                        <li class="thumb-product-price line-through">$75.00</li>
                        <li class="thumb-product-price">$65.00</li>
                        <li class="thumb-product-purchase"><a href="#"><i class="fa fa-shopping-cart"></i></a> | <a href="#"><i class="fa fa-heart"></i></a></li>
                    </ul>
                </div>
                <div class="thumb-product">
                    <img class="thumb-product-img" src="/upload/productCategories/09.jpg" alt="">
                    <div class="thumb-product-in">
                        <h4><a href="shop-ui-inner.html">Yuketen</a> – <a href="shop-ui-inner.html">Derby Shoe</a></h4>
                        <span class="thumb-product-type">Footwear - Oxfords</span>
                    </div>
                    <ul class="list-inline overflow-h">
                        <li class="thumb-product-price">$75.00</li>
                        <li class="thumb-product-purchase"><a href="#"><i class="fa fa-shopping-cart"></i></a> | <a href="#"><i class="fa fa-heart"></i></a></li>
                    </ul>
                </div>
                <div class="thumb-product">
                    <img class="thumb-product-img" src="/upload/productCategories/03.jpg" alt="">
                    <div class="thumb-product-in">
                        <h4><a href="shop-ui-inner.html">Yuketen</a> – <a href="shop-ui-inner.html">Derby Shoe</a></h4>
                        <span class="thumb-product-type">Footwear - Oxfords</span>
                    </div>
                    <ul class="list-inline overflow-h">
                        <li class="thumb-product-price">$75.00</li>
                        <li class="thumb-product-purchase"><a href="#"><i class="fa fa-shopping-cart"></i></a> | <a href="#"><i class="fa fa-heart"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">

                <div class="thumb-product">
                    <img class="thumb-product-img" src="/upload/productCategories/02.jpg" alt="">
                    <div class="thumb-product-in">
                        <h4><a href="shop-ui-inner.html">Yuketen</a> – <a href="shop-ui-inner.html">Derby Shoe</a></h4>
                        <span class="thumb-product-type">Footwear - Oxfords</span>
                    </div>
                    <ul class="list-inline overflow-h">
                        <li class="thumb-product-price">$75.00</li>
                        <li class="thumb-product-purchase"><a href="#"><i class="fa fa-shopping-cart"></i></a> | <a href="#"><i class="fa fa-heart"></i></a></li>
                    </ul>
                </div>
                <div class="thumb-product">
                    <img class="thumb-product-img" src="/upload/productCategories/10.jpg" alt="">
                    <div class="thumb-product-in">
                        <h4><a href="shop-ui-inner.html">Yuketen</a> – <a href="shop-ui-inner.html">Derby Shoe</a></h4>
                        <span class="thumb-product-type">Footwear - Oxfords</span>
                    </div>
                    <ul class="list-inline overflow-h">
                        <li class="thumb-product-price">$75.00</li>
                        <li class="thumb-product-purchase"><a href="#"><i class="fa fa-shopping-cart"></i></a> | <a href="#"><i class="fa fa-heart"></i></a></li>
                    </ul>
                </div>
                <div class="thumb-product">
                    <img class="thumb-product-img" src="/upload/productCategories/06.jpg" alt="">
                    <div class="thumb-product-in">
                        <h4><a href="shop-ui-inner.html">Yuketen</a> – <a href="shop-ui-inner.html">Derby Shoe</a></h4>
                        <span class="thumb-product-type">Footwear - Oxfords</span>
                    </div>
                    <ul class="list-inline overflow-h">
                        <li class="thumb-product-price line-through">$75.00</li>
                        <li class="thumb-product-price">$65.00</li>
                        <li class="thumb-product-purchase"><a href="#"><i class="fa fa-shopping-cart"></i></a> | <a href="#"><i class="fa fa-heart"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 padding">

                <div class="thumb-product">
                    <img class="thumb-product-img" src="/upload/productCategories/07.jpg" alt="">
                    <div class="thumb-product-in">
                        <h4><a href="shop-ui-inner.html">Yuketen</a> – <a href="shop-ui-inner.html">Derby Shoe</a></h4>
                        <span class="thumb-product-type">Footwear - Oxfords</span>
                    </div>
                    <ul class="list-inline overflow-h">
                        <li class="thumb-product-price line-through">$75.00</li>
                        <li class="thumb-product-price">$65.00</li>
                        <li class="thumb-product-purchase"><a href="#"><i class="fa fa-shopping-cart"></i></a> | <a href="#"><i class="fa fa-heart"></i></a></li>
                    </ul>
                </div>
                <div class="thumb-product">
                    <img class="thumb-product-img" src="/upload/productCategories/04.jpg" alt="">
                    <div class="thumb-product-in">
                        <h4><a href="shop-ui-inner.html">Yuketen</a> – <a href="shop-ui-inner.html">Derby Shoe</a></h4>
                        <span class="thumb-product-type">Footwear - Oxfords</span>
                    </div>
                    <ul class="list-inline overflow-h">
                        <li class="thumb-product-price">$75.00</li>
                        <li class="thumb-product-purchase"><a href="#"><i class="fa fa-shopping-cart"></i></a> | <a href="#"><i class="fa fa-heart"></i></a></li>
                    </ul>
                </div>
                <div class="thumb-product">
                    <img class="thumb-product-img" src="/upload/productCategories/05.jpg" alt="">
                    <div class="thumb-product-in">
                        <h4><a href="shop-ui-inner.html">Yuketen</a> – <a href="shop-ui-inner.html">Derby Shoe</a></h4>
                        <span class="thumb-product-type">Footwear - Oxfords</span>
                    </div>
                    <ul class="list-inline overflow-h">
                        <li class="thumb-product-price">$75.00</li>
                        <li class="thumb-product-purchase"><a href="#"><i class="fa fa-shopping-cart"></i></a> | <a href="#"><i class="fa fa-heart"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="heading heading-v1 margin-bottom-40">
            <h2>Sản phẩm mới</h2>
        </div>
        <div class="row illustration-v4 margin-bottom-40">
            <div class="col-md-4">

                <div class="thumb-product">
                    <img class="thumb-product-img" src="/upload/productCategories/08.jpg" alt="">
                    <div class="thumb-product-in">
                        <h4><a href="shop-ui-inner.html">Yuketen</a> – <a href="shop-ui-inner.html">Derby Shoe</a></h4>
                        <span class="thumb-product-type">Footwear - Oxfords</span>
                    </div>
                    <ul class="list-inline overflow-h">
                        <li class="thumb-product-price line-through">$75.00</li>
                        <li class="thumb-product-price">$65.00</li>
                        <li class="thumb-product-purchase"><a href="#"><i class="fa fa-shopping-cart"></i></a> | <a href="#"><i class="fa fa-heart"></i></a></li>
                    </ul>
                </div>
                <div class="thumb-product">
                    <img class="thumb-product-img" src="/upload/productCategories/09.jpg" alt="">
                    <div class="thumb-product-in">
                        <h4><a href="shop-ui-inner.html">Yuketen</a> – <a href="shop-ui-inner.html">Derby Shoe</a></h4>
                        <span class="thumb-product-type">Footwear - Oxfords</span>
                    </div>
                    <ul class="list-inline overflow-h">
                        <li class="thumb-product-price">$75.00</li>
                        <li class="thumb-product-purchase"><a href="#"><i class="fa fa-shopping-cart"></i></a> | <a href="#"><i class="fa fa-heart"></i></a></li>
                    </ul>
                </div>
                <div class="thumb-product">
                    <img class="thumb-product-img" src="/upload/productCategories/03.jpg" alt="">
                    <div class="thumb-product-in">
                        <h4><a href="shop-ui-inner.html">Yuketen</a> – <a href="shop-ui-inner.html">Derby Shoe</a></h4>
                        <span class="thumb-product-type">Footwear - Oxfords</span>
                    </div>
                    <ul class="list-inline overflow-h">
                        <li class="thumb-product-price">$75.00</li>
                        <li class="thumb-product-purchase"><a href="#"><i class="fa fa-shopping-cart"></i></a> | <a href="#"><i class="fa fa-heart"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">

                <div class="thumb-product">
                    <img class="thumb-product-img" src="/upload/productCategories/02.jpg" alt="">
                    <div class="thumb-product-in">
                        <h4><a href="shop-ui-inner.html">Yuketen</a> – <a href="shop-ui-inner.html">Derby Shoe</a></h4>
                        <span class="thumb-product-type">Footwear - Oxfords</span>
                    </div>
                    <ul class="list-inline overflow-h">
                        <li class="thumb-product-price">$75.00</li>
                        <li class="thumb-product-purchase"><a href="#"><i class="fa fa-shopping-cart"></i></a> | <a href="#"><i class="fa fa-heart"></i></a></li>
                    </ul>
                </div>
                <div class="thumb-product">
                    <img class="thumb-product-img" src="/upload/productCategories/10.jpg" alt="">
                    <div class="thumb-product-in">
                        <h4><a href="shop-ui-inner.html">Yuketen</a> – <a href="shop-ui-inner.html">Derby Shoe</a></h4>
                        <span class="thumb-product-type">Footwear - Oxfords</span>
                    </div>
                    <ul class="list-inline overflow-h">
                        <li class="thumb-product-price">$75.00</li>
                        <li class="thumb-product-purchase"><a href="#"><i class="fa fa-shopping-cart"></i></a> | <a href="#"><i class="fa fa-heart"></i></a></li>
                    </ul>
                </div>
                <div class="thumb-product">
                    <img class="thumb-product-img" src="/upload/productCategories/06.jpg" alt="">
                    <div class="thumb-product-in">
                        <h4><a href="shop-ui-inner.html">Yuketen</a> – <a href="shop-ui-inner.html">Derby Shoe</a></h4>
                        <span class="thumb-product-type">Footwear - Oxfords</span>
                    </div>
                    <ul class="list-inline overflow-h">
                        <li class="thumb-product-price line-through">$75.00</li>
                        <li class="thumb-product-price">$65.00</li>
                        <li class="thumb-product-purchase"><a href="#"><i class="fa fa-shopping-cart"></i></a> | <a href="#"><i class="fa fa-heart"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 padding">

                <div class="thumb-product">
                    <img class="thumb-product-img" src="/upload/productCategories/07.jpg" alt="">
                    <div class="thumb-product-in">
                        <h4><a href="shop-ui-inner.html">Yuketen</a> – <a href="shop-ui-inner.html">Derby Shoe</a></h4>
                        <span class="thumb-product-type">Footwear - Oxfords</span>
                    </div>
                    <ul class="list-inline overflow-h">
                        <li class="thumb-product-price line-through">$75.00</li>
                        <li class="thumb-product-price">$65.00</li>
                        <li class="thumb-product-purchase"><a href="#"><i class="fa fa-shopping-cart"></i></a> | <a href="#"><i class="fa fa-heart"></i></a></li>
                    </ul>
                </div>
                <div class="thumb-product">
                    <img class="thumb-product-img" src="/upload/productCategories/04.jpg" alt="">
                    <div class="thumb-product-in">
                        <h4><a href="shop-ui-inner.html">Yuketen</a> – <a href="shop-ui-inner.html">Derby Shoe</a></h4>
                        <span class="thumb-product-type">Footwear - Oxfords</span>
                    </div>
                    <ul class="list-inline overflow-h">
                        <li class="thumb-product-price">$75.00</li>
                        <li class="thumb-product-purchase"><a href="#"><i class="fa fa-shopping-cart"></i></a> | <a href="#"><i class="fa fa-heart"></i></a></li>
                    </ul>
                </div>
                <div class="thumb-product">
                    <img class="thumb-product-img" src="/upload/productCategories/05.jpg" alt="">
                    <div class="thumb-product-in">
                        <h4><a href="shop-ui-inner.html">Yuketen</a> – <a href="shop-ui-inner.html">Derby Shoe</a></h4>
                        <span class="thumb-product-type">Footwear - Oxfords</span>
                    </div>
                    <ul class="list-inline overflow-h">
                        <li class="thumb-product-price">$75.00</li>
                        <li class="thumb-product-purchase"><a href="#"><i class="fa fa-shopping-cart"></i></a> | <a href="#"><i class="fa fa-heart"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>
<!--=== End Product Content ===-->

@stop