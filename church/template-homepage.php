<?php 
/**
* Template name: Главная страница
*/

get_header('header.php');

?>
	<section class="news" style="background-image: url('<?php bloginfo( 'template_url' ); ?>/assets/image/news-bg.jpg');">
		<div class="news__container">
			<div class="news__top">
				<div class="news__title">Последние новости</div>
				<a href="news.html" class="news__button">Посмотреть все</a>
			</div>

			<?php
			$featured_posts = get_field('news_item');
			if( $featured_posts ): ?>
			    <ul>
			    <?php foreach( $featured_posts as $post ): 
			        setup_postdata($post); ?>
			        <li>
			            <div class="news__item">
				<div class="news__left">
					<div class="news__photo" style="background-image: url('<?php the_field('news_photo') ?>'); "></div>
				</div>
				<div class="news__right">
					<div class="news__title-item"><?php the_field('news_title') ?></div>
					<div class="news__text">
						<?php 
						 the_field('news_preview')
						?>...
					</div>
					<div class="news__bottom">
						<div class="news__date"><?php the_field('news_date') ?></div>
						<div class="news__link-item">
							<a href="<?php the_field('news_link') ?>" class="news__link">Перейти к новости >></a>
						</div>
					</div>
				</div>
			</div>
			        </li>
			    <?php endforeach; ?>
			    </ul>
			    <?php wp_reset_postdata(); ?>
			<?php endif; ?>
		</div>
	</section>

	<?php get_footer( 'footer.php' ); ?>