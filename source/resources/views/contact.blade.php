
@extends('layout')

@section('content')
    <body>
    <!--=== Style Switcher ===-->
    <i class="style-switcher-btn fa fa-cogs hidden-xs"></i>
    <!--=== End Style Switcher ===-->

    <div class="wrapper">
        <!--=== Breadcrumbs ===-->
        <div class="breadcrumbs">
            <div class="container">
                <br/>
                <h1 class="pull-left">Liên Hệ</h1>
            </div>
        </div><!--/breadcrumbs-->
        <!--=== End Breadcrumbs ===-->

        <!--=== Content Part ===-->
        <div class="container content">
            <div class="row margin-bottom-60">
                <div class="col-md-6 col-sm-6 col-xs-12 height-450">
                    <!-- Google Map -->
                    <div id="googleMap" class=" height-400"></div>
                    <!-- End Google Map -->
                </div>

                <div class="col-md-offset-1 col-md-5 col-sm-6 col-xs-12">
                    <!-- Contacts -->
                    <h3>Quý khách vui lòng liên hệ:</h3>
                    <h2>Công Ty Quà Tặng Smart Gift</h2>
                    <ul class="list-unstyled who">
                        <li><a href="#"><i class="fa fa-home"></i> Nhà N5 Khu D Ngõ 59 Láng Hạ, Đống Đa, Hà Nội.</a></li>
                        <li><a href="#"><i class="fa fa-phone"></i> 046 292 1168</a></li>
                        <li><a href="#"><i class="fa fa-mobile"></i>  0971 822 226</a></li>
                        <li><a href="https://www.facebook.com/smartgift.ABC/"><i class="fa fa-facebook-square"></i> Công Ty Quà Tặng Smart Gift</a></li>
                        <li><a href="{{route('home')}}"><i class="fa fa-globe"></i> https://quatangthongminh.net</a></li>
                        <li><a href="mailto:quatangthongminh.net@gmail.com?Subject=Hello%20SmartGift" target="_top">
                                <i class="fa fa-envelope"></i> quatangthongminh.net@gmail.com</a></li>
                        <li><a href="skype:SmartGift?chat"><i class="fa fa-skype"></i> SmartGift</a></li>
                    </ul>

                    <hr>

                    <!-- Business Hours -->
                    <h3>Giờ mở cửa</h3>
                    <ul class="list-unstyled">
                        <li><strong>Thứ 2- Thứ 7:</strong> 8h30 đến 18h30</li>
                        <li><strong>Chủ Nhật:</strong> Đóng cửa</li>
                    </ul>
                </div>
            </div>

            <!-- Owl Clients v1 -->

        </div><!--/container-->
        <!--=== End Content Part ===-->


    </div><!--/wrapepr-->

@stop