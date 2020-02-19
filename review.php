<?php
/*
Template Name: Отзывы
*/
?>
<?php get_header()?>
	<section class="container container-review">
		<?php echo apply_filters('content', $post->post_content)?>
	</section>
<?php get_footer()?>
