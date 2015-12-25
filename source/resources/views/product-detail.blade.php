@extends('layout')

@section('content')
        <!--=== Shop Product ===-->
<div class="shop-product">

    <div class="container">
        <div class="row">
            <div class="col-md-6 md-margin-bottom-50">
                <div class="ms-showcase2-template">
                    <!-- Master Slider -->
                    <div class="master-slider ms-skin-default" id="masterslider">
                        <div class="ms-slide">
                            @foreach($product->images() as $image)
                                <img class="ms-thumb img-responsive" src="{{$image}}" alt="thumb">
                            @endforeach
                        </div>
                    </div>
                    <!-- End Master Slider -->
                </div>
            </div>

            <div class="col-md-6">
                <div class="shop-product-heading">
                    <h2>{{$product->name}}</h2>
                    <ul class="list-inline shop-product-social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    </ul>
                </div><!--/end shop product social-->

                <ul class="list-inline product-ratings margin-bottom-30">


                </ul><!--/end shop product ratings-->

                <p><strong>{{$product->descriptionTitle()}}</strong></p><br>
                <p>{{$product->descriptionContent()}}</p><br>
                <ul class="list-inline shop-product-prices margin-bottom-30">
                    <li class="shop-red">Giá: {{$product->price()}}
                        @if($product->price() != 'Liên hệ')
                            <sup>đ</sup>
                        @endif
                    </li>

                </ul><!--/end shop product prices-->


            </div>
        </div><!--/end row-->
    </div>
</div>
<!--=== End Shop Product ===-->
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
            @foreach($relatedProduct as $productRelate)

            <li class="item">
                <a href="{{route('product-detail', ['id' => $productRelate->identity(), 'slug' => $productRelate->getSEOSlug()])}}" class="unstyled-link">
                    <img class="img-responsive" src="{{$productRelate->thumbnail() ? $productRelate->thumbnail() : '/upload/no-image.jpg'}}" alt="">
                <div class="product-description-v2">
                    <div class="margin-bottom-5">
                        <h4 class="title-price">
                                {{$productRelate->name()}}
                       </h4>
                        <span class="title-price">{{$productRelate->price()}}
                            @if($product->price() != 'Liên hệ')
                                <sup>đ</sup>
                            @endif
                        </span>
                    </div>
                    {!! $product->renderRateStars() !!}
                </div>
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</div>
<!--=== End Illustration v2 ===-->
@stop