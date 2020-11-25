<?php
get_header();

$cat_banner = rwmb_meta( 'banner', [ 'object_type' => 'term' ], get_queried_object()->term_id );
$cat_title  = rwmb_meta( 'title', [ 'object_type' => 'term' ], get_queried_object()->term_id );
$cat_des    = rwmb_meta( 'description', [ 'object_type' => 'term' ], get_queried_object()->term_id );
?>

<section class="banner" style="background:url(<?= $cat_banner ?>) center / cover no-repeat">
	<div class="container">
		<h1><?= $cat_title ?></h1>
		<p><?= $cat_des ?></p>
	</div>
</section>

<section class="product-menu">
	<div class="container">
		<?php wp_nav_menu( ['theme_location' => 'menu-2'] ); ?>
	</div>
</section>

<?= novus_breadcrumbs(); ?>

<div class="container">
	<p><?= term_description() ?></p>
</div>

<?php
$ids = get_term_children( get_queried_object_id(), get_queried_object()->taxonomy ) ?: [get_queried_object()->term_id];
foreach ( $ids as $term_id ) :
	$term = get_term( $term_id );
?>

<section class="products">
	<div class="container product-wrapper">
		<h2>
			<?= $term->name ?>
			<img src="<?= NOVUS_IMG . '/arrow.gif' ?>">
		</h2>

		<div data-scroll class="product-slider">
			<?php
			$cua_di = new WP_Query([
				'post_type' => 'product',
				'tax_query' => [
					[
						'taxonomy' => 'prod-category',
						'field'    => 'slug',
						'terms'    => [$term->slug],
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
						<?= get_the_title() ?>
						<span><?= rwmb_meta( 'brief' ); ?></span>
					</h3>
				</a>
			</div>

			<?php 
				endwhile;
			endif;
			?>
		</div>
	</div>
</section>

<?php endforeach; ?>

<section class="video">
	<div class="container">
		<h3>Product highlight: Barrier-free windows and doors</h3>
		<p>An attractive design which enables an effortless transition between inside and outside</p>

		<video autoplay muted loop src="<?= NOVUS_IMG . '/video.mp4' ?>"></video>

		<p>Integrating a particularly flat threshold into the Schüco window systems provides greater ease of use in comparison to conventional thresholds. This allows you to create your forever home by taking your future needs into account.</p>
	</div>
</section>

<?php
get_footer();