    <!-- Platform section -->
<?php 
    $platform_heading = get_field('influ_homepage__platform__heading'); 
    $platform_img = get_field('influ_homepage__platform__img'); 
?>

    <section class="platforms">
        <div class="container">
            <h2><?php echo $platform_heading; ?></h2>
            <img src="<?php echo $platform_img; ?>" alt="Platform image">
        </div>
    </section>