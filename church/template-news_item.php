<?php 
/**
* Template name: Новость
*/
?>
<? 
 get_header ('article');
?>
		<section class="article" style="background-image: url('<?php bloginfo( 'template_url' ); ?>/assets/image/news-bg.jpg');">
			<div class="article__container">
				<?php
			$featured_posts = get_field('news_item');
			if( $featured_posts ): ?>
			    <ul>
			    <?php foreach( $featured_posts as $post ): 
			        setup_postdata($post); ?>
			        <li>
			            <img src="<?php the_field('news_photo') ?>" alt="" class="article__img">
							<h1 class="article__title">
								<?php the_field('news_title') ?>
							</h1>
							<div class="article__text">
								<?php 
								 the_field('news_text')
								?>
							</div>
			        </li>
			    <?php endforeach; ?>
			    </ul>
			    <?php wp_reset_postdata(); ?>
			<?php endif; ?>
			</div>
		</section>


<?php get_footer( 'footer.php' ); ?>