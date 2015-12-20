<!--=== Breadcrumbs v4 ===-->
<div class="breadcrumbs-v4">
    <div class="container">
        <span class="page-name">Product Filter Page</span>
        <h1>Maecenas <span class="shop-green">enim</span> sapien</h1>
        <ul class="breadcrumb-v4-in">
            <li><a href="index.html">Home</a></li>
            <li><a href="">Product</a></li>
            <li class="active">Product Filter Page</li>
        </ul>
    </div><!--/end container-->
</div>
<!--=== End Breadcrumbs v4 ===-->

<!--=== Content Part ===-->
<div class="content container">
<div class="row">
<?php echo $this->element('Product/filter_product')?>

<div class="col-md-9">
<div class="row margin-bottom-5">
    <div class="col-sm-4 result-category">
        <?php if(isset($category)) :?>
            <h2><?php echo $category['Category']['name']?></h2>
        <?php endif?>
<!--        <small class="shop-bg-red badge-results">45 Results</small>-->
    </div>
    <?php echo $this->element('Product/sort_product_top')?>
</div><!--/end result category-->

<div class="filter-results">
<div class="row illustration-v2 margin-bottom-30">
    <?php foreach($products as $product):?>
    <div class="col-md-4">
        <div class="product-img product-img-brd">
            <a href="#"><img class="full-width img-responsive" src="<?php echo $this->webroot.'upload/'.$product['Product']['avatar'];?>" alt=""></a>
            <a class="product-review" href="<?php echo Router::url(array('controller'=>'products','action'=>'view','slug'=>$product['Product']['slug']))?>">Xem chi tiết</a>
            <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
            <?php if($product['Product']['hot_flag']) : ?>
            <div class="shop-rgba-dark-green rgba-banner">Hot</div>
            <?php endif?>
        </div>
        <div class="product-description product-description-brd margin-bottom-30">
            <div class="overflow-h margin-bottom-5">
                <div class="pull-left">
                    <h4 class="title-price"><a href="/products/view"><?php echo $product['Product']['name']?></a></h4>
<!--                    <span class="gender text-uppercase">Giá</span>-->
<!--                    <span class="gender">Giá gốc</span>-->
                </div>
                <div class="product-price">
                    <span class="title-price"><?php echo $product['Product']['price']?>.000 vnđ</span>
<!--                    <span class="title-price line-through">$95.00</span>-->
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

</div><!--/end filter resilts-->

<div class="text-center">
    <ul class="pagination pagination-v2">
        <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
        <li class="active"><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
    </ul>
</div><!--/end pagination-->
</div>
</div><!--/end row-->
</div><!--/end container-->
<!--=== End Content Part ===-->

<?php echo $this->element('Home/register_mail')?>