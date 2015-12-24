<ul class="list-inline product-ratings">
    <?php for ($i = 1; $i <= $point; $i++){?>
    <li><i class="rating-selected fa fa-star"></i></li>
    <?php }
    for ($i = 5; $i > $point; $i--){?>
    <li><i class="rating fa fa-star"></i></li>
    <?php } ?>
</ul>
