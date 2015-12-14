<!--=== Slider ===-->
<div class="tp-banner-container">
<div class="tp-banner">
<ul>
    <?php foreach($banners as $banner) : ?>
<!-- SLIDE -->
<li class="revolution-mch-1" data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Slide 1">
    <!-- MAIN IMAGE -->
    <img src="<?php echo $this->webroot.'upload/'.$banner['Banner']['path'];?>"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

    <div class="tp-caption revolution-ch1 sft start"
         data-x="center"
         data-hoffset="0"
         data-y="100"
         data-speed="1500"
         data-start="500"
         data-easing="Back.easeInOut"
         data-endeasing="Power1.easeIn"
         data-endspeed="300">
<!--        The New <br>-->
        <strong><?php echo $banner['Banner']['description']?></strong><br>
<!--        is here-->
    </div>

    <!-- LAYER -->
    <div class="tp-caption sft"
         data-x="center"
         data-hoffset="0"
         data-y="380"
         data-speed="1600"
         data-start="1800"
         data-easing="Power4.easeOut"
         data-endspeed="300"
         data-endeasing="Power1.easeIn"
         data-captionhidden="off"
         style="z-index: 6">
        <a href="<?php echo $banner['Banner']['link']?>" class="btn-u btn-brd btn-brd-hover btn-u-light">Xem ngay</a>
    </div>
</li>
<!-- END SLIDE -->
<?php endforeach?>
</ul>
<div class="tp-bannertimer tp-bottom"></div>
</div>
</div>
<!--=== End Slider ===-->