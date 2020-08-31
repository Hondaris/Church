<?php 
/**
* Template name: О храме
*/
?>
<? 
 get_header ('article');
?>

<section class="article" style="background-image: url('<?php bloginfo( 'template_url' ); ?>/assets/image/news-bg.jpg');">
	<div class="article__container">
		<img src="<?php the_field('article_img') ?>" alt="" class="article__img">
		<h1 class="article__title">
			<?php the_field('article_title') ?>
		</h1>
		<div class="article__text">
			<?php the_field('article_text') ?>
		</div>
	</div>
</section>

<?php get_footer( 'footer.php' ); ?>