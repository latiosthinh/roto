<section class="home-project">
	<div class="container no-row">
		<h2 data-scroll class="section-title">DỰ ÁN TIÊU BIỂU</h2>
		<p>
			Dịch vụ bảo hành 10 năm về chức năng sản phẩm của Roto mang đến cho khách hàng niềm tin<br>
			và sự an tâm để dựng xây những công trình đi cùng năm tháng
		</p>
	</div>

	<div class="container">
		<div data-scroll class="row">
			<?php
			$projects = new WP_Query([
				'post_type'      => 'project',
				'posts_per_page' => 3
			]);

			if ( $projects->have_posts() ) :
				$count = 1;
				while ( $projects->have_posts() ) : $projects->the_post();
			?>

			<div class="col-4 item">
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail( 'thumb-420' ) ?>
				
					<h3 class="item-title">
						<span>REFERENCE</span>
						<?php the_title(); ?>
					</h3>
				</a>

				<?php if ( $count == 2 ) : ?>
					<a class="projects-url" href="<?= home_url( '/projects' ) ?>">
						<h3>CREATES INNER VALUE</h3>
						<p>Discover other projects</p>
					</a>
				<?php endif; ?>
			</div>

			<?php
					$count += 1;
				endwhile;
			endif;
			?>
		</div>
	</div>
</section>