<?php
/*
Template Name: Акция
Template Post Type: post
*/
?>
<?php the_post(); ?>
<?php get_header(); ?>
<section class="action-item">
    <div class="container">
        <h2><?php the_title(); ?></h2>
        <div class="action-item-content df aic jcsb">
            <div class="action-item-image">
                <img src="<?php echo get_field('image'); ?>">
            </div>
            <div class="action-item-description">
                <?php the_content(); ?>
            </div>
        </div>    
    </div>
</section>
<?php get_footer(); ?>
<?php wp_footer(); ?>