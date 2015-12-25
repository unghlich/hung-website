@extends('layout')

@section('content')
<!--=== Breadcrumbs v4 ===-->
<div class="breadcrumbs-v4">
    <div class="container">
        <span class="page-name">Product Filter Page</span>
        <h1>Maecenas <span class="shop-green">enim</span> sapien</h1>
        <ul class="breadcrumb-v4-in">
            <li><a href="">Home</a></li>
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
                <div class="result-category">
                    <h2>{{$category->name()}}</h2>
                    <div class="pull-right">{!! $productList->render() !!}</div>
                </div>
            </div>
            @if ($productList->count())
            <div class="filter-results">
                <div class="row illustration-v2 margin-bottom-30">
                @foreach ($productList as $pKey => $product)
                    <div class="col-md-4">
                        <a href="{{route('product-detail', ['id' => $product->identity(), 'slug' => $product->getSEOSlug()])}}" class="unstyled-link">
                            <div class="product-img product-img-brd">
                                <img class="full-width img-responsive" src="{{$product->thumbnail() ? $product->thumbnail() : '/upload/no-image.jpg'}}" alt="">
                            </div>
                            <div class="product-description product-description-brd margin-bottom-30">
                                <div class="overflow-h margin-bottom-5">
                                    <div class="pull-left">
                                        <h4 class="title-price">{{$product->name()}}</h4>

                                    </div>
                                    <div class="product-price">
                                        <span class="title-price">
                                            <small class="text-danger">{{$product->price()}}
                                            @if($product->price() != 'Liên hệ')
                                                <sup>đ</sup>
                                            @endif
                                            </small>
                                        </span>
                                    </div>
                                </div>
                                {!! $product->renderRateStars() !!}
                            </div>
                        </a>
                    </div>
                @endforeach
                </div>

            </div><!--/end filter resilts-->

            <div class="text-center">
                {!! $productList->render() !!}
            </div><!--/end pagination-->
            @else
                <div class="row" style="min-height: 150px">
                    <br/><br/>
                    <i class="text-muted">Chưa có sản phẩm nào</i>
                </div>
            @endif
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