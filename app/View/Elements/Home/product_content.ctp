<!--=== Product Content ===-->
<div class="container content-md">
<!--=== Illustration v1 ===-->
<div class="row margin-bottom-60">
    <?php foreach($banners2 as $b2) : ?>
    <div class="col-md-6 md-margin-bottom-30">
        <div class="overflow-h">
            <div class="illustration-v1 illustration-img1" style="background-image: url(<?php echo $this->webroot.'upload/'.$b2['Banner']['path']?>)">
                <div class="illustration-bg">
                    <div class="illustration-ads ad-details-v1">
                        <h3><?php echo $b2['Banner']['description']?></h3>
                        <a class="btn-u btn-brd btn-brd-hover btn-u-light" href="#">Xem ngay</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach?>
</div><!--/end row-->
<!--=== End Illustration v1 ===-->

<div class="heading heading-v1 margin-bottom-20">
    <h2>Sản phẩm nổi bật</h2>
    <p>Công ty chúng tôi là đơn vị cung cấp các sản phẩm quà tặng cho doanh nghiệp, cá nhân. Những sản phẩm quà tặng là sự lựa chọn thông minh của người tặng đến doanh nghiệp cũng như người thân, đồng nghiệp, đối tác của mình.</p>
</div>

<!--=== Illustration v2 ===-->
<div class="illustration-v2 margin-bottom-60">
    <div class="customNavigation margin-bottom-25">
        <a class="owl-btn prev rounded-x"><i class="fa fa-angle-left"></i></a>
        <a class="owl-btn next rounded-x"><i class="fa fa-angle-right"></i></a>
    </div>

    <ul class="list-inline owl-slider">
        <?php foreach($htProduct as $htp):?>
        <li class="item">
            <div class="product-img">
                <a href="shop-ui-inner.html"><img class="full-width img-responsive" src="<?php echo $this->webroot.'uploads/products/'.$htp['Product']['avatar'];?>" alt=""></a>
                <a class="product-review" href="<?php echo Router::url(array('controller'=>'products','action'=>'view','slug'=>$htp['Product']['slug']))?>">Xem chi tiết</a>
                <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
            </div>
            <div class="product-description product-description-brd">
                <div class="overflow-h margin-bottom-5">
                    <div class="pull-left">
                        <h4 class="title-price"><a href="shop-ui-inner.html"><?php echo $htp['Product']['name']?></a></h4>
<!--                        <span class="gender text-uppercase">Men</span>-->
<!--                        <span class="gender">Suits - Blazers</span>-->
                    </div>
                    <div class="product-price">
                        <span class="title-price"><?php echo $htp['Product']['price']?>.000.vnđ</span>
                    </div>
                </div>
                <ul class="list-inline product-ratings">
                    <li><i class="rating-selected fa fa-star"></i></li>
                    <li><i class="rating-selected fa fa-star"></i></li>
                    <li><i class="rating-selected fa fa-star"></i></li>
                    <li><i class="rating fa fa-star"></i></li>
                    <li><i class="rating fa fa-star"></i></li>
                    <li class="like-icon"><a data-original-title="Add to wishlist" data-toggle="tooltip" data-placement="left" class="tooltips" href="#"><i class="fa fa-heart"></i></a></li>
                </ul>
            </div>
        </li>
        <?php endforeach?>
    </ul>
</div>
<!--=== End Illustration v2 ===-->

<!--<!--=== Illustration v3 ===-->-->
<!--<div class="row margin-bottom-50">-->
<!--    <div class="col-md-4 md-margin-bottom-30">-->
<!--        <div class="overflow-h">-->
<!--            <a class="illustration-v3 illustration-img1" href="#">-->
<!--                        <span class="illustration-bg">-->
<!--                            <span class="illustration-ads">-->
<!--                                <span class="illustration-v3-category">-->
<!--                                    <span class="product-category">Men</span>-->
<!--                                    <span class="product-amount">56 Items</span>-->
<!--                                </span>-->
<!--                            </span>-->
<!--                        </span>-->
<!--            </a>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="col-md-4 md-margin-bottom-30">-->
<!--        <div class="overflow-h">-->
<!--            <a class="illustration-v3 illustration-img2" href="#">-->
<!--                        <span class="illustration-bg">-->
<!--                            <span class="illustration-ads">-->
<!--                                <span class="illustration-v3-category">-->
<!--                                    <span class="product-category">Women</span>-->
<!--                                    <span class="product-amount">56 Items</span>-->
<!--                                </span>-->
<!--                            </span>-->
<!--                        </span>-->
<!--            </a>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="col-md-4">-->
<!--        <div class="overflow-h">-->
<!--            <a class="illustration-v3 illustration-img3" href="#">-->
<!--                        <span class="illustration-bg">-->
<!--                            <span class="illustration-ads">-->
<!--                                <span class="illustration-v3-category">-->
<!--                                    <span class="product-category">Children</span>-->
<!--                                    <span class="product-amount">56 Items</span>-->
<!--                                </span>-->
<!--                            </span>-->
<!--                        </span>-->
<!--            </a>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--<!--=== End Illustration v3 ===-->-->

<div class="heading heading-v1 margin-bottom-40">
    <h2>Sản phẩm mới</h2>
</div>

<!--=== Illustration v2 ===-->
<div class="row illustration-v2">
    <?php foreach ($newProduct as $np) : ?>
    <div class="col-md-3 col-sm-6 md-margin-bottom-30">
        <div class="product-img">
            <a href="shop-ui-inner.html"><img class="full-width img-responsive" src="<?php echo $this->webroot.'uploads/products/'.$np['Product']['avatar'];?>" alt=""></a>
            <a class="product-review" href="<?php echo Router::url(array('controller'=>'products','action'=>'view','slug'=>$np['Product']['slug']))?>">Xem chi tiết</a>
            <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
        </div>
        <div class="product-description product-description-brd">
            <div class="overflow-h margin-bottom-5">
                <div class="pull-left">
                    <h4 class="title-price"><a href="<?php echo Router::url(array('controller'=>'products','action'=>'view','slug'=>$np['Product']['slug']))?>"><?php echo $nb['Product']['name']?></a></h4>
<!--                    <span class="gender text-uppercase">Woman</span>-->
<!--                    <span class="gender">Suits - Blazers</span>-->
                </div>
                <div class="product-price">
                    <span class="title-price"><?php echo $np['Product']['price']?>.000.vnđ</span>
                </div>
            </div>
            <ul class="list-inline product-ratings">
                <li><i class="rating-selected fa fa-star"></i></li>
                <li><i class="rating-selected fa fa-star"></i></li>
                <li><i class="rating-selected fa fa-star"></i></li>
                <li><i class="rating fa fa-star"></i></li>
                <li><i class="rating fa fa-star"></i></li>
                <li class="like-icon"><a data-original-title="Add to wishlist" data-toggle="tooltip" data-placement="left" class="tooltips" href="#"><i class="fa fa-heart"></i></a></li>
            </ul>
        </div>
    </div>
    <?php endforeach?>
</div>
<!--=== End Illustration v2 ===-->
</div>
<!--=== End Product Content ===-->