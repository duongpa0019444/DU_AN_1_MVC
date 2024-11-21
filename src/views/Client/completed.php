<main class="main">

<div class="container text-center">
    <!-- Phần xác nhận -->
    <div class="confirmation">
      <div class="checkmark">✔</div>
      <h2>Cảm ơn bạn đã đặt hàng!</h2>
      <p>Bạn sẽ nhận được thông tin cập nhật trong hộp thư đến thông báo.</p>
      <button class="btn btn-primary">Xem đơn hàng</button>
    </div>

    <!-- Phần đề xuất sản phẩm -->
    <div class="products mt-5">
      <h4>Có thể bạn cũng thích</h4>
      <div class="row">
        <!-- Sản phẩm 1 -->
        
        <div class="product-default appear-animate" data-animation-name="fadeInRightShorter">
            <figure>
                <a href="<?= BASE_URL ?>/detailProduct">
                    <img src="" width="280" height="280" alt="product">
                    <img src="" width="280" height="280" alt="product">
                </a>
                <div class="label-group">
                    <div class="product-label label-sale">-30%</div>
                </div>
            </figure>
            <div class="product-details">
                <div class="category-list">
                    <a href="category.html" class="product-category">Macbook</a>
                </div>
                <h3 class="product-title">
                    <a href="<?= BASE_URL ?>/detailProduct">Macbook</a>
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
                    <del class="old-price">300000000 VND</del>
                    <span class="product-price">2000000 VND</span>
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
                

      </div>
    </div>
  </div>

</main>