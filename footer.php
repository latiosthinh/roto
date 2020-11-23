<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package novus
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-6">
					<p>
					<b>Tel: </b> 0246 282 6500
					<br>

					<b>Email:</b> info@roto-frank.com.vn
					<br>
					<br>

					<b>THỜI GIAN LÀM VIỆC</b><br>
					Thứ 2-6: 8:00 - 17:00<br>
					Thứ 7, CN: Theo lịch hẹn
					</p>
					<br>

					<ul>
						<li><a href="https://www.facebook.com/rotovietnamofficial" target="_blank"><img src="<?= NOVUS_IMG . '/facebook.svg' ?>" alt="facebook"></a></li>
						<li><a href="https://www.youtube.com/channel/UCReRhtrhnv6NVPMvL3i-2sA" target="_blank"><img src="<?= NOVUS_IMG . '/youtube.svg' ?>" alt="youtube"></a></li>
					</ul>
				</div>

				<div class="col-6">
					<h3>HỆ THỐNG SHOWROOM</h3>
					<p>
					<b>Tại Hà Nội: </b><br>
					Số 23, Trần Kim Xuyến, Yên Hòa, Cầu Giấy, Hà Nội.<br>
					C9 Toà nhà Hoà Phát, Hoàng Minh Giám, Cầu Giấy, Hà Nội.
					</p>

					<p>
					<b>Tại Nghệ An:</b><br>
					246 Trường Chinh – P. Lê Lợi, Tp. Vinh, Nghệ An<br>
					Liên hệ: 094 77 888 77
					</p>
				</div>
			</div>
		</div>
		<p class="site-info">&copy; <?= the_date( 'Y' ) ?> Bản quyền thuộc văn phòng đại diện Roto-Frank Việt Nam</p>
	</footer>

	<div class="right-widget">
		<a href="mailto:info@roto-frank.com.vn">
			<img src="<?= NOVUS_IMG . '/mail.svg' ?>">
			<span>Email</span>
		</a>
		<a href="tel:+84983500860">
			<img src="<?= NOVUS_IMG . '/phone.svg' ?>">
			<span>Phone</span>
		</a>
		<a href="https://www.messenger.com/t/rotovietnamofficial" target="_blank">
			<img src="<?= NOVUS_IMG . '/mes.svg' ?>">
			<span>Messenger</span>
		</a>
	</div>
</main>

<?php wp_footer(); ?>

</body>
</html>
