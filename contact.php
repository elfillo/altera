<?php
/*
Template Name: Контакты
*/
?>
<?php get_header()?>
<div class="contact" id="map_big">
	<div class="container">
		<div class="contact_info">
			<div class="title">Контакты:</div>
			<div class="text">
				<?php echo apply_filters('the_content', $post->post_content);?>
			</div>
		</div>
	</div>
</div>
<div class="contact_map--mobile"></div>
<?php get_footer()?>