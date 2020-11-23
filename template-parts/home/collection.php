<section class="home-product">
	<div class="container no-row">
		<h2 data-scroll class="section-title">SẢN PHẨM</h2>
		<p>
			Thương hiệu Roto có mặt tại thị trường Việt Nam từ năm 1998, với Văn phòng đại diện được <br>
			thành lập năm 2010, hướng tới mục tiêu mở rộng thị trường tại một trong những khu vực có tốc độ phát triển nhanh nhất Đông Nam Á
		</p>
	</div>

	<div class="container product-wrapper">
		<div data-scroll class="product-items row">
			<?php
			$collections = rwmb_meta( 'chosen_collections', null, get_the_ID() );
			
			foreach( $collections as $c ) :
			?>
			<div class="item col-3">
				<?php
				$cua_so        = get_term_by( 'slug', $c, 'prod-category' );
				$cua_so_img    = rwmb_meta( 'feature_img', [ 'object_type' => 'term' ], $cua_so->term_id );
				$cua_so_number = new WP_Query( [ 'prod-category' => $c ] );
				?>
				<a class="item-thumb" href="<?= get_category_link( $cua_so ) ?>">
					<img src="<?= $cua_so_img['full_url'] ?>">
				</a>

				<a href="<?= get_category_link( $cua_so ) ?>">
					<h3><?= $cua_so->name ?></h3>
					<p><?= $cua_so_number->found_posts ?> sản phẩm</p>
				</a>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>