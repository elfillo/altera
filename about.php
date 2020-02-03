<?php
/*
Template Name: О компании
*/
?>
<?php get_header()?>
<div class="container">
	<section class="about_logo">
		<img src="<?php get_uri('img/logo/logo_big.png')?>" alt="#">
	</section>
	<section class="about_history">
		<div class="box box_img">
			<div class="img">
				<img src="<?php get_uri('img/about_history.jpg')?>" alt="#">
			</div>
			<div class="text">
				<div class="title">История</div>
				<p>Компания Альтера была основана в 1998 году, став одной из первых на рынке проектирования и строительства бассейнов, бань и саун Иркутска.</p>
				<p>В последующие годы охват рынка услуг расширился на всю территорию
					Иркутской области. </p>
			</div>
		</div>
		<div class="box box_column">
			<div class="col">
				<p>
					С 2002 года компания стала работать
					и за пределами области: в Бурятии, Читинской области и даже в Монголии.
				</p>
				<p>Изначально компания занималась исключительно проектированием, строительством и гарантийным обслуживанием бассейнов, бань и саун, а также оптово-розничной продажей сопутствующих товаров, однако уже летом 2003 года к этому списку услуг присоединилось проектирование и строительство интерьерных и уличных фонтанов различной сложности.</p>
			</div>
			<div class="col">
				<p>За всё время работы Компанией Альтера было простроено и реконструировано несколько десятков фонтанов в г. Иркутске и за его пределами.</p>
				<p>Также инженерами компании были подготовлены и реализованы индивидуальные проекты нескольких частных фонтанов.</p>
			</div>
			<div class="col">
				<p class="blue">Компания “Альтера”
					не стоит на месте
					и ассортимент
					предоставляемых
					услуг постоянно
					расширяется. </p>
			</div>
		</div>
	</section>
	<section class="about_service">
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
						<div class="button">Посмотреть все услуги</div>
					</div>
					<div class="service_arrow">
						<img src="<?php get_uri('img/icons/service_swiper_arrow.png')?>" alt="#">
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
					<div class="service_arrow">
						<img src="<?php get_uri('img/icons/service_swiper_arrow.png')?>" alt="#">
					</div>
				</div>
			</div>
		</div>
		<div class="swiper-button-next service_list-swiper_arrow service_list-swiper_arrow--right"></div>
		<div class="swiper-button-prev service_list-swiper_arrow service_list-swiper_arrow--left"></div>
	</section>
	<section class="about_details">
		<div class="row">
			<div class="col col_text">
				<p>Отдельно стоит отметить деятельность компании в области архитектурного проектирования.</p>
				<p>Архитектурное  бюро в компании существует с 2001 года и оказывает как услуги комплексного проектирования с нуля, так и работы по планировке и перепланировке, реконструкции и проведению капитального ремонта.</p>
				<p class="blue">
					Вы можете обратиться
					к нам уже сейчас, и мы
					разработаем для Вас
					индивидуальный проект!
				</p>
				<div class="button">Заказать планировку</div>
			</div>
			<div class="col col_img"><img src="<?php get_uri('img/about_detail.jpg')?>" alt="#"></div>
		</div>
	</section>
	<section class="about_details--count">
		<div class="text">
			<p class="blue">За время своей деятельности сотрудниками компании Альтера было построено и запущено в работу:</p>
			<p>более <span> 400 </span> бассейнов</p>
			<p>а также около <span> 900 </span> саун различных форм и размеров,
				как для частного, так и коммерческого пользования.</p>
			<p>Были сданы «под ключ» оздоровительные комплексы
				общественного использования в городах </p>
		</div>
	</section>
	<section class="about_details--map">
		<div class="box box_map">
			<div class="map"><img src="<?php get_uri('img/about_map.png')?>" alt="#"></div>
			<div class="text">
				Иркутск
				Шелехов
				Байкальск
				Нижнеудинск
				Чита
			</div>
		</div>
		<div class="box box_text">
			Мы гордимся тем фактом, что более <span> 70% </span> объектов
			банно-саунного направления по Байкальскому тракту были
			выполнены сотрудниками нашей компании.
		</div>
	</section>
	<?php require 'parts/views/clients.php'?>
</div>
<?php get_footer()?>
