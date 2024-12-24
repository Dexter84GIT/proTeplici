<?php /*
Template Name: Акции
*/
get_header();
?>
<section class="actions">
    <div class="container">
        <h3 class="section-title">Акции</h3>
        <div class="action-content df aifs">
        <?php
global $post;

$myposts = get_posts( [
	'posts_per_page' => -99,
	'category_name' => 'action',
	'post_type' => 'post',
] );

foreach( $myposts as $post ){
	setup_postdata( $post );
	?>
	<div class="action-block">
		<a href="<?php the_permalink(); ?>">
            <div class="action-prewiew">
                <div class="action-image">
                    <img src="<?php echo get_field('image'); ?>" alt="image">
                </div>  
                <p class="action-name">
                    <?php the_title(); ?>
                </p>
            </div>
        </a>    
	</div>
	<?php
}
wp_reset_postdata();
?>
        </div>
    </div>
</section>
<?php get_footer(); ?>
<?php wp_footer(); ?>