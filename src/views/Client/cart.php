	<main class="main">
			<div class="container">
				<ul class="checkout-progress-bar d-flex justify-content-center flex-wrap">
					<li class="active">
						<a href="#">Giỏ hàng</a>
					</li>
					<li>
						<a href="#">Kiểm tra</a>
					</li>
					<li class="disabled">
						<a href="#">Hoàn tất đơn hàng</a>
					</li>
				</ul>

				<div class="row">
					<div class="col-lg-12">
						<div class="cart-table-container">
							<table class="table table-cart">
								<thead>
									<tr>
										<th class="thumbnail-col"></th>
										<th class="product-col">Sản phẩm</th>
										<th class="price-col">Giá</th>
										<th class="qty-col">Số lượng</th>
										<th class="text-right">Tổng phụ</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach($productCarts as $productCart): ?>
										<tr class="product-row">
											<td>
												<figure class="product-image-container">
													<a href="product.html" class="product-image">
														<img src="<?=$productCart['hinh_anh_1']?>" alt="product">
													</a>

													<a href="#" class="btn-remove icon-cancel" title="Remove Product"></a>
												</figure>
											</td>
											<td class="product-col">
												<h5 class="product-title">
													<a href="product.html"><?=$productCart['ten_san_pham']?></a>
												</h5>
											</td>
											<td><?= number_format($productCart['gia_san_pham'], 0, ',', '.') ?> VND</td>
											<td>
												<div class="product-single-qty">
													<input class="form-control" type="text" value="<?=$productCart['so_luong']?>" disabled>
												</div><!-- End .product-single-qty -->
											</td>
											<td class="text-right"><span class="subtotal-price"><?= number_format($productCart['tong_phu'], 0, ',', '.') ?> VND</span></td>
										</tr>
									<?php  ?>
									<?php endforeach ?>
								</tbody>


								<tfoot>
									<tr>
										<td colspan="5" class="clearfix">
											<div class="float-left">
												<div class="cart-discount">
													<form action="#">
														<div class="input-group">
															<input type="text" class="form-control form-control-sm"
																placeholder="Coupon Code" required>
															<div class="input-group-append">
																<button class="btn btn-sm" type="submit">Áp dụng Phiếu</button>
															</div>
														</div><!-- End .input-group -->
													</form>
												</div>
											</div><!-- End .float-left -->

											<div class="float-right">
												<a href="<?=BASE_URL?>/checkout">
													<button type="submit" class="btn btn-shop btn-update-cart">
														Đặt Hàng
													</button>
												</a>
											</div><!-- End .float-right -->
										</td>
									</tr>
								</tfoot>
							</table>
						</div><!-- End .cart-table-container -->
					</div><!-- End .col-lg-8 -->

					
					</div><!-- End .col-lg-4 -->
				</div><!-- End .row -->
			</div><!-- End .container -->

			<div class="mb-6"></div><!-- margin -->
		</main><!-- End .main -->

