<section class="home-project">
	<div class="container no-row">
		<h2 data-scroll class="section-title">DỰ ÁN TIÊU BIỂU</h2>
		<p>
			Dịch vụ bảo hành 10 năm về chức năng sản phẩm của Roto mang đến cho khách hàng niềm tin<br>
			và sự an tâm để dựng xây những công trình đi cùng năm tháng
		</p>
	</div>

	<div class="container">
		<div data-scroll class="row tabs">
			<?php
			$cat_terms = get_terms( 'project-category', [
									'hide_empty' => false,
									'order'      => DESC
								] );

			foreach ( $cat_terms as $term ) :
			?>

			<a class="col-6 tab-link" href="#projects-<?= $term->term_id ?>">
				<?php $term_img = rwmb_meta( 'feature_img', [ 'object_type' => 'term' ], $term->term_id ); ?>
				<img src="<?= $term_img['sizes']['thumb-420']['url'] ?>">
				<span><?= $term->name ?></span>
			</a>

			<?php endforeach; ?>

			<?php foreach ( $cat_terms as $term ) : ?>

			<div id="projects-<?= $term->term_id ?>" class="col-12 tab-panel">
				<div class="row">
					<?php
					$projects = new WP_Query( [
						'post_type'      => 'project',
						'tax_query'      => [
							'taxonomy' => 'project-category',
							'field'    => 'id',
							'terms'    => [ $term->$term_id ]
						],
						'posts_per_page' => 8
					] );

					if ( $projects->have_posts() ) :
						while ( $projects->have_posts() ) :
							$projects->the_post();
					?>
						<div class="col-3 item">
							<a href="<?= get_the_permalink(); ?>" style="background:url(<?= get_the_post_thumbnail_url( get_the_ID(), 'thumb-370' ) ?>) center center / cover">
								<h2><?= get_the_title(); ?></h2>
							</a>
						</div>
					<?php
						endwhile;
					endif;
					?>
				</div>
			</div>

			<?php endforeach; ?>
		</div>
		
		<div data-scroll class="row projects-url">
			<a href="<?= home_url( '/projects' ) ?>">XEM THÊM</a>
		</div>
	</div>
</section>