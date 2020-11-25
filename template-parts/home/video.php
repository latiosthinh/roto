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
					<b>VPĐD, Showroom giới thiệu sản phẩm:</b> <br>
					Roto Frank Vietnam, C9 Mandarin Garden, Hoàng Minh Giám, <br>
					Trung Hoà, Cầu Giấy, Hà Nội <br>
					Hotline: 0983 500 860
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
				<a href="https://www.google.com/maps/place/Roto+Vietnam/@21.0055666,105.7973599,17z/data=!3m1!4b1!4m5!3m4!1s0x3135ad70db206267:0xe0c7b9a33fb79d00!8m2!3d21.0055616!4d105.7995486" target="_blank">
					<img src="<?= NOVUS_IMG . '/map.jpg' ?>">
				</a>
			</div>
		</div>
	</div>
</section>