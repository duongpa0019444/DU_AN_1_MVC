
        <main class="main">
            
            <div class="container">
                <nav aria-label="breadcrumb" class="breadcrumb-nav">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?=BASE_URL?>/"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="#">Sản phẩm</a></li>
                       
                    </ol>
                </nav>

                <div class="row">
                    <div class="col-lg-9 main-content">
                        <nav class="toolbox sticky-header" data-sticky-options="{'mobile': true}">
                            <div class="toolbox-left">
                                <a href="#" class="sidebar-toggle">
                                    <svg data-name="Layer 3" id="Layer_3" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
										<line x1="15" x2="26" y1="9" y2="9" class="cls-1"></line>
										<line x1="6" x2="9" y1="9" y2="9" class="cls-1"></line>
										<line x1="23" x2="26" y1="16" y2="16" class="cls-1"></line>
										<line x1="6" x2="17" y1="16" y2="16" class="cls-1"></line>
										<line x1="17" x2="26" y1="23" y2="23" class="cls-1"></line>
										<line x1="6" x2="11" y1="23" y2="23" class="cls-1"></line>
										<path
											d="M14.5,8.92A2.6,2.6,0,0,1,12,11.5,2.6,2.6,0,0,1,9.5,8.92a2.5,2.5,0,0,1,5,0Z"
											class="cls-2"></path>
										<path d="M22.5,15.92a2.5,2.5,0,1,1-5,0,2.5,2.5,0,0,1,5,0Z" class="cls-2"></path>
										<path d="M21,16a1,1,0,1,1-2,0,1,1,0,0,1,2,0Z" class="cls-3"></path>
										<path
											d="M16.5,22.92A2.6,2.6,0,0,1,14,25.5a2.6,2.6,0,0,1-2.5-2.58,2.5,2.5,0,0,1,5,0Z"
											class="cls-2"></path>
									</svg>
                                    <span>Filter</span>
                                </a>

                                <div class="toolbox-item toolbox-sort">
                                    <label>Sắp xếp theo:</label>

                                    <div class="select-custom">
                                        <select name="orderby" class="form-control">
											<option value="" disabled selected hidden>Sắp xếp</option>
											<option value="">Mới nhất</option>
											<option value="">Cũ nhất</option>
											<option value="">Giá cao nhất</option>
											<option value="">Giá thấp nhất</option>
											<option value="">Nhiều lượt mua nhất</option>
										</select>
                                    </div>
                                    <!-- End .select-custom -->


                                </div>
                                <!-- End .toolbox-item -->
                            </div>
                            <!-- End .toolbox-left -->

                            
                        </nav>

                        <div class="row">

                            <?php foreach($products as $product): ?>
                                <div class="col-6 col-sm-4">
                                    <div class="product-default">
                                        <figure>
                                            <a href="<?=BASE_URL?>/detailProduct">
                                                <img src="<?=$product['hinh_anh_1']?>" width="280" height="280" alt="product" />
                                                <img src="<?=$product['hinh_anh_2']?>" width="280" height="280" alt="product" />
                                            </a>

                                            <div class="label-group">
                                                <div class="product-label label-sale">-<?=$product['khuyen_mai']??''?>%</div>
                                            </div>
                                        </figure>

                                        <div class="product-details">
                                            <div class="category-wrap">
                                                <div class="category-list">
                                                    <a href="category.html" class="product-category"><?=$product['ten_danh_muc']?></a>
                                                </div>
                                            </div>

                                            <h3 class="product-title"> <a href="<?=BASE_URL?>/detailProduct"><?=$product['ten_san_pham']?></a> </h3>

                                            <div class="ratings-container">
                                                <div class="product-ratings">
                                                    <span class="ratings" style="width:100%"></span>
                                                    <!-- End .ratings -->
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <!-- End .product-ratings -->
                                            </div>
                                            <!-- End .product-container -->

                                            <div class="price-box">
                                                <span class="old-price"><?=$product['gia_san_pham']?></span>
                                                <span class="product-price"><?=$product['gia_san_pham']-$product['gia_san_pham']*($product['khuyen_mai']/100)?>VND</span>
                                            </div>
                                            <!-- End .price-box -->

                                            <div class="product-action">
                                                <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                                        class="icon-heart"></i></a>
                                                <a href="<?=BASE_URL?>/detailProduct" class="btn-icon btn-add-cart"><i
                                                        class="fa fa-arrow-right"></i><span>Thêm Giỏ Hàng</span></a>
                                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                                            </div>
                                        </div>
                                        <!-- End .product-details -->
                                    </div>
                                </div>
                                <!-- End .col-sm-4 -->
                            <?php endforeach ?>

                            
                        </div>
                        <!-- End .row -->

                        <nav class="toolbox toolbox-pagination">
                            <div class="toolbox-item toolbox-show">
                                <label>Show:</label>

                                <div class="select-custom">
                                    <select name="count" class="form-control">
										<option value="12">12</option>
										<option value="24">24</option>
										<option value="36">36</option>
									</select>
                                </div>
                                <!-- End .select-custom -->
                            </div>
                            <!-- End .toolbox-item -->

                            <ul class="pagination toolbox-item">
                                <li class="page-item disabled">
                                    <a class="page-link page-link-btn" href="#"><i class="icon-angle-left"></i></a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><span class="page-link">...</span></li>
                                <li class="page-item">
                                    <a class="page-link page-link-btn" href="#"><i class="icon-angle-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- End .col-lg-9 -->

                    <div class="sidebar-overlay"></div>
                    <aside class="sidebar-shop col-lg-3 order-lg-first mobile-sidebar">
                        <div class="sidebar-wrapper">
                            <div class="widget">
                                <h3 class="widget-title">
                                    <a data-toggle="collapse" href="#widget-body-2" role="button" aria-expanded="true" aria-controls="widget-body-2">Danh mục</a>
                                </h3>

                                <?php foreach($allCategory as $category): ?>
                                    <div class="collapse show" id="widget-body-2">
                                        <div class="widget-body">
                                            <ul class="cat-list">
                                                <li>
                                                    <a href="#widget-category-<?=$category['id']+1?>" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="widget-category-<?=$category['id']+1?>">
                                                        <?=$category['ten_danh_muc']?>
                                                        <span class="toggle"></span>
                                                    </a>
                                                    <div class="collapse show" id="widget-category-<?=$category['id']+1?>">
                                                        <ul class="cat-sublist">
                                                            <li>danh mục nhỏ 1</li>
                                                            <li>danh mục nhỏ 2</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                
                                                
                                            </ul>
                                        </div>
                                        <!-- End .widget-body -->
                                    </div>
                                <?php endforeach ?>
                                <!-- End .collapse -->
                            </div>
                            <!-- End .widget -->

                            <div class="widget">
                                <h3 class="widget-title">
                                    <a data-toggle="collapse" href="#widget-body-3" role="button" aria-expanded="true" aria-controls="widget-body-3">Theo Giá</a>
                                </h3>

                                <div class="collapse show" id="widget-body-3">
                                    <div class="widget-body pb-0">
                                        <form action="#">
                                            <div class="price-slider-wrapper">
                                                <div id="price-slider"></div>
                                                <!-- End #price-slider -->
                                            </div>
                                            <!-- End .price-slider-wrapper -->

                                            <div class="filter-price-action d-flex align-items-center justify-content-between flex-wrap">
                                                <div class="filter-price-text">
                                                    Giá sản phẩm: VND
                                                    <span id="filter-price-range"></span>
                                                </div>
                                                <!-- End .filter-price-text -->

                                                <from class="input-group mb-3">
                                                    <input type="text" class="form-control" placeholder="Nhập giá" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                    <button class="input-group-text btn btn-primary" id="basic-addon2">Lọc</button>
                                                </from>
                                            </div>
                                            <!-- End .filter-price-action -->
                                        </form>
                                    </div>
                                    <!-- End .widget-body -->
                                </div>
                                <!-- End .collapse -->
                            </div>
                            <!-- End .widget -->

                            

                            <div class="widget widget-featured">
                                <h3 class="widget-title">Sản phẩm Hot</h3>

                                <div class="widget-body">
                                    <div class="owl-carousel widget-featured-products">
                                        <div class="featured-col">
                                            <div class="product-default left-details product-widget">
                                                <figure>
                                                    <a href="<?=BASE_URL?>/detailProduct">
                                                        <img src="assets/images/products/small/product-4.jpg" width="75" height="75" alt="product" />
                                                        <img src="assets/images/products/small/product-4-2.jpg" width="75" height="75" alt="product" />
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h3 class="product-title"> <a href="<?=BASE_URL?>/detailProduct">Blue Backpack for
															the Young - S</a> </h3>
                                                    <div class="ratings-container">
                                                        <div class="product-ratings">
                                                            <span class="ratings" style="width:100%"></span>
                                                            <!-- End .ratings -->
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                        <!-- End .product-ratings -->
                                                    </div>
                                                    <!-- End .product-container -->
                                                    <div class="price-box">
                                                        <span class="product-price">$49.00</span>
                                                    </div>
                                                    <!-- End .price-box -->
                                                </div>
                                                <!-- End .product-details -->
                                            </div>
                                            <div class="product-default left-details product-widget">
                                                <figure>
                                                    <a href="<?=BASE_URL?>/detailProduct">
                                                        <img src="assets/images/products/small/product-5.jpg" width="75" height="75" alt="product" />
                                                        <img src="assets/images/products/small/product-5-2.jpg" width="75" height="75" alt="product" />
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h3 class="product-title"> <a href="<?=BASE_URL?>/detailProduct">Casual Spring Blue
															Shoes</a> </h3>
                                                    <div class="ratings-container">
                                                        <div class="product-ratings">
                                                            <span class="ratings" style="width:100%"></span>
                                                            <!-- End .ratings -->
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                        <!-- End .product-ratings -->
                                                    </div>
                                                    <!-- End .product-container -->
                                                    <div class="price-box">
                                                        <span class="product-price">$49.00</span>
                                                    </div>
                                                    <!-- End .price-box -->
                                                </div>
                                                <!-- End .product-details -->
                                            </div>
                                            <div class="product-default left-details product-widget">
                                                <figure>
                                                    <a href="<?=BASE_URL?>/detailProduct">
                                                        <img src="assets/images/products/small/product-6.jpg" width="75" height="75" alt="product" />
                                                        <img src="assets/images/products/small/product-6-2.jpg" width="75" height="75" alt="product" />
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h3 class="product-title"> <a href="<?=BASE_URL?>/detailProduct">Men Black Gentle
															Belt</a> </h3>
                                                    <div class="ratings-container">
                                                        <div class="product-ratings">
                                                            <span class="ratings" style="width:100%"></span>
                                                            <!-- End .ratings -->
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                        <!-- End .product-ratings -->
                                                    </div>
                                                    <!-- End .product-container -->
                                                    <div class="price-box">
                                                        <span class="product-price">$49.00</span>
                                                    </div>
                                                    <!-- End .price-box -->
                                                </div>
                                                <!-- End .product-details -->
                                            </div>
                                        </div>
                                        <!-- End .featured-col -->

                                        <div class="featured-col">
                                            <div class="product-default left-details product-widget">
                                                <figure>
                                                    <a href="<?=BASE_URL?>/detailProduct">
                                                        <img src="assets/images/products/small/product-1.jpg" width="75" height="75" alt="product" />
                                                        <img src="assets/images/products/small/product-1-2.jpg" width="75" height="75" alt="product" />
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h3 class="product-title"> <a href="<?=BASE_URL?>/detailProduct">Ultimate 3D
															Bluetooth Speaker</a> </h3>
                                                    <div class="ratings-container">
                                                        <div class="product-ratings">
                                                            <span class="ratings" style="width:100%"></span>
                                                            <!-- End .ratings -->
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                        <!-- End .product-ratings -->
                                                    </div>
                                                    <!-- End .product-container -->
                                                    <div class="price-box">
                                                        <span class="product-price">$49.00</span>
                                                    </div>
                                                    <!-- End .price-box -->
                                                </div>
                                                <!-- End .product-details -->
                                            </div>
                                            <div class="product-default left-details product-widget">
                                                <figure>
                                                    <a href="<?=BASE_URL?>/detailProduct">
                                                        <img src="assets/images/products/small/product-2.jpg" width="75" height="75" alt="product" />
                                                        <img src="assets/images/products/small/product-2-2.jpg" width="75" height="75" alt="product" />
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h3 class="product-title"> <a href="<?=BASE_URL?>/detailProduct">Brown Women Casual
															HandBag</a> </h3>
                                                    <div class="ratings-container">
                                                        <div class="product-ratings">
                                                            <span class="ratings" style="width:100%"></span>
                                                            <!-- End .ratings -->
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                        <!-- End .product-ratings -->
                                                    </div>
                                                    <!-- End .product-container -->
                                                    <div class="price-box">
                                                        <span class="product-price">$49.00</span>
                                                    </div>
                                                    <!-- End .price-box -->
                                                </div>
                                                <!-- End .product-details -->
                                            </div>
                                            <div class="product-default left-details product-widget">
                                                <figure>
                                                    <a href="<?=BASE_URL?>/detailProduct">
                                                        <img src="assets/images/products/small/product-3.jpg" width="75" height="75" alt="product" />
                                                        <img src="assets/images/products/small/product-3-2.jpg" width="75" height="75" alt="product" />
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h3 class="product-title"> <a href="<?=BASE_URL?>/detailProduct">Circled Ultimate
															3D Speaker</a> </h3>
                                                    <div class="ratings-container">
                                                        <div class="product-ratings">
                                                            <span class="ratings" style="width:100%"></span>
                                                            <!-- End .ratings -->
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                        <!-- End .product-ratings -->
                                                    </div>
                                                    <!-- End .product-container -->
                                                    <div class="price-box">
                                                        <span class="product-price">$49.00</span>
                                                    </div>
                                                    <!-- End .price-box -->
                                                </div>
                                                <!-- End .product-details -->
                                            </div>
                                        </div>
                                        <!-- End .featured-col -->
                                    </div>
                                    <!-- End .widget-featured-slider -->
                                </div>
                                <!-- End .widget-body -->
                            </div>
                            <!-- End .widget -->

                            <div class="widget widget-block">
                                <img src="https://i.pinimg.com/236x/7c/b1/c5/7cb1c55523b7194eb54958749e5338c1.jpg" alt="">
                            </div>
                            <!-- End .widget -->
                        </div>
                        <!-- End .sidebar-wrapper -->
                    </aside>
                    <!-- End .col-lg-3 -->
                </div>
                <!-- End .row -->
            </div>
            <!-- End .container -->

            <div class="mb-4"></div>
            <!-- margin -->
        </main>
        <!-- End .main -->

 