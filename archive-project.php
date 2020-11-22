<?php
get_header();
?>

<section class="projects">
	<div class="container">
		<h2 data-scroll>Reference projects – Residential</h2>
		<p data-scroll>Be inspired: discover the range of buildings featuring Schüco products</p>
		
		<div class="row">
			<?php while ( have_posts() ) : the_post(); ?>

			<div data-scroll class="col-4 item">
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail( 'thumb-470' ) ?>
				
					<h3 class="item-title">
						<span>REFERENCE</span>
						<?php the_title(); ?>
					</h3>
				</a>
			</div>

			<?php endwhile; ?>
		</div>
	</div>
</section>

<?php
get_footer();