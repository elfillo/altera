<?php
/*
Template Name: Портфолио внутренняя
Template Post Type: post_portfolio
*/
?>
<?php get_header()?>
	<div class="container">
		<section>
			<?php echo apply_filters('the_content', $post->post_content);?>
		</section>
	</div>
<?php get_footer()?>