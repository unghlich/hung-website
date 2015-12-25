<!--=== Footer v4 ===-->
<div class="footer-v4">
    <div class="footer">
        <div class="container">

                <!-- About -->
                <div class="col-md-4 md-margin-bottom-40">
                    <a href="index.html"><img style="height: auto; width: 50%" class="footer-logo col-md-12" src="/assets/img/Logo_footer.png" alt=""></a>
                    <br>
                    <ul class="list-unstyled address-list margin-bottom-20">
                        <li><i class="fa fa-angle-right"></i>Nhà N5, khu D, ngõ 59 Láng Hạ, Ba Đình, Hà Nội</li>
                        <li><i class="fa fa-angle-right"></i>Di động: 09718 2222 6</li>
                        <li><i class="fa fa-angle-right"></i>Máy bàn: 046 292 1168</li>
                        <li><i class="fa fa-angle-right"></i>Email: quatangthongminh.net@gmail.com</li>
                        <li><i class="fa fa-angle-right"></i>Skype: SmartGift</li>
                    </ul>

                    <ul class="list-inline shop-social">
                        <li><a href="#"><i class="fb rounded-md fa fa-facebook"></i></a></li>

                    </ul>
                </div>
                <!-- End About -->

                <!-- partner -->
                 <div class="col-md-8"> 
                    <h1 class="text-center" style="color: white; margin-top: -5%;">ĐỐI TÁC</h1>
                    @for($i = 1; $i<10; $i++) 
                        @if($i == 3)
                            <div class="col-md-4 col-sm-6 col-xs-12  quick-fix-partner"> 
                        @else
                            <div class="col-md-4 col-sm-6 col-xs-12"> 
                        @endif
                                <img class="img-responsive" src="/upload/partner/{{$i}}.jpg"> 
                            </div> 
                    @endfor
                 </div> <!-- End partner -->

        </div><!--/end continer-->
    </div><!--/footer-->

    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>
                        2015 &copy; SmartGift
                    </p>
                </div>

            </div>
        </div>
    </div><!--/copyright-->
</div>
<!--=== End Footer v4 ===-->