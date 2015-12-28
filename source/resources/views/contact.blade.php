
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
                <div class="col-md-6 col-sm-6">
                    <!-- Google Map -->
                    <div id="map" class="height-450">
                    </div>
                    <!-- End Google Map -->
                </div>
                <div class="col-md-6 col-sm-6">
                    <!-- Contacts -->
                    <h3>Quý khách vui lòng liên hệ:</h3>
                    <h2>Công Ty Quà Tặng Smart Gift</h2>
                    <ul class="list-unstyled who">
                        <li><a href="#"><i class="fa fa-home"></i> Nhà N5 Khu D Ngõ 59 Láng Hạ, Đống Đa, Hà Nội.</a></li>
                        <li><a href="#"><i class="fa fa-phone"></i> 04 629 211 68</a></li>
                        <li><a href="#"><i class="fa fa-mobile"></i>  0971 822 226</a></li>
                        <li><a href="#"><i class="fa fa-facebook-square"></i> Công Ty Quà Tặng Smart Gift</a></li>
                        <li><a href="#"><i class="fa fa-globe"></i> https://quatangthongminh.net</a></li>
                        <li><a href="#"><i class="fa fa-envelope"></i> quatangthongminh.net@gmail.com</a></li>
                        <li><a href="#"><i class="fa fa-skype"></i> SmartGift</a></li>
                    </ul>

                    <hr>

                    <!-- Business Hours -->
                    <h3>Business Hours</h3>
                    <ul class="list-unstyled">
                        <li><strong>Monday-Friday:</strong> 10am to 8pm</li>
                        <li><strong>Saturday:</strong> 11am to 3pm</li>
                        <li><strong>Sunday:</strong> Closed</li>
                    </ul>
                </div>
            </div>

            <!-- Owl Clients v1 -->

        </div><!--/container-->
        <!--=== End Content Part ===-->


    </div><!--/wrapepr-->

@stop