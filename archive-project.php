<?php
get_header();
?>

<section class="projects-banner" style="background:url( <?= NOVUS_IMG . '/project.jpg' ?> ) center center / cover">
	<div class="container">
		<h2 data-scroll>Project references</h2>
		<p data-scroll>
			Windows flood living spaces with light, ensure a clear view and provide protection from the weather and environment. With their timeless design and intelligent technology, Schüco window systems create visual accents. Their excellent thermal insulation also saves on energy costs, increasing the value of your home and conserving the environment.
		</p>
	</div>
</section>

<?= novus_breadcrumbs(); ?>

<section class="projects">
	<div class="container">
		<div class="row">
			<?php
			$ids = get_terms( [ 'taxonomy' => 'project-category', 'hide_empty' => false ] );
			foreach ( $ids as $term ) :
			?>
			<div class="col-6">
				<h2 class="section-title"><?= $term->name ?></h2>
				<p><?= $term->description ?></p>
				<div data-scroll class="project-slider">
					<?php
					$project = new WP_Query([
						'post_type' => 'project',
						'tax_query' => [
							[
								'taxonomy' => 'project-category',
								'field'    => 'slug',
								'terms'    => [ $term->slug ],
							]
						],
					]);

					$total = $project->post_count;
					
					if ( $project->have_posts() ) :
						$i = 0;
					?>
						<div class="item">
					<?php
						while ( $project->have_posts() ) :
							$project->the_post();
					?>
							<a href="<?php the_permalink(); ?>" class="item-project">
								<?php the_post_thumbnail( 'thumb-370' ) ?>
								<h3 class="item-title"><?= get_the_title() ?></h3>
							</a>
					<?php
							$i += 1;

							if ( $i >= $total ) :
								echo '</div>';
							elseif ( $i%3 === 0 ):
								echo '</div><div class="item">';
							endif;
						endwhile;
					endif;
					?>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<?php
get_footer();