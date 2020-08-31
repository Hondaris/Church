<footer class="footer">
		<div class="footer__container">
			<div class="footer__links">
				<div class="footer__list-title">Ссылки</div>
				<ul class="footer__links-list">
					<li class="footer__list-item"><span class="lnr lnr-envelope">&#xe818</span> Наша почта: <a href="mailto:<?php the_field('footer_mail') ?>" class="footer__link"><?php the_field('footer_mail') ?></a></li>
					<li class="footer__list-item">Мы в соц сетях: <a href="#" class="footer__link"></a></li>
					<li class="footer__list-item"><span class="lnr lnr-phone-handset">&#xe830</span> Номер телефона:<a href="tel:<?php the_field('footer_number') ?>" class="footer__link"><?php the_field('footer_number') ?></a></li>
				</ul>
			</div>
			<div class="footer__nav">
				<div class="footer__list-title">Навигация</div>
				<ul class="footer__links-list">
					<li class="footer__list-item footer__list-item--nav"><a href="http://church/" class="footer__link"><span class="lnr lnr-home">&#xe800</span> Главная</a></li>
					<li class="footer__list-item footer__list-item--nav"><a href="http://church/sample-page/gallery/" class="footer__link"><span class="lnr lnr-picture">&#xe827</span> Галерея</a></li>
					<li class="footer__list-item footer__list-item--nav"><a href="http://church/sample-page/news/" class="footer__link"><span class="lnr lnr-pushpin">&#xe832</span> Новости
</a></li>
					<li class="footer__list-item footer__list-item--nav"><a href="http://church/sample-page/about-icon/" class="footer__link"><span class="lnr lnr-bookmark">&#xe829</span> О иконе</a></li>
					<li class="footer__list-item footer__list-item--nav"><a href="http://church/sample-page/about-church/" class="footer__link"><span class="lnr lnr-bookmark">&#xe829</span> О храме</a></li>
				</ul>
			</div>
			<div class="footer__icon">
				<div class="footer__icon-img" style="background-image: url('<?php the_field('icon_img') ?>');"></div>
				<div class="footer__icon-title">Икона Смоленской Божией Матери<br>
					Одигитрия
				</div>
			</div>
		</div>
	</footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<?php wp_footer(); ?>
</body>
</html>