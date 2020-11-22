<?php
get_header();
?>

<div class="container">
	<h1><?php the_title(); ?></h1>

	<?php the_post_thumbnail( 'full' ) ?>

	<div class="row project-info">
		<div class="col-7">
			<h2>Information about the reference project</h2>
			<p><?= rwmb_meta( 'project_info' ) ?></p>
		</div>

		<div class="col-5">
			<img src="<?= rwmb_meta( 'project_info_image' )['sizes']['thumb-470']['url'] ?>">
		</div>
	</div>
</div>

<section class="project-gallery masonry masonry--h">
	<?php foreach( rwmb_meta( 'images' ) as $img ) : ?>	
		<img class="masonry--h masonry-brick--h" src="<?= $img['sizes']['large']['url'] ?>">
	<?php endforeach; ?>
</section>

<?php
get_footer();
