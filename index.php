<?php
/*
Template Name: Главная
*/
?>
<?php
    $blog_link = get_page_data('blog')->guid;
    $service_link = get_page_data('services')->guid;
    $gallery = get_field('front_gallery', $post->ID, true);
?>
<?php get_header()?>
<div class="container">
<section class="about_altera">
	<div class="box">
		<div class="content">
			<div class="title">Компания “Альтера”</div>
			<p>
				Ваш персональный проводник  в строительстве и обслуживании бассейнов, саун, фонтанов, а также бань и хамамов. Мы делаем жизнь комфортней!
			</p>
			<div class="button button_small open_modal">Связаться</div>
		</div>
	</div>
	<div class="box">
		<div class="logo_big">
			<img src="<?php get_uri('img/logo/altera.png')?>" alt="altera">
		</div>
	</div>
</section>
<section class="service_list">
	<div class="swiper-container service_list-swiper">
		<div class="swiper-wrapper">
			<div class="swiper-slide">
				<div class="service_logo">
					<img src="<?php get_uri('img/venik.png')?>" alt="#">
				</div>
				<div class="service_title">Строительство Бань</div>
				<div class="service_content">
					Традиционная русская баня строится из бруса или бревна. Проектирование и строительство такого рода сооружений имеет множество особенностей, так как имеет вековые традиции.
				</div>
				<div class="service_btn">
					<a href="<?php echo $service_link?>" class="button">Посмотреть все услуги</a>
				</div>
			</div>
			<div class="swiper-slide">
				<div class="service_logo">
					<img src="<?php get_uri('img/venik.png')?>" alt="#">
				</div>
				<div class="service_title">Строительство Бань</div>
				<div class="service_content">
					Традиционная русская баня строится из бруса или бревна. Проектирование и строительство такого рода сооружений имеет множество особенностей, так как имеет вековые традиции.
				</div>
				<div class="service_btn">
					<div class="button">Посмотреть все услуги</div>
				</div>
			</div>
		</div>
	</div>
	<div class="swiper-button-next service_list-swiper_arrow service_list-swiper_arrow--right"></div>
	<div class="swiper-button-prev service_list-swiper_arrow service_list-swiper_arrow--left"></div>
</section>
<section class="portfolio">
	<div class="portfolio_title">
        Посмотрите на то, что мы уже сделали.<br/>
        Эти проекты существуют, и мы гордимся ими!
    </div>
	<div class="portfolio_gallery">
        <?php foreach ($gallery as $item):?>
		<div class="portfolio_gallery--item">
			<img src="<?php echo $item?>" alt="#">
		</div>
        <?php endforeach; unset($item)?>
	</div>
    <div class="portfolio_title">
        И это далеко не все! Переходите в раздел<br/>
        портфолио, чтобы посмотреть наши лучшие работы!
    </div>
    <div class="portfolio_btn">
        <div class="button">Посмотреть портфолио</div>
    </div>
</section>
<section class="blog">
    <div class="blog_logo">
        <img src="<?php get_uri('img/logo/logo_big.png')?>" alt="#">
    </div>
    <div class="blog_text">
        У нашей компании богатая история.
        С ней ты можешь познакомиться
        в разделе “о компании”, а еще
        у нас есть блог, в котором история
        пишется прямо на ваших глазах!
    </div>
    <div class="blog_btn">
        <a href="<?php echo $blog_link?>" class="button">Перейти в блог</a>
    </div>
</section>
<?php require 'parts/views/clients.php'?>
</div>
<?php get_footer()?>


