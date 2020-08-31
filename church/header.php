<!DOCTYPE html>
<html lang="ru">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta charset="UTF-8">
	<title><?php bloginfo( 'name' ); ?></title>
	<?php wp_head(); ?>
</head>
<body>
	<header class="header" style="background-image: url('<?php bloginfo( 'template_url' ); ?>/assets/image/header-bg.jpg');">
		<div class="header__container">
			<nav class="header__nav">
				<ul class="header__nav-list">
					<li class="header__nav-item"><a href="http://church/" class="header__nav-link">Главная</a></li>
					<li class="header__nav-item"><a href="http://church/sample-page/gallery/" class="header__nav-link">Галерея</a></li>
					<li class="header__nav-item"><a href="http://church/sample-page/news/" class="header__nav-link">Новости</a></li>
					<li class="header__nav-item"><a href="http://church/sample-page/about-icon/" class="header__nav-link">О иконе</a></li>
					<li class="header__nav-item"><a href="http://church/sample-page/about-church/" class="header__nav-link">О храме</a></li>
				</ul>
			</nav>
			<div class="header__address">
				<?php the_field('organization_name') ?>
			</div>
			<div class="header__icon" style="background-image: url('<?php the_field('header_icon') ?>');">
		
			</div>
			<div class="header__title">
				<?php the_field('header_title') ?>
			</div>
			<div class="header__photo header__photo--1" style="background-image: url('<?php the_field('header_photo_1') ?>');"></div>
			<div class="header__photo header__photo--2" style="background-image: url('<?php the_field('header_photo_2') ?>');"></div>
			<div class="header__photo header__photo--3" style="background-image: url('<?php the_field('header_photo_3') ?>');"></div>
			<div class="header__photo header__photo--4" style="background-image: url('<?php the_field('header_photo_4') ?>');"></div>
			<div class="header__photo header__photo--5" style="background-image: url('<?php the_field('header_photo_5') ?>');"></div>
			<div class="header__photo header__photo--6" style="background-image: url('<?php the_field('header_photo_6') ?>');"></div>
		</div>
	</header>