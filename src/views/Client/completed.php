<main class="main">

<div class="container text-center">
    <!-- Phần xác nhận -->
    <form method="post" class="confirmation">
      <div class="checkmark"><i class="fa-solid fa-check" style="color: #63E6BE; font-size: 100px;"></i></div>
      <h2>Cảm ơn bạn đã đặt hàng!</h2>
      <p>Bạn sẽ nhận được cuộc gọi từ nhân viên cửa hàng để xác nhận</p>
      <button class="btn btn-primary">Xem đơn hàng</button>
    </form>

    <!-- Phần đề xuất sản phẩm -->
    <div class="container mt-5">
            <h2 class="section-title heading-border ls-20 border-0">Sản phẩm bạn có thể thích</h2>

            <div class="products-slider custom-products owl-carousel owl-theme nav-outer show-nav-hover nav-image-center" data-owl-options="{
						'dots': false,
						'nav': true
					}">
                <?php foreach ($products as $product) : ?>
                    <div class="product-default appear-animate" data-animation-name="fadeInRightShorter">
                        <figure>
                            <a href="<?= BASE_URL ?>/detailProduct?id=<?=$product['id_SP']?>">
                                <img src="<?= $product['hinh_anh_1'] ?>" width="280" height="280" alt="product">
                                <img src="<?= $product['hinh_anh_2'] ?>" width="280" height="280" alt="product">
                            </a>
                            <div class="label-group">

                                <div class="product-label label-sale">-<?= $product['khuyen_mai'] ?> %</div>
                            </div>
                        </figure>
                        <div class="product-details">
                            <div class="category-list">
                                <a href="category.html" class="product-category"><?= $product['ten_danh_muc'] ?></a>
                            </div>
                            <h3 class="product-title">
                                <a href="<?= BASE_URL ?>/detailProduct"><?= $product['ten_san_pham'] ?></a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:80%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->
                            <div class="price-box">
                                <del class="old-price"><?= number_format($product['gia_san_pham'], 0, ',', '.') ?> VND</del>
                                <span class="product-price"><?= number_format($product['gia_san_pham'] - $product['gia_san_pham'] * ($product['khuyen_mai'] / 100), 0, ',', '.') ?> VND</span>
                            </div>
                            <!-- End .price-box -->
                            <div class="product-action">
                                <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                        class="icon-heart"></i></a>
                                <a href="<?= BASE_URL ?>/detailProduct" class="btn-icon btn-add-cart"><i
                                        class="fa fa-arrow-right"></i><span>Thêm Giỏ Hàng</span></a>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i
                                        class="fas fa-external-link-alt"></i></a>
                            </div>
                        </div>
                        <!-- End .product-details -->
                    </div>
                <?php endforeach; ?>


            </div>
        </div>
</div>

</main>