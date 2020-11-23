<?php
/**
 * Template Name: Blog
 */
get_header();
?>

<section class="tin-tuc-chung">
	<div class="container">
		<h2 class="section-title">
			Tin tức chung

			<div class="pagination"></div>
		</h2>

		<div class="row">
			<div class="col-4">
				<img class="feature-img" src="<?= NOVUS_IMG . '/products/abc.jpg' ?>">
			</div>

			<div class="col-8">
				<div class="news-ttc-slider">
				<?php
				$ttc = new WP_Query([
					'post_type'      => 'post',
					'posts_per_page' => -1,
					'tax_query'      => [
						[
							'taxonomy' => 'category',
							'field'    => 'slug',
							'terms'    => 'tin-tuc-chung',
						]
					],
				]);

				$total = $ttc->post_count;
				
				if ( $ttc->have_posts() ) :
					$i = 0;
				?>
				<div class="item">
				<?php while ( $ttc->have_posts() ) : $ttc->the_post(); ?>

				<div class="col-6 news-item">
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
						$i += 1;

						if ( $i >= $total ) :
							echo '</div>';
						elseif ( $i%4 === 0 && $i < $total ):
							echo '</div><div class="item">';
						endif;
					endwhile;
				endif;
				wp_reset_postdata(  );
				?>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="tin-tuc-san-pham">
	<div class="container">
		<h2 class="section-title">
			Tin tức sản phẩm

			<div class="pagination"></div>
		</h2>

		<div class="row">
			<div class="col-6">
				<div class="news-ttsp-slider">
				<?php
				$ttc = new WP_Query([
					'post_type'      => 'post',
					'posts_per_page' => -1,
					'tax_query'      => [
						[
							'taxonomy' => 'category',
							'field'    => 'slug',
							'terms'    => 'tin-tuc-san-pham',
						]
					],
				]);

				$total = $ttc->post_count;
				
				if ( $ttc->have_posts() ) :
					$i = 0;
				?>
					<div class="item">
				<?php while ( $ttc->have_posts() ) : $ttc->the_post(); ?>

				<div class="news-item">
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
						$i += 1;

						if ( $i >= $total ) :
							echo '</div>';
						elseif ( $i%3 === 0 && $i < $total ):
							echo '</div><div class="item">';
						endif;
					endwhile;
				endif;
				wp_reset_postdata(  );
				?>
				</div>
			</div>
			<div class="col-6">
				<img class="feature-img" src="<?= NOVUS_IMG . '/products/abc.jpg' ?>">
			</div>

		</div>
	</div>
</section>

<section class="download">
	<div class="container">
		<h2 class="section-title">Download</h2>

		<div class="row">
			<?php
			$downloads = get_term_children( 14, 'category' );
			
			foreach ( $downloads as $id ):
				$term = get_term( $id );
			?>
			<div class="col-6">
				<h3><?= $term->name ?></h3>

				<table cellspacing="0">
					<thead>
						<tr>
							<th align="left">Tên hiển thị</th>
							<th>Download</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$posts = new WP_Query( [
							'post_type'     => 'post',
							'category_name' => $term->slug,
							'posts_per_page'=> -1
						] );

						if ( $posts->have_posts() ) :
							while ( $posts->have_posts() ) : $posts->the_post();
						?>
						<tr>
							<td><?= get_the_title(); ?></td>
							<td>
								<a href="<?= rwmb_meta( 'url' ); ?>" target="_blank">
									<img src="<?= NOVUS_IMG . '/download.svg' ?>">
								</a>
							</td>
						</tr>
						<?php
							endwhile;
						endif;
						wp_reset_postdata(  );
						?>
					</tbody>
				</table>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<?php
get_footer();