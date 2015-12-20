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
            <?php foreach($listProducts as $lp):?>
            <li class="item">
                <a href="#"><img class="img-responsive" src="<?php echo $this->webroot.'upload/'.$lp['Product']['avatar'];?>" alt=""></a>
                <div class="product-description-v2">
                    <div class="margin-bottom-5">
                        <h4 class="title-price"><a href="#"><?php echo $lp['Product']['name']?></a></h4>
                        <span class="title-price"><?php echo $lp['Product']['price']?>.000vnd</span>
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
            <?php endforeach?>
        </ul>
    </div>
</div>
<!--=== End Illustration v2 ===-->