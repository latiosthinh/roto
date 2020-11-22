<section data-scroll class="home-video">
	<div class="col-6">
		<video muted autoplay loop src="<?= NOVUS_IMG . '/video.mp4' ?>"></video>
	</div>
	<div class="col-6">
		<img src="<?= NOVUS_IMG . '/girl.jpg' ?>">
	</div>
	
	<div class="container">
		<div class="row">
			<div class="col-6 info">
				<h3>THÔNG TIN LIÊN HỆ</h3>

				<p>
					VPĐD, Showroom giới thiệu sản phẩm: <br>

					Roto Frank Vietnam, C9 Mandarin Garden, Hoàng Minh Giám, Trung Hoà,<br>
					Cầu Giấy, Hà Nội<br>

					Tel: 0246 282 6500<br>

					Email: info@roto-frank.com.vn
				</p>

				<h3>THỜI GIAN LÀM VIỆC</h3>
				<p>
					Thứ 2-6: 8:00 - 17:00<br>
					Thứ 7, CN: Tạm nghỉ
				</p>
			</div>

			<div class="col-6 map">
				<?php
				// $args = [
				// 	'width'      => '640px',
				// 	'height'     => '480px',
				// 	'js_options' => [
				// 		'mapTypeId'   => 'HYBRID',
				// 		'zoomControl' => false,
				// 	]
				// ];

				// echo rwmb_meta( 'home_map', $args, get_queried_object_id() );
				?>
				<a href="" target="_blank">
					<img src="<?= NOVUS_IMG . '/map.jpg' ?>">
				</a>
			</div>
		</div>
	</div>
</section>