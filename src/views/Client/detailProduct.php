<main class="main">
    <div class="container">
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="demo4.html"><i class="icon-home"></i></a></li>
                <li class="breadcrumb-item"><a href="#">Sản phẩm</a></li>
            </ol>
        </nav>

        <div class="product-single-container product-single-default">
            <div class="cart-message d-none">
                <strong class="single-cart-notice"></strong>
                <span>has been added to your cart.</span>
            </div>

            <div class="row">
                <div class="col-lg-5 col-md-6 product-single-gallery">
                    <div class="product-slider-container">
                        <div class="label-group">
                            <div class="product-label label-hot">HOT</div>

                            <div class="product-label label-sale">
                                -<?= $product['khuyen_mai'] ?> %
                            </div>
                        </div>

                        <div class="product-single-carousel owl-carousel owl-theme show-nav-hover">
                            <div class="product-item">
                                <img class="product-single-image" src="<?= $product['hinh_anh_1'] ?>" data-zoom-image="<?= $product['hinh_anh_1'] ?>" width="468" height="468" alt="product" />
                            </div>
                            <div class="product-item">
                                <img class="product-single-image" src="<?= $product['hinh_anh_2'] ?>" data-zoom-image="<?= $product['hinh_anh_2'] ?>" width="468" height="468" alt="product" />
                            </div>
                            <div class="product-item">
                                <img class="product-single-image" src="<?= $product['hinh_anh_3'] ?>" data-zoom-image="<?= $product['hinh_anh_3'] ?>" width="468" height="468" alt="product" />
                            </div>
                            <div class="product-item">
                                <img class="product-single-image" src="<?= $product['hinh_anh_4'] ?>" data-zoom-image="<?= $product['hinh_anh_4'] ?>" width="468" height="468" alt="product" />
                            </div>
                            <div class="product-item">
                                <img class="product-single-image" src="<?= $product['hinh_anh_1'] ?>" data-zoom-image="<?= $product['hinh_anh_1'] ?>" width="468" height="468" alt="product" />
                            </div>
                        </div>
                        <!-- End .product-single-carousel -->
                        <span class="prod-full-screen">
                            <i class="icon-plus"></i>
                        </span>
                    </div>

                    <div class="prod-thumbnail owl-dots">
                        <?php if (!empty($product['hinh_anh_1'])): ?>
                            <div class="owl-dot">
                                <img src="<?= $product['hinh_anh_1'] ?>" width="110" height="110" alt="product-thumbnail" />
                            </div>
                        <?php endif ?>
                        <?php if (!empty($product['hinh_anh_2'])): ?>
                            <div class="owl-dot">
                                <img src="<?= $product['hinh_anh_2'] ?>" width="110" height="110" alt="product-thumbnail" />
                            </div>
                        <?php endif ?>
                        <?php if (!empty($product['hinh_anh_3'])): ?>
                            <div class="owl-dot">
                                <img src="<?= $product['hinh_anh_3'] ?>" width="110" height="110" alt="product-thumbnail" />
                            </div>
                        <?php endif ?>
                        <?php if (!empty($product['hinh_anh_4'])): ?>
                            <div class="owl-dot">
                                <img src="<?= $product['hinh_anh_4'] ?>" width="110" height="110" alt="product-thumbnail" />
                            </div>
                        <?php endif ?>

                    </div>
                </div>
                <!-- End .product-single-gallery -->

                <div class="col-lg-7 col-md-6 product-single-details">
                    <h1 class="product-title"><?= $product['ten_san_pham'] ?></h1>



                    <div class="ratings-container">
                        <div class="product-ratings">
                            <span class="ratings" style="width:100%"></span>
                            <!-- End .ratings -->
                            <span class="tooltiptext tooltip-top"></span>
                        </div>
                                        <!-- End .product-ratings -->
                    </div>
                    <!-- End .ratings-container -->

                    <hr class="short-divider">

                    <div class="price-box">
                        <span class="old-price"><?= number_format($product['gia_san_pham'], 0, ',', '.') ?> VND</span>
                        <span class="new-price"><?= number_format($product['gia_san_pham'] - $product['gia_san_pham'] * ($product['khuyen_mai'] / 100), 0, ',', '.') ?> VND</span>
                    </div>
                    <!-- End .price-box -->


                    <!-- End .product-desc -->

                    <ul class="single-info-list">

                        <li>
                            Mã sản phẩm: <strong><?= $product['ma_san_pham'] ?></strong>
                        </li>

                        <li>
                            hãng: <strong><a href="#" class="product-category"><?= $product['ten_danh_muc'] ?></a></strong>
                        </li>


                    </ul>

                    <form class="product-action" method="post">
                        <div class="product-single-qty">
                            <input class="horizontal-quantity form-control" type="text" name="so_luong">
                        </div>
                        <!-- End .product-single-qty -->
                        <input type="hidden" name="addCart" value="<?= $product['id_SP'] ?>&name=<?= $product['ten_danh_muc'] ?>">

                        <button class="btn btn-dark mx-3" title="Add to Cart">Thêm giỏ hàng</button>


                    </form>
                    <!-- End .product-action -->

                    <hr class="divider mb-0 mt-0">

                    <div class="product-single-share mb-3">
                        <label class="sr-only">Share:</label>

                        <div class="social-icons mr-2">
                            <a href="#" class="social-icon social-facebook icon-facebook" target="_blank" title="Facebook"></a>
                            <a href="#" class="social-icon social-twitter icon-twitter" target="_blank" title="Twitter"></a>
                            <a href="#" class="social-icon social-linkedin fab fa-linkedin-in" target="_blank" title="Linkedin"></a>
                            <a href="#" class="social-icon social-gplus fab fa-google-plus-g" target="_blank" title="Google +"></a>
                            <a href="#" class="social-icon social-mail icon-mail-alt" target="_blank" title="Mail"></a>
                        </div>
                        <!-- End .social-icons -->

                        <a href="wishlist.html" class="btn-icon-wish add-wishlist" title="Add to Wishlist"><i
                                class="icon-wishlist-2"></i></a>
                    </div>
                    <!-- End .product single-share -->
                </div>
                <!-- End .product-single-details -->
            </div>
            <!-- End .row -->
        </div>
        <!-- End .product-single-container -->

        <div class="product-single-tabs">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="product-tab-desc" data-toggle="tab" href="#product-desc-content" role="tab" aria-controls="product-desc-content" aria-selected="true">Mô tả</a>
                </li>
                <?php foreach ($soluong as  $soluongitem):  ?>
                <?php endforeach; ?>
                <li class="nav-item">
                    <a class="nav-link" id="product-tab-reviews" data-toggle="tab" href="#product-reviews-content" role="tab" aria-controls="product-reviews-content" aria-selected="false">Đánh giá (<?= $soluongitem['so_luong'] ?>)</a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="product-desc-content" role="tabpanel" aria-labelledby="product-tab-desc">
                    <div class="product-desc-content">
                        <?= $product['mo_ta'] ?>

                    </div>
                    <!-- End .product-desc-content -->
                </div>
                <!-- End .tab-pane -->





                <div class="tab-pane fade" id="product-reviews-content" role="tabpanel" aria-labelledby="product-tab-reviews">
                <?php foreach ($soluong as  $soluongitem):  ?>
                    <?php endforeach; ?>
                    <h4><?= $soluongitem['so_luong'] ?> Lượt đánh giá sản phẩm </h4>

                    <div class="product-reviews-content">

                        <?php foreach ($comments as  $comment):  ?>
                            <div class="comment-list">
                                <div class="comments">
                                    <figure class="img-thumbnail">
                                        <img src="<?= $comment['hinh_anh'] ?>" alt="author" width="80" height="80">
                                    </figure>

                                    <div class="comment-block">
                                        <div class="comment-header">
                                            <div class="comment-arrow"></div>

                                           
                                            <span class="comment-by">
                                                <strong><?= $comment['ten_user'] ?></strong> – <?= $comment['thoi_gian'] ?>
                                            </span>
                                        </div>

                                        <div class="comment-content">
                                            <p><?= $comment['noi_dung'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>

                        <div class="divider"></div>

                        <div class="add-product-review">
                            <?php if (isset($_SESSION['user_id'])): ?>
                                <h3 class="review-title">Thêm đánh giá</h3>


                                <form action="" method="post" class="comment-form m-0">
                                    <div class="rating-form">
                                        <label for="rating">Đánh giá của bạn <span class="required">*</span></label>
                                    
                                    </div>

                                    <div class="form-group">
                                        <label>Nhập đánh giá<span class="required">*</span></label>
                                        <textarea cols="5" rows="6" class="form-control form-control-sm" name="noi_dung"></textarea>
                                    </div>
                                    <!-- End .form-group -->
                                    <button  class="btn btn-primary">Gửi đánh giá</button>


                                </form>
                            <?php endif?>

                        </div>
                        <!-- End .add-product-review -->
                    </div>
                    <!-- End .product-reviews-content -->
                </div>
                <!-- End .tab-pane -->
            </div>
            <!-- End .tab-content -->
        </div>
        <!-- End .product-single-tabs -->

        <div class="products-section pt-0">
            <h2 class="section-title">Sản phẩm tương tự</h2>

            <div class="products-slider owl-carousel owl-theme dots-top dots-small">
                <?php foreach ($products as $product): ?>
                    <div class="product-default">
                        <figure>
                            <a href="<?= BASE_URL ?>/detailProduct?id=<?= $product['id_SP'] ?>&name=<?= $product['ten_danh_muc'] ?>">
                                <img src="<?= $product['hinh_anh_1'] ?>" width="280" height="280" alt="product">
                                <img src="<?= $product['hinh_anh_2'] ?>" width="280" height="280" alt="product">
                            </a>
                            <div class="label-group">
                                <div class="product-label label-hot">HOT</div>
                                <div class="product-label label-sale"><?= $product['khuyen_mai'] ?> %</div>
                            </div>
                        </figure>
                        <div class="product-details">
                            <div class="category-list">
                                <a href="category.html" class="product-category"><?= $product['ten_danh_muc'] ?></a>
                            </div>
                            <h3 class="product-title">
                                <a href="<?= BASE_URL ?>/detailProduct?id=<?= $product['id_SP'] ?>&name=<?= $product['ten_danh_muc'] ?>"><?= $product['ten_san_pham'] ?></a>
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
                               
                                <a href="product.html" class="btn-icon btn-add-cart"><i
                                        class="fa fa-arrow-right"></i><span>Thêm Giỏ hàng</span></a>
                               
                            </div>
                        </div>
                        <!-- End .product-details -->
                    </div>
                <?php endforeach; ?>

            </div>
            <!-- End .products-slider -->
        </div>
        <!-- End .products-section -->

        <hr class="mt-0 m-b-5" />


        <!-- End .container -->
</main>
<!-- End .main -->



<?php
if (isset($_GET['add'])) {
    echo ("   <script>
       
        iziToast.success({
            title: 'Thành công!',
            message: 'Sản phẩm đã được thêm vào giỏ hàng.',
            position: 'topRight',
            timeout: 3000 // Thời gian tự động đóng (ms)
        });
      
    </script>");
}



?>





