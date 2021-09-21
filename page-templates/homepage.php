<?php
/* Template Name: Homepage */
get_header(); 
?>
    <!-- Hero -->
    <?php get_template_part( 'partial-templates/hero'); ?>
    <!-- Platform section -->
    <?php get_template_part( 'partial-templates/platform'); ?>
    <!-- Brand section -->
    <?php get_template_part( 'partial-templates/brand'); ?>
    <!-- One Stop section -->
    <?php get_template_part( 'partial-templates/one-stop'); ?>

<?php get_footer(); ?>