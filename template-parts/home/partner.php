<section class="home-partner">
	<div class="container no-row">
		<h2 data-scroll class="section-title">ĐỐI TÁC</h2>
		<p>
		Với hệ thống sản phẩm đồng bộ, dịch vụ chuyên nghiệp, chất lượng và thương hiệu sản phẩm <br>
		được khẳng định trên toàn thế giới; chúng tôi tự hào là đối tác của 500+ đơn vị sản xuất <br>
		và gia công cửa trên khắp cả nước.
		</p>
	</div>

	<div data-scroll class="partners">
		<?php
		$partners = rwmb_meta( 'partner_img', ['size' => 'thumbnail'], get_queried_object_id() );

		foreach ( $partners as $image ) :
		?>
			<div class="item">
				<img src="<?= $image['url'] ?>"></a>
			</div>
		<?php endforeach; ?>
	</div>
</section>