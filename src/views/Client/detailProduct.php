
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
                                <div class="owl-dot">
                                    <img src="<?= $product['hinh_anh_2'] ?>" width="110" height="110" alt="product-thumbnail" />
                                </div>
                                <div class="owl-dot">
                                    <img src="<?= $product['hinh_anh_2'] ?>" width="110" height="110" alt="product-thumbnail" />
                                </div>
                                <div class="owl-dot">
                                    <img src="<?= $product['hinh_anh_3'] ?>" width="110" height="110" alt="product-thumbnail" />
                                </div>
                                <div class="owl-dot">
                                    <img src="<?= $product['hinh_anh_4'] ?>" width="110" height="110" alt="product-thumbnail" />
                                </div>
                                <div class="owl-dot">
                                    <img src="<?= $product['hinh_anh_1'] ?>" width="110" height="110" alt="product-thumbnail" />
                                </div>
                            </div>
                        </div>
                        <!-- End .product-single-gallery -->

                        <div class="col-lg-7 col-md-6 product-single-details">
                            <h1 class="product-title"><?= $product['ten_san_pham']?></h1>

                            <div class="product-nav">
                                <div class="product-prev">
                                    <a href="#">
                                        <span class="product-link"></span>

                                        <span class="product-popup">
											<span class="box-content">
												<img alt="product" width="150" height="150"
													src="<?= $product['hinh_anh_1']?>"
													style="padding-top: 0px;">

												<span>Circled Ultimate 3D Speaker</span>
                                        </span>
                                        </span>
                                    </a>
                                </div>

                                <div class="product-next">
                                    <a href="#">
                                        <span class="product-link"></span>

                                        <span class="product-popup">
											<span class="box-content">
												<img alt="product" width="150" height="150"
													src="assets/images/products/product-4.jpg"
													style="padding-top: 0px;">

												<span>Blue Backpack for the Young</span>
                                        </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:60%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->

                                <a href="#" class="rating-link">( 6 Reviews )</a>
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
                                    Mã sản phẩm: <strong><?= $product['ma_san_pham']?></strong>
                                </li>

                                <li>
                                    hãng: <strong><a href="#" class="product-category"><?= $product['ten_danh_muc']?></a></strong>
                                </li>

                                
                            </ul>

                            <div class="product-action">
                                <div class="product-single-qty">
                                    <input class="horizontal-quantity form-control" type="text">
                                </div>
                                <!-- End .product-single-qty -->

                                <a href="javascript:;" class="btn btn-dark add-cart ms-2" title="Add to Cart">Thêm giỏ hàng</a>

                                <a href="cart.html" class="btn btn-gray view-cart d-none">View cart</a>
                            </div>
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
										class="icon-wishlist-2"></i><span>Thêm vào danh mục yêu thích</span></a>
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

                        <li class="nav-item">
                            <a class="nav-link" id="product-tab-reviews" data-toggle="tab" href="#product-reviews-content" role="tab" aria-controls="product-reviews-content" aria-selected="false">Đánh giá (1)</a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="product-desc-content" role="tabpanel" aria-labelledby="product-tab-desc">
                            <div class="product-desc-content">
                            <h3>Thông tin sản phẩm</h3>
    <hr>

    <div class="section">
        <h5>Bộ xử lý</h5>
        <p class="item"><strong>Hãng CPU:</strong> Apple</p>
        <p class="item"><strong>Công nghệ CPU:</strong> M2</p>
        <p class="item"><strong>Loại CPU:</strong> 8 - Core</p>
        <p class="item"><strong>Tốc độ CPU tối thiểu:</strong> 2.3 GHz</p>
    </div>
    <hr>

    <div class="section">
        <h5>RAM</h5>
        <p class="item"><strong>Dung lượng RAM:</strong> 16 GB</p>
        <p class="item"><strong>Loại RAM:</strong> LPDDR4</p>
        <p class="item"><strong>Số RAM onboard:</strong> 1</p>
        <p class="item"><strong>Hỗ trợ RAM tối đa:</strong> 16 GB</p>
    </div>
    <hr>

    <div class="section">
        <h5>Lưu trữ</h5>
        <p class="item"><strong>Kiểu ổ cứng:</strong> SSD</p>
        <p class="item"><strong>Loại SSD:</strong> Hãng không công bố</p>
        <p class="item"><strong>Dung lượng:</strong> 256 GB</p>
    </div>
    <hr>

    <div class="section">
        <h5>Màn hình</h5>
        <p class="item"><strong>Kích thước màn hình:</strong> 13.6 inch</p>
        <p class="item"><strong>Công nghệ màn hình:</strong> Retina</p>
        <p class="item"><strong>Độ phân giải:</strong> 2560 x 1644 Pixels</p>
        <p class="item"><strong>Tần số quét:</strong> 60 Hz</p>
        <p class="item"><strong>Tấm nền:</strong> IPS</p>
    </div>
    <hr> 

    <div class="section">
        <h5>Giao tiếp và kết nối</h5>
        <p class="item"><strong>Cổng giao tiếp:</strong> 2 Type C</p>
        <p class="item"><strong>Wifi:</strong> 802.11 ax</p>
        <p class="item"><strong>Bluetooth:</strong> v5.0</p>
        <p class="item"><strong>Webcam:</strong> Full HD Webcam (1080p)</p>
    </div>
    <hr> 

    <div class="section">
        <h5>Hệ điều hành</h5>
        <p class="item"><strong>OS:</strong> macOS</p>
        <p class="item"><strong>Version:</strong> Ventura</p>
    </div>
    <hr> 

    <div class="section">
        <h5>Bảo mật</h5>
        <p class="item"><strong>Bảo mật:</strong> Mở khóa vân tay</p>
    </div>
    <hr>

    <div class="section">
        <h5>Bàn phím & TouchPad</h5>
        <p class="item"><strong>Kiểu bàn phím:</strong> English International Backlit Keyboard</p>
        <p class="item"><strong>Bàn phím số:</strong> Không</p>
        <p class="item"><strong>Đèn bàn phím:</strong> LED</p>
        <p class="item"><strong>TouchPad:</strong> Multi-touch touchpad</p>
    </div>
    <hr> 

    <div class="section">
        <h5>Thông tin pin & sạc</h5>
        <p class="item"><strong>Loại PIN:</strong> Lithium polymer</p>
        <p class="item"><strong>Dung lượng pin:</strong> 22 Giờ</p>
        <p class="item"><strong>Power Supply:</strong> 70 W</p>
    </div>
    <hr>

    <div class="section">
        <h5>Phụ kiện trong hộp</h5>
        <p class="item"><strong>Phụ kiện:</strong> Adapter, Dây cáp sạc</p>
    </div>
    <hr> 

    <div class="section">
        <h5>Thiết kế & Trọng lượng</h5>
        <p class="item"><strong>Kích thước:</strong> 30.41 x 21.5 x 1.13 cm</p>
        <p class="item"><strong>Trọng lượng sản phẩm:</strong> 1.24 kg</p>
        <p class="item"><strong>Chất liệu:</strong> Vỏ: Kim loại</p>
    </div>
    <hr>

    <div class="section">
        <h5>Thông tin hàng hóa</h5>
        <p class="item"><strong>P/N:</strong> MC7U4SA/A</p>
        <p class="item"><strong>Xuất xứ:</strong> Trung Quốc</p>
        <p class="item"><strong>Thời điểm ra mắt:</strong> 2024</p>
        <p class="item"><strong>Thời gian bảo hành (tháng):</strong> 12</p>
        <p class="item"><strong>Hướng dẫn bảo quản:</strong> Để nơi khô ráo, nhẹ tay, dễ vỡ.</p>
        <p class="item"><strong>Hướng dẫn sử dụng:</strong> Xem trong sách hướng dẫn sử dụng</p>
        <p class="item"><strong>Màu sắc:</strong> Xám</p>
    </div>
                            </div>
                            <!-- End .product-desc-content -->
                        </div>
                        <!-- End .tab-pane -->

                        

                        

                        <div class="tab-pane fade" id="product-reviews-content" role="tabpanel" aria-labelledby="product-tab-reviews">
                            <div class="product-reviews-content">
                                <h3 class="reviews-title">1 người đánh giá sản phẩm</h3>

                                <div class="comment-list">
                                    <div class="comments">
                                        <figure class="img-thumbnail">
                                            <img src="assets/images/blog/author.jpg" alt="author" width="80" height="80">
                                        </figure>

                                        <div class="comment-block">
                                            <div class="comment-header">
                                                <div class="comment-arrow"></div>

                                                <div class="ratings-container float-sm-right">
                                                    <div class="product-ratings">
                                                        <span class="ratings" style="width:60%"></span>
                                                        <!-- End .ratings -->
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <!-- End .product-ratings -->
                                                </div>

                                                <span class="comment-by">
													<strong>Joe Doe</strong> – April 12, 2018
												</span>
                                            </div>

                                            <div class="comment-content">
                                                <p>Excellent.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="divider"></div>

                                <div class="add-product-review">
                                    <h3 class="review-title">Thêm đánh giá</h3>

                                    <form action="#" class="comment-form m-0">
                                        <div class="rating-form">
                                            <label for="rating">Đánh giá của bạn <span class="required">*</span></label>
                                            <span class="rating-stars">
												<a class="star-1" href="#">1</a>
												<a class="star-2" href="#">2</a>
												<a class="star-3" href="#">3</a>
												<a class="star-4" href="#">4</a>
												<a class="star-5" href="#">5</a>
											</span>

                                            <select name="rating" id="rating" required="" style="display: none;">
												<option value="">Rate…</option>
												<option value="5">Perfect</option>
												<option value="4">Good</option>
												<option value="3">Average</option>
												<option value="2">Not that bad</option>
												<option value="1">Very poor</option>
											</select>
                                        </div>

                                        <div class="form-group">
                                            <label>Nhập đánh giá<span class="required">*</span></label>
                                            <textarea cols="5" rows="6" class="form-control form-control-sm"></textarea>
                                        </div>
                                        <!-- End .form-group -->

                                        <button class="btn btn-primary">Gửi đánh giá</button>


                                    </form>
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
                    <h2 class="section-title">Sản phẩm tương  tự</h2>

                    <div class="products-slider owl-carousel owl-theme dots-top dots-small">
                        <div class="product-default">
                            <figure>
                                <a href="product.html">
                                    <img src="assets/images/products/product-1.jpg" width="280" height="280" alt="product">
                                    <img src="assets/images/products/product-1-2.jpg" width="280" height="280" alt="product">
                                </a>
                                <div class="label-group">
                                    <div class="product-label label-hot">HOT</div>
                                    <div class="product-label label-sale">-20%</div>
                                </div>
                            </figure>
                            <div class="product-details">
                                <div class="category-list">
                                    <a href="category.html" class="product-category">Category</a>
                                </div>
                                <h3 class="product-title">
                                    <a href="product.html">Ultimate 3D Bluetooth Speaker</a>
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
                                    <del class="old-price">$59.00</del>
                                    <span class="product-price">$49.00</span>
                                </div>
                                <!-- End .price-box -->
                                <div class="product-action">
                                    <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i
											class="icon-heart"></i></a>
                                    <a href="product.html" class="btn-icon btn-add-cart"><i
											class="fa fa-arrow-right"></i><span>SELECT
											OPTIONS</span></a>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i
											class="fas fa-external-link-alt"></i></a>
                                </div>
                            </div>
                            <!-- End .product-details -->
                        </div>

                        <div class="product-default">
                            <figure>
                                <a href="product.html">
                                    <img src="assets/images/products/product-3.jpg" width="280" height="280" alt="product">
                                    <img src="assets/images/products/product-3-2.jpg" width="280" height="280" alt="product">
                                </a>
                                <div class="label-group">
                                    <div class="product-label label-hot">HOT</div>
                                    <div class="product-label label-sale">-20%</div>
                                </div>
                            </figure>
                            <div class="product-details">
                                <div class="category-list">
                                    <a href="category.html" class="product-category">Category</a>
                                </div>
                                <h3 class="product-title">
                                    <a href="product.html">Circled Ultimate 3D Speaker</a>
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
                                    <del class="old-price">$59.00</del>
                                    <span class="product-price">$49.00</span>
                                </div>
                                <!-- End .price-box -->
                                <div class="product-action">
                                    <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i
											class="icon-heart"></i></a>
                                    <a href="product.html" class="btn-icon btn-add-cart"><i
											class="fa fa-arrow-right"></i><span>SELECT
											OPTIONS</span></a>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i
											class="fas fa-external-link-alt"></i></a>
                                </div>
                            </div>
                            <!-- End .product-details -->
                        </div>

                        <div class="product-default">
                            <figure>
                                <a href="product.html">
                                    <img src="assets/images/products/product-7.jpg" width="280" height="280" alt="product">
                                    <img src="assets/images/products/product-7-2.jpg" width="280" height="280" alt="product">
                                </a>
                                <div class="label-group">
                                    <div class="product-label label-hot">HOT</div>
                                    <div class="product-label label-sale">-20%</div>
                                </div>
                            </figure>
                            <div class="product-details">
                                <div class="category-list">
                                    <a href="category.html" class="product-category">Category</a>
                                </div>
                                <h3 class="product-title">
                                    <a href="product.html">Brown-Black Men Casual Glasses</a>
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
                                    <del class="old-price">$59.00</del>
                                    <span class="product-price">$49.00</span>
                                </div>
                                <!-- End .price-box -->
                                <div class="product-action">
                                    <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i
											class="icon-heart"></i></a>
                                    <a href="product.html" class="btn-icon btn-add-cart"><i
											class="fa fa-arrow-right"></i><span>SELECT
											OPTIONS</span></a>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i
											class="fas fa-external-link-alt"></i></a>
                                </div>
                            </div>
                            <!-- End .product-details -->
                        </div>

                        <div class="product-default">
                            <figure>
                                <a href="product.html">
                                    <img src="assets/images/products/product-6.jpg" width="280" height="280" alt="product">
                                    <img src="assets/images/products/product-6-2.jpg" width="280" height="280" alt="product">
                                </a>
                                <div class="label-group">
                                    <div class="product-label label-hot">HOT</div>
                                    <div class="product-label label-sale">-20%</div>
                                </div>
                            </figure>
                            <div class="product-details">
                                <div class="category-list">
                                    <a href="category.html" class="product-category">Category</a>
                                </div>
                                <h3 class="product-title">
                                    <a href="product.html">Men Black Gentle Belt</a>
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
                                    <del class="old-price">$59.00</del>
                                    <span class="product-price">$49.00</span>
                                </div>
                                <!-- End .price-box -->
                                <div class="product-action">
                                    <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i
											class="icon-heart"></i></a>
                                    <a href="product.html" class="btn-icon btn-add-cart"><i
											class="fa fa-arrow-right"></i><span>SELECT
											OPTIONS</span></a>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i
											class="fas fa-external-link-alt"></i></a>
                                </div>
                            </div>
                            <!-- End .product-details -->
                        </div>

                        <div class="product-default">
                            <figure>
                                <a href="product.html">
                                    <img src="assets/images/products/product-4.jpg" width="280" height="280" alt="product">
                                    <img src="assets/images/products/product-4-2.jpg" width="280" height="280" alt="product">
                                </a>
                                <div class="label-group">
                                    <div class="product-label label-hot">HOT</div>
                                    <div class="product-label label-sale">-20%</div>
                                </div>
                            </figure>
                            <div class="product-details">
                                <div class="category-list">
                                    <a href="category.html" class="product-category">Category</a>
                                </div>
                                <h3 class="product-title">
                                    <a href="product.html">Blue Backpack for the Young - S</a>
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
                                    <del class="old-price">$59.00</del>
                                    <span class="product-price">$49.00</span>
                                </div>
                                <!-- End .price-box -->
                                <div class="product-action">
                                    <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i
											class="icon-heart"></i></a>
                                    <a href="product.html" class="btn-icon btn-add-cart"><i
											class="fa fa-arrow-right"></i><span>SELECT
											OPTIONS</span></a>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i
											class="fas fa-external-link-alt"></i></a>
                                </div>
                            </div>
                            <!-- End .product-details -->
                        </div>
                    </div>
                    <!-- End .products-slider -->
                </div>
                <!-- End .products-section -->

                <hr class="mt-0 m-b-5" />

            
            <!-- End .container -->
        </main>
        <!-- End .main -->

      