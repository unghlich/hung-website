<!--=== Shop Product ===-->
<div class="shop-product">
    <!-- Breadcrumbs v5 -->
    <div class="container">
        <ul class="breadcrumb-v5">
            <li><a href="index.html"><i class="fa fa-home"></i></a></li>
            <li><a href="<?php echo Router::url(array('controller'=>'products','action'=>'index'))?>">Sản phẩm</a></li>
            <li class="active"><?php echo $product['Category']['name']?></li>
        </ul>
    </div>
    <!-- End Breadcrumbs v5 -->

    <div class="container">
        <div class="row">
            <div class="col-md-6 md-margin-bottom-50">
                <div class="ms-showcase2-template">
                    <!-- Master Slider -->
                    <?php if(count($product['ProductImage'])) : ?>
                    <div class="master-slider ms-skin-default" id="masterslider">
                        <?php foreach($product['ProductImage'] as $pi):?>
                        <div class="ms-slide">
                            <img class="ms-brd" src="/assets/img/blank.gif" data-src="/assets/img/blog/28.jpg" alt="lorem ipsum dolor sit">
                            <img class="ms-thumb img-responsive" src="<?php echo $this->webroot.'upload/'.$pi['path'];?>" alt="thumb">
                        </div>
                        <?php endforeach?>
                    </div>
                    <!-- End Master Slider -->
                    <?php endif?>
                </div>
            </div>

            <div class="col-md-6">
                <div class="shop-product-heading">
                    <h2><?php echo $product['Product']['name']?></h2>
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
                    <li class="product-review-list">
                        <span>(1) <a href="#">Đáng giá</a> | <a href="#"> Thêm đánh giá</a></span>
                    </li>
                </ul><!--/end shop product ratings-->

                <p><?php echo $product['Product']['description']?></p><br>

                <ul class="list-inline shop-product-prices margin-bottom-30">
                    <li class="shop-red"><?php echo $product['Product']['price']?>.000vnd</li>

<!--                    <li class="line-through">$70.00</li>-->
<!--                    <li><small class="shop-bg-red time-day-left">4 days left</small></li>-->
                </ul><!--/end shop product prices-->

                <h3 class="shop-product-title">Kích thước</h3>
                <ul class="list-inline product-size margin-bottom-30">
                    <li>
                        <input type="radio" id="size-1" name="size">
                        <label for="size-1">*</label>
                    </li>
                    <li>
                        <input type="radio" id="size-2" name="size">
                        <label for="size-2">*</label>
                    </li>
                    <li>
                        <input type="radio" id="size-3" name="size" checked>
                        <label for="size-3">*</label>
                    </li>
                    <li>
                        <input type="radio" id="size-4" name="size">
                        <label for="size-4">*</label>
                    </li>
                </ul><!--/end product size-->

                <h3 class="shop-product-title">Chất liệu</h3>
                <ul class="list-inline product-color margin-bottom-30">
                    <li>
                        <input type="radio" id="color-1" name="color">
                        <label class="color-one" for="color-1"></label>
                    </li>
                    <li>
                        <input type="radio" id="color-2" name="color" checked>
                        <label class="color-two" for="color-2"></label>
                    </li>
                    <li>
                        <input type="radio" id="color-3" name="color">
                        <label class="color-three" for="color-3"></label>
                    </li>
                </ul><!--/end product color-->

                <h3 class="shop-product-title">Số lượng</h3>
                <div class="margin-bottom-40">
                    <form name="f1" class="product-quantity sm-margin-bottom-20">
                        <button type='button' class="quantity-button" name='subtract' onclick='javascript: subtractQty();' value='-'>-</button>
                        <input type='text' class="quantity-field" name='qty' value="1" id='qty'/>
                        <button type='button' class="quantity-button" name='add' onclick='javascript: document.getElementById("qty").value++;' value='+'>+</button>
                    </form>
                    <button type="button" onclick="return alert('Chức năng này đang xây dựng, xin vui lòng liên hệ công ty.')" class="btn-u btn-u-sea-shop btn-u-lg">Thêm vào giỏ hàng</button>
                </div><!--/end product quantity-->

                <ul class="list-inline add-to-wishlist add-to-wishlist-brd">
                    <li class="wishlist-in">
                        <i class="fa fa-heart"></i>
                        <a href="#" onclick="return alert('Chức năng này đang xây dựng, xin vui lòng liên hệ công ty.')">Thêm vào danh sách yêu thích</a>
                    </li>
                    <li class="compare-in">
                        <i class="fa fa-exchange"></i>
                        <a href="#" onclick="return alert('Chức năng này đang xây dựng, xin vui lòng liên hệ công ty.')">So sánh</a>
                    </li>
                </ul>
                <p class="wishlist-category"><strong>Danh mục:</strong> <a href="#"><?php echo $product['Category']['name']?></a></p>
            </div>
        </div><!--/end row-->
    </div>
</div>
<!--=== End Shop Product ===-->

<!--=== Content Medium ===-->
<div class="content-md container">
    <?php echo $this->element('Home/free_sent') ?>
    <?php echo $this->element('Product/review')?>

</div><!--/end container-->
<!--=== End Content Medium ===-->
<?php
    if(count($listProducts)){
        echo $this->element('Product/product_rl');
    }
?>
<?php echo $this->element('Home/register_mail')?>