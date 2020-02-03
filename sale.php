<?php
/*
Template Name: Акции
*/
?>
<?php
    $load_count = 6;
    $post_type = 'post_sale';
    $count = wp_count_posts('post_sale')->publish;

    $sale_slider = get_field('sale_slider', $post->ID);
    $sale_list = get_posts([
	    'post_type' => $post_type,
	    'numberposts' => $load_count,
    ]);
?>
<?php get_header()?>
	<section class="service_advertising">
		<div class="swiper-container service_advertising--swiper">
			<div class="swiper-wrapper">
                <?php foreach ($sale_slider as $item):?>
				    <div class="swiper-slide"><img src="<?php echo $item?>" alt="#"></div>
                <?php endforeach; unset($item)?>
			</div>
			<div class="swiper-pagination"></div>
		</div>
	</section>
	<div class="container">
        <div class="sale-page--list more-box">
			<?php foreach ($sale_list as $item): ?>
                <a href="<?php echo $item->guid?>" class="item" itemid="<?php echo $item->ID?>">
                    <div class="img"><img src="<?php echo get_the_post_thumbnail_url($item)?>" alt="#"></div>
                    <div class="text">
                        <div class="title"><?php echo $item->post_title?></div>
                        <div class="short_desc"><?php echo $item->post_excerpt?></div>
                    </div>
                </a>
			<?php endforeach;?>
        </div>
	</div>
    <?php if($count > $load_count):?>
        <section class="container">
            <div class="button button_show-more"
                 onclick="showMorePost('<?php echo $load_count?>', '<?php echo $count?>', '<?php echo $post_type?>')"
            >
                Показать еще
            </div>
        </section>
    <?php endif;?>
<?php get_footer()?>