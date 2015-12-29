<!--=== Header v5 ===-->
<div class="header-v5 header-static">
    <!-- Topbar v3 -->
    <div class="topbar-v3">
        <div class="search-open">
            <div class="container">
                <input type="text" class="form-control" placeholder="Search">
                <div class="search-close"><i class="icon-close"></i></div>
            </div>
        </div>

        <div class="container">
            <div class="row">

                <div class="col-sm-12">
                    <ul class="list-inline right-topbar pull-right">
                        <li><i class="search fa fa-search search-button"></i></li>
                    </ul>
                </div>
            </div>
        </div><!--/container-->
    </div>
    <!-- End Topbar v3 -->

    <!-- Navbar -->
    <div class="navbar navbar-default mega-menu" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{route('home')}}">
                    <img id="logo-header" style="height: 50px" src="/assets/img/logochuan2.gif" alt="Logo">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-responsive-collapse">
                <!-- Nav Menu -->
                <ul class="nav navbar-nav" style="float: right;">
                    <!-- Pages -->
                    <li class="dropdown">
                        <a href="{{route('home')}}" class="dropdown-toggle" data-hover="dropdown" >
                            Trang chủ
                        </a>
                    </li>
                    <!-- End Pages -->

                    <!-- Promotion -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">
                            Sản phẩm
                        </a>
                        <ul class="dropdown-menu">
                            @foreach($categories as $category)
                            <li>
                                <a
                                    href="{{route(
                                        'category-detail',
                                        [ 'cateId' => $category->id, 'slug' => $category->getSEOSlug() ])}}"
                                >{{$category->name()}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <!-- End Promotion -->

                    <!-- Gifts -->
                    <li class="dropdown mega-menu-fullwidth">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">
                            Khuyến mại
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="mega-menu-content">
                                    <div class="container">
                                        <div class="row">

                                        </div><!--/end row-->
                                    </div><!--/end container-->
                                </div><!--/end mega menu content-->
                            </li>
                        </ul><!--/end dropdown-menu-->
                    </li>
                    <!-- End Gifts -->


                    <!-- Clothes -->
                    <li class="dropdown">
                        <a href="{{route('contact')}}" class="dropdown-toggle" data-hover="dropdown" >
                            Liên hệ
                        </a>
                    </li>
                    <!-- End Clothes -->
                </ul>
                <!-- End Nav Menu -->
            </div>
        </div>
    </div>
    <!-- End Navbar -->
</div>
<!--=== End Header v5 ===-->