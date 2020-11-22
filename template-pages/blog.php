<?php
/**
 * Template Name: Blog
 */
get_header();
?>

<section class="tin-tuc-chung">
	<div class="container">
		<h2 class="section-title">Tin tức chung</h2>

		<div class="row">
			<div class="col-4">
				<img class="feature-img" src="<?= NOVUS_IMG . '/products/abc.jpg' ?>">
			</div>

			<div class="col-8">
				<div class="row">
				<?php
				$ttc = new WP_Query([
					'post_type'      => 'post',
					'posts_per_page' => 4,
					'tax_query'      => [
						[
							'taxonomy' => 'category',
							'field'    => 'slug',
							'terms'    => 'tin-tuc-chung',
						]
					],
				]);
				
				if ( $ttc->have_posts() ) :
					while ( $ttc->have_posts() ) : $ttc->the_post();
				?>

				<div class="col-6 item">
					<a href="<?php the_permalink() ?>">
						<?php the_post_thumbnail( 'thumb-170' ) ?>
					</a>

					<div class="item-content">
						<a href="<?php the_permalink() ?>">
							<h3><?php the_title() ?></h3>
							<span class="slash"></span>
							<?php the_excerpt(); ?>

							<?php novus_posted_on(); ?>
						</a>
					</div>
				</div>

				<?php 
					endwhile;
				endif;
				?>
				</div>
			</div>

			<?php
				$ttc = new WP_Query([
					'post_type' => 'post',
					'offset'    => 4,
					'tax_query' => [
						[
							'taxonomy' => 'category',
							'field'    => 'slug',
							'terms'    => 'tin-tuc-chung',
						]
					],
				]);
				
				if ( $ttc->have_posts() ) :
					while ( $ttc->have_posts() ) : $ttc->the_post();
				?>

				<div class="col-4 item">
					<a href="<?php the_permalink() ?>">
						<?php the_post_thumbnail( 'thumb-170' ) ?>
					</a>

					<div class="item-content">
						<a href="<?php the_permalink() ?>">
							<h3><?php the_title() ?></h3>
							<span class="slash"></span>
							<?php the_excerpt(); ?>

							<?php novus_posted_on(); ?>
						</a>
					</div>
				</div>

				<?php 
					endwhile;
				endif;
				?>
		</div>
	</div>
</section>

<section class="tin-tuc-san-pham">
	<div class="container">
		<h2 class="section-title">Tin tức sản phẩm</h2>

		<div class="row">
			<div class="col-6">
				<?php
				$ttc = new WP_Query([
					'post_type'      => 'post',
					'posts_per_page' => 3,
					'tax_query'      => [
						[
							'taxonomy' => 'category',
							'field'    => 'slug',
							'terms'    => 'tin-tuc-san-pham',
						]
					],
				]);
				
				if ( $ttc->have_posts() ) :
					while ( $ttc->have_posts() ) : $ttc->the_post();
				?>

				<div class="item">
					<a href="<?php the_permalink() ?>">
						<?php the_post_thumbnail( 'thumb-260' ) ?>
					</a>

					<div class="item-content">
						<a href="<?php the_permalink() ?>">
							<h3><?php the_title() ?></h3>
							<span class="slash"></span>
							<?php the_excerpt(); ?>

							<?php novus_posted_on(); ?>
						</a>
					</div>
				</div>

				<?php 
					endwhile;
				endif;
				?>
			</div>

			<div class="col-6">
				<img class="feature-img" src="<?= NOVUS_IMG . '/products/abc.jpg' ?>">
			</div>

			<?php
				$ttc = new WP_Query([
					'post_type' => 'post',
					'offset'    => 3,
					'tax_query' => [
						[
							'taxonomy' => 'category',
							'field'    => 'slug',
							'terms'    => 'tin-tuc-san-pham',
						]
					],
				]);
				
				if ( $ttc->have_posts() ) :
					while ( $ttc->have_posts() ) : $ttc->the_post();
				?>

				<div class="item col-6">
					<a href="<?php the_permalink() ?>">
						<?php the_post_thumbnail( 'thumb-260' ) ?>
					</a>

					<div class="item-content">
						<a href="<?php the_permalink() ?>">
							<h3><?php the_title() ?></h3>
							<span class="slash"></span>
							<?php the_excerpt(); ?>

							<?php novus_posted_on(); ?>
						</a>
					</div>
				</div>

				<?php 
					endwhile;
				endif;
				?>
		</div>
	</div>
</section>

<?php
get_footer();