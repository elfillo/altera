<?php
/*
Template Name: Услуга
Template Post Type: post_service
*/
?>
<?php
    $service_gallery = get_field('service_gallery', $post->ID);
    $service_sale_slider = get_field('service_sale_slider', $post->ID);
    $service_title_before_content = get_field('service_title_before_content', $post->ID);
    $service_title_before_best = get_field('service_title_before_best', $post->ID);
    if(wp_get_post_tags($post->ID)){
	    $tag_slug = wp_get_post_tags($post->ID)[0]->slug;
	    $portfolio = get_posts([
		    'post_type' => 'post_portfolio',
		    'numberposts' => 6,
		    'tag' =>  $tag_slug
	    ]);
    }
?>
<?php get_header()?>
	<div class="container">
		<section class="service_about">
			<div class="service_about--img"><img src="<?php echo get_the_post_thumbnail_url($post)?>" alt="#"></div>
			<div class="service_about--title"><?php echo $post->post_title?></div>
			<div class="service_about--description"><?php echo $post->post_excerpt?></div>
			<div class="service_about--btn open_modal"><div class="button">Заказать</div></div>
		</section>
	</div>
	<section class="service_gallery">
        <?php foreach ($service_gallery as $item):?>
		<div class="service_gallery--item"><img src="<?php echo $item?>" alt="#"></div>
        <?php endforeach; unset($item)?>
	</section>
	<div class="container">
		<section class="service_details">
			<div class="service_details--title"><?php echo $service_title_before_content?></div>
			<div class="service_details--content">
				<?php echo apply_filters('the_content', $post->post_content);?>
			</div>
		</section>
		<?php if(isset($portfolio)):?>
            <section class="service_best-projects">
                <div class="service_best-projects--title"><?php echo $service_title_before_best?></div>
                <div class="service_best-projects--list">
                        <?php foreach ($portfolio as $item):?>
                            <div class="item">
                                <div class="img"><img src="<?php echo get_the_post_thumbnail_url($item)?>" alt="#"></div>
                                <div class="title"><?php echo $item->post_title?></div>
                                <div class="short_desc"><?php echo $item->post_excerpt?></div>
                            </div>
                        <?php endforeach; unset($item)?>
                </div>
            </section>
		<?php endif;?>
	</div>
	<section class="service_advertising">
		<div class="swiper-container service_advertising--swiper">
			<div class="swiper-wrapper">
                <?php foreach ($service_sale_slider as $item):?>
				    <div class="swiper-slide"><img src="<?php echo $item?>" alt="#"></div>
                <?php endforeach; unset($item)?>
			</div>
			<div class="swiper-pagination"></div>
		</div>
	</section>
    <div class="container">
        <section class="service_footer">
            <div class="box box_logo">
                <div class="logo"><img src="<?php get_uri('img/logo/logo_big.png')?>" alt="#"></div>
                <div class="text">
                    У нашей компании богатая история.
                    С ней ты можешь познакомиться
                    в разделе “о компании”, а еще
                    у нас есть блог, в котором история
                    пишется прямо на ваших глазах!
                </div>
                <div class="btn open_modal"><div class="button">Заказать</div></div>
            </div>
            <div class="box box_img"><img src="<?php get_uri('img/service/footer.png')?>" alt="#"></div>
        </section>
    </div>
<?php get_footer()?>