<?php
/*
Template Name: Акция
Template Post Type: post_sale
*/
?>
<?php get_header()?>
<div class="container">
	<section>
		<?php echo apply_filters('the_content', $post->post_content);?>
	</section>
</div>
<?php get_footer()?>
