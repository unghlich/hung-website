@extends('layout')

@section('content')
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

        <div class="col-md-12">
            <div class="row margin-bottom-5">
                <div class="col-sm-4 result-category">
                    <h2>Cốc Sứ </h2>
                </div>
                {{--<div class="col-sm-8 hidden">--}}
                    {{--<ul class="list-inline clear-both">--}}
                        {{--<li class="grid-list-icons">--}}
                            {{--<a href="shop-ui-filter-list.html"><i class="fa fa-th-list"></i></a>--}}
                            {{--<a href="shop-ui-filter-grid.html"><i class="fa fa-th"></i></a>--}}
                        {{--</li>--}}
                        {{--<li class="sort-list-btn">--}}
                            {{--<h3>Sắp xếp theo :</h3>--}}
                            {{--<div class="btn-group">--}}
                                {{--<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">--}}
                                    {{--Popularity <span class="caret"></span>--}}
                                {{--</button>--}}
                                {{--<ul class="dropdown-menu" role="menu">--}}
                                    {{--<li><a href="#">All</a></li>--}}
                                    {{--<li><a href="#">Best Sales</a></li>--}}
                                    {{--<li><a href="#">Top Last Week Sales</a></li>--}}
                                    {{--<li><a href="#">New Arrived</a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                        {{--<li class="sort-list-btn">--}}
                            {{--<h3>Show :</h3>--}}
                            {{--<div class="btn-group">--}}
                                {{--<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">--}}
                                    {{--20 <span class="caret"></span>--}}
                                {{--</button>--}}
                                {{--<ul class="dropdown-menu" role="menu">--}}
                                    {{--<li><a href="#">All</a></li>--}}
                                    {{--<li><a href="#">10</a></li>--}}
                                    {{--<li><a href="#">5</a></li>--}}
                                    {{--<li><a href="#">3</a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</div></div><!--/end result category-->--}}

            <div class="filter-results">
                <div class="row illustration-v2 margin-bottom-30">
                <?php foreach ($productList as $pKey => $product){  ?>
                    <div class="col-md-4">
                        <div class="product-img product-img-brd">
                            <a href="#"><img class="full-width img-responsive" src="<?php echo $product['image1']?>" alt=""></a>
                            <a class="product-review" href="/chi-tiet-san-pham/coc-su-1">Xem chi tiết</a>

                            <div class="shop-rgba-dark-green rgba-banner">Hot</div>
                        </div>
                        <div class="product-description product-description-brd margin-bottom-30">
                            <div class="overflow-h margin-bottom-5">
                                <div class="pull-left">
                                    <h4 class="title-price"><a href="/products/view"><?php echo $product['name']?></a></h4>

                                </div>
                                <div class="product-price">
                                    <span class="title-price"><?echo $product['price']?></span>
                                </div>
                            </div>
                            <ul class="list-inline product-ratings">
                                <?php for ($i = 1; $i <= $product['ratingPoints']; $i++){?>
                                <li><i class="rating-selected fa fa-star"></i></li>
                                <?php }
                                    for ($i = 5; $i > $product['ratingPoints']; $i--){?>
                                <li><i class="rating fa fa-star"></i></li>
                                <?php } ?>
                                <li class="like-icon"><a data-original-title="Add to wishlist" data-toggle="tooltip" data-placement="left" class="tooltips" href="#"><i class="fa fa-heart"></i></a></li>
                            </ul>
                        </div>
                    </div>
                <?php }?>
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

<!--=== Shop Suvbscribe ===-->
<div class="shop-subscribe">
    <div class="container">
        <div class="">
            <div class="col-md-7 md-margin-bottom-20">
                <h2>Đăng ký nhận tin khuyến mại <strong>mới nhất</strong></h2>
            </div>
            <div class="col-md-4">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Email của bạn...">
                        <span class="input-group-btn">
                            <button class="btn" type="button" onclick="return alert('Rất xin lỗi vì chức năng này chưa hoàn thiện')"><i class="fa fa-envelope-o"></i></button>
                        </span>
                </div>
            </div>
        </div>
    </div><!--/end container-->
</div>
<!--=== End Shop Suvbscribe ===-->
@stop