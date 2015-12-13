<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>Quà tặng thông minh</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, minimum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="google-site-verification" content="L51uEmRKQMX9YAit-d7_jslkfdrJlQooCKEb2YmbqbU" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.gif">

    <!-- Web Fonts -->
    <link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="/assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/shop.style.css">

    <!-- CSS Header and Footer -->
    <link rel="stylesheet" href="/assets/css/headers/header-v5.css">
    <link rel="stylesheet" href="/assets/css/footers/footer-v4.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="/assets/plugins/animate.css">
    <link rel="stylesheet" href="/assets/plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="/assets/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/plugins/scrollbar/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="/assets/plugins/owl-carousel/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="/assets/plugins/revolution-slider/rs-plugin/css/settings.css">

    <!-- CSS Theme -->
    <link rel="stylesheet" href="/assets/css/theme-colors/default.css" id="style_color">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="/assets/css/custom.css">

    <!-- JS Global Compulsory -->
    <script src="/assets/plugins/jquery/jquery.min.js"></script>
    <script src="/assets/plugins/jquery/jquery-migrate.min.js"></script>
    <script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

</head>

<body class="header-fixed">
<div class="wrapper">
<?php echo $this->element('header')?>

<?php echo $this->Flash->render(); ?>

<?php echo $this->fetch('content'); ?>

<?php echo  $this->element('footer')?>
</div><!--/wrapper-->

<!-- JS Implementing Plugins -->
<script src="/assets/plugins/back-to-top.js"></script>
<script src="/assets/plugins/smoothScroll.js"></script>
<script src="/assets/plugins/jquery.parallax.js"></script>
<script src="/assets/plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>
<script src="/assets/plugins/scrollbar/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="/assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="/assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<!-- JS Customization -->
<script src="/assets/js/custom.js"></script>
<!-- JS Page Level -->
<script src="/assets/js/shop.app.js"></script>
<script src="/assets/js/plugins/owl-carousel.js"></script>
<script src="/assets/js/plugins/revolution-slider.js"></script>
<script>
    jQuery(document).ready(function() {
        App.init();
        App.initScrollBar();
        App.initParallaxBg();
        OwlCarousel.initOwlCarousel();
        RevolutionSlider.initRSfullWidth();
    });
</script>
<!--[if lt IE 9]>
<script src="/assets/plugins/respond.js"></script>
<script src="/assets/plugins/html5shiv.js"></script>
<script src="/assets/js/plugins/placeholder-IE-fixes.js"></script>
<![endif]-->

</body>
</html> 