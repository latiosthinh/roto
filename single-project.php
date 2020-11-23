<?php
get_header();
?>

<div class="container">
	<div class="row project-info">
		<div class="col-6">
			<h1><?php the_title(); ?></h1>

			<p><?= rwmb_meta( 'project_info' ) ?></p>
		</div>

		<div class="col-6">
			<div class="single-project-slider">
				<?php foreach( rwmb_meta( 'images' ) as $img ) : ?>	
					<img src="<?= $img['sizes']['thumb-470']['url'] ?>">
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</div>

<section class="project-related">
	<div class="container">
		<div class="row">
			<?php
			$projects = new WP_Query( [
				'post_type'      => 'project',
				'posts_per_page' => 4,
				'post__not_in'   => [get_the_ID()],
				'orderby'        => 'rand',
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
</section>

<?php
get_footer();
