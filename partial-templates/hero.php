    <!-- Hero -->
    <header class="hero">
        <div class="container">
            <?php
                $hero_heading  = get_field('influ_homepage__heading');
                $hero_sub_text = get_field('influ_homepage__sub-text');
                if ( $hero_heading ): ?>
            <h1 class="hero__heading">
                <span class="hero__heading--clr-1"><?php echo $hero_heading['clr_1']; ?></span>
                <span class="hero__heading--clr-2"><?php echo $hero_heading['clr_2']; ?></span>
                <span class="hero__heading--clr-3"><?php echo $hero_heading['clr_3']; ?></span>
            </h1>

            <?php endif; ?>

            <?php if ( $hero_heading ): ?>
            <p class="hero__text">
                <?php echo $hero_sub_text; ?>
            </p>
            <?php endif; ?>

            <!-- Features -->

            <?php 
                $hero_features = get_field('influ_homepage__features');
                if ($hero_features):
                
            ?>

            <div class="features">
                <!-- Box 1 -->
                <div class="features__box">
                    <img class="features__icon" src="<?php echo $hero_features['feature_1']['the_icon']; ?>" alt="">
                    <h3 class="features__heading"><?php echo $hero_features['feature_1']['the_heading']; ?></h3>
                    <p class="features__text">
                        <?php echo $hero_features['feature_1']['the_text']; ?>
                    </p>
                </div>
                <!-- Box 2 -->
                <div class="features__box">
                    <img class="features__icon" src="<?php echo $hero_features['feature_2']['the_icon']; ?>" alt="">
                    <h3 class="features__heading"><?php echo $hero_features['feature_2']['the_heading']; ?></h3>
                    <p class="features__text">
                        <?php echo $hero_features['feature_2']['the_text']; ?>
                    </p>
                </div>
                <!-- Box 3 -->
                <div class="features__box">
                    <img class="features__icon" src="<?php echo $hero_features['feature_3']['the_icon']; ?>" alt="">
                    <h3 class="features__heading"><?php echo $hero_features['feature_3']['the_heading']; ?></h3>
                    <p class="features__text">
                        <?php echo $hero_features['feature_3']['the_text']; ?>
                    </p>
                </div>
            </div>

        <?php endif; ?>

        </div>
    </header>
