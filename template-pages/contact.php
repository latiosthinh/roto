<?php
/**
 * Template Name: Contact
 */
get_header();
?>

<section class="home-contact">
	<div class="container">
		<div class="row">
			<div class="col-7">
				<a href="" target="_blank">
					<img src="<?= NOVUS_IMG . '/map.jpg' ?>">
				</a>
			</div>

			<div class="col-5">
				<h2>Hãy liên hệ ngay với chúng tôi </h2>
				<p>Chúng tôi sẽ phản hồi trong 30 phút</p>

				<?php echo do_shortcode( '[contact-form-7 id="73" title="Home contact"]' ); ?>
			</div>
		</div>
	</div>
	<img class="ball ball-1" src="<?= NOVUS_IMG . '/ball.png' ?>">
	<img class="ball ball-2" src="<?= NOVUS_IMG . '/ball.png' ?>">
	<img class="ball ball-3" src="<?= NOVUS_IMG . '/ball.png' ?>">
</section>

<?php
get_footer();