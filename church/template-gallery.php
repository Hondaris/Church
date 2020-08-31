<?php 
/**
* Template name: Галерея
*/
?>
<? 
 get_header ('article');
?>
		<section class="gallery" style="background-image: url('<?php bloginfo( 'template_url' ); ?>/assets/image/news-bg.jpg');">
			<div class="gallery__container">
				<div class="gallery__title">
					Галерея
				</div>
				<div class="gallery__wrap">
					<?php the_field('gallery') ?>
				</div>
			</div>
		</section>

<?php get_footer('footer.php'); ?>