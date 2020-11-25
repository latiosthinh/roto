<?php
get_header();

while ( have_posts() ) :
	the_post();
?>

<section class="banner" style="background:url(<?= NOVUS_IMG . '/prod-banner.jpg' ?>) center / cover no-repeat">
	<div class="container">
		<h1>Barrier-free windows and doors</h1>
		<p>
			Windows flood living spaces with light, ensure a clear view and provide protection from the weather and environment. With their timeless design and intelligent technology, Schüco window systems create visual accents. Their excellent thermal insulation also saves on energy costs, increasing the value of your home and conserving the environment.
		</p>
	</div>
</section>

<section class="product-menu">
	<div class="container">
		<?php wp_nav_menu( ['theme_location' => 'menu-2'] ); ?>
	</div>
</section>

<?= novus_breadcrumbs(); ?>

<?php $images = rwmb_meta( 'gallery', ['size' => 'thumbnail'] ); ?>
<section class="product-content">
	<div class="container">
		<div class="row">
			<?php if ( $images ) : ?>
			<div class="col-5">
				<div class="gallery-product">
					<?php foreach ( $images as $img ) : ?>
						<img class="item" src="<?= $img['sizes']['thumb-470'] ? $img['sizes']['thumb-470']['url'] : $img['full_url']; ?>">
					<?php endforeach; ?>
				</div>
				
				<div class="gallery-thumbs">
					<?php foreach ( $images as $img ) : ?>
						<img class="item" src="<?= $img['sizes']['thumb-170'] ? $img['sizes']['thumb-170']['url'] : $img['full_url']; ?>">
					<?php endforeach; ?>
				</div>
			</div>
			<?php endif; ?>

			<div class="col-6 single-post-content">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</section>

<section class="product-related products">
	<div class="container product-wrapper">
		<h2>
			Sản phẩm tương tự

			<img src="<?= NOVUS_IMG . '/arrow.gif' ?>">
		</h2>

		<div class="product-slider">
			<?php
			$cua_di = new WP_Query([
				'post_type'      => 'product',
				'posts_per_page' => 8,
				'post__not_in'   => [ get_the_ID() ],
				'order'          => 'rand'
			]);
			
			if ( $cua_di->have_posts() ) :
				while ( $cua_di->have_posts() ) : $cua_di->the_post();
			?>

			<div class="item">
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail( 'thumb-370' ) ?>
				</a>
				<a>
					<h3 class="item-title"><?php the_title(); ?></h3>
				</a>
			</div>

			<?php 
				endwhile;
			endif;
			?>
		</div>
	</div>
</section>

<?php
endwhile;
get_footer();