    <!-- Brand section -->
    <?php 
        $brand_heading = get_field('influ_homepage__brand__heading');
        $brand_heading_char = get_field('influ_homepage__brand__heading__char');
        $brand_cta = get_field('influ_homepage__brand__cta');
        $brand_img = get_field('influ_homepage__braninflu_homepage__brand__imgd__cta');
    ?>
    <section class="brand">
        <div class="container">
            <div class="brand__inner">
                <img class="brand__img" src="<?php echo $brand_img; ?>" alt="">
                <div class="brand__content">
                    <h2><?php echo $brand_heading; ?> <span><?php echo $brand_heading_char; ?></span></h2>
                    <a href="<?php echo $brand_cta['url']; ?>" class="brand__btn"><?php echo $brand_cta['title']; ?></a>
                </div>
            </div>
        </div>
    </section>