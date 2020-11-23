<?php
get_header();
?>

<section class="banner" style="background:url(<?= NOVUS_IMG . '/prod-banner.jpg' ?>) center / cover no-repeat">
	<div class="container">
		<h1 data-scroll>Barrier-free windows and doors</h1>
		<p data-scroll>
			Windows flood living spaces with light, ensure a clear view and provide protection from the weather and environment. With their timeless design and intelligent technology, Schüco window systems create visual accents. Their excellent thermal insulation also saves on energy costs, increasing the value of your home and conserving the environment.
		</p>
	</div>
</section>

<section class="product-menu">
	<div data-scroll class="container">
		<?php wp_nav_menu( ['theme_location' => 'menu-2'] ); ?>
	</div>
</section>

<?= novus_breadcrumbs(); ?>

<div class="container">
	<p><?= term_description() ?></p>
</div>

<section class="products">
	<div class="container product-wrapper">
		<h2 data-scroll>CỬA ĐI</h2>

		<div data-scroll class="product-slider">
			<?php
			$cua_di = new WP_Query([
				'post_type' => 'product',
				'tax_query' => [
					[
						'taxonomy' => 'prod-category',
						'field'    => 'slug',
						'terms'    => 'cua-di',
					]
				],
			]);
			
			if ( $cua_di->have_posts() ) :
				while ( $cua_di->have_posts() ) : $cua_di->the_post();
			?>

			<div class="item">
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail( 'thumb-370' ) ?>
				</a>
				<a href="<?php the_permalink(); ?>">
					<h3 class="item-title">
						<?= get_the_title(); ?>
					</h3>
				</a>
			</div>

			<?php 
				endwhile;
			endif;
			wp_reset_postdata(  );
			?>
		</div>
	</div>
</section>

<section class="products">
	<div class="container product-wrapper">
		<h2 data-scroll>CỬA SỔ</h2>

		<div data-scroll class="product-slider">
			<?php
			$cua_so = new WP_Query([
				'post_type' => 'product',
				'tax_query' => [
					[
						'taxonomy' => 'prod-category',
						'field'    => 'slug',
						'terms'    => 'cua-so',
					]
				],
			]);
			
			if ( $cua_so->have_posts() ) :
				while ( $cua_so->have_posts() ) : $cua_so->the_post();
			?>

			<div class="swiper-slide item">
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail( 'thumb-370' ) ?>
				</a>
				<a href="<?php the_permalink(); ?>">
					<?php $title = explode( '.', get_the_title() ); ?>
					<h3 class="item-title">
						<?= $title[0] ?>
						<span><?= $title[1] ?></span>
					</h3>
				</a>
			</div>

			<?php 
				endwhile;
			endif;
			wp_reset_postdata(  );
			?>
		</div>
	</div>
</section>

<section class="video">
	<div class="container">
		<h3 data-scroll>Product highlight: Barrier-free windows and doors</h3>
		<p data-scroll>An attractive design which enables an effortless transition between inside and outside</p>

		<video data-scroll autoplay muted loop src="<?= NOVUS_IMG . '/video.mp4' ?>"></video>

		<p data-scroll>Integrating a particularly flat threshold into the Schüco window systems provides greater ease of use in comparison to conventional thresholds. This allows you to create your forever home by taking your future needs into account.</p>
	</div>
</section>

<?php
get_footer();