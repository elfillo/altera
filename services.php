<?php
/*
Template Name: Услуги
*/
?>
<?php get_header()?>
<?php
	$services = get_posts([
	        'post_type' => 'post_service',
            'numberposts' => 999,
            'orderby'     => 'date',
		    'order'       => 'ASC'
    ]);
?>
<div class="container">
	<section class="services_title">Услуги</section>
	<section class="services_list">
		<?php foreach ($services as $service):?>
			<div class="services_list--item">
				<div class="img"><img src="<?php echo get_the_post_thumbnail_url($service)?>" alt="#"></div>
				<div class="title"><?php echo $service->post_title?></div>
				<div class="text"><?php echo $service->post_excerpt?></div>
				<a href="<?php echo $service->guid?>" class="btn"><div class="button">Перейти</div></a>
			</div>
		<?php endforeach;?>
		<div class="services_list--logo"><img src="<?php get_uri('img/logo/logo_big.png')?>" alt="#"></div>
	</section>
</div>
<?php get_footer()?>
