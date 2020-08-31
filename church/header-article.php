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
		<header class="header-article" style="background-image: url('<?php bloginfo( 'template_url' ); ?>/assets/image/header-bg.jpg');">
			<div class="header-article__container">
				<nav class="header-article__nav">
					<ul class="header-article__nav-list">
						<li class="header-article__nav-item"><a href="http://church/" class="header-article__nav-link">Главная</a></li>
						<li class="header-article__nav-item"><a href="http://church/sample-page/gallery/" class="header-article__nav-link">Галерея</a></li>
						<li class="header-article__nav-item"><a href="http://church/sample-page/news/" class="header-article__nav-link">Новости</a></li>
						<li class="header-article__nav-item"><a href="http://church/sample-page/about-icon/" class="header-article__nav-link">О иконе</a></li>
						<li class="header-article__nav-item"><a href="http://church/sample-page/about-church/" class="header-article__nav-link">О храме</a></li>
					</ul>
				</nav>
				<div class="header-article__title">
					Храм в честь Смоленской иконы Божией Матери
				</div>
			</div>
		</header>