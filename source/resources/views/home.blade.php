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
        @foreach ($categories as $category)
        <div class="col-md-4">
            <a href="{{route('category-detail', [ 'cateId' => $category->id, 'slug' => $category->getSEOSlug() ])}}" class="thumb-product-link">
                <div class="thumb-product">
                    <img class="thumb-product-img" src="{{$category->image}}" alt="">
                    <div class="thumb-product-in">
                        <h4>{{$category->name}}</h4>
                        <span class="thumb-product-type">{{$category->description}}</span>
                    </div>

                </div>
            </a>
        </div>
        @endforeach
    </div><!--/end row-->
</div>
<!--=== End Product Content ===-->

@stop