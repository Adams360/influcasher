    <!-- One Stop section -->
    <?php 
        $one_stop_heading = get_field('influ_homepage__one-stop__heading');
        $one_stop_text = get_field('influ_homepage__one-stop__text');
        $one_stop_img= get_field('influ_homepage__one-stop__img');

    ?>

    <section class="one-stop">
        <div class="container">
            <div class="one-stop__inner">
                <div class="one-stop__content">
                    <h2>
                        <?php echo $one_stop_heading; ?>
                    </h2>
                    <p>
                        <?php echo $one_stop_text; ?>
                    </p>
                </div>
                <img class="one-stop__img" src="<?php echo $one_stop_img; ?>" alt="">
            </div>
        </div>
    </section>