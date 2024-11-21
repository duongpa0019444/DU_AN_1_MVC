

        <main class="main main-test">
            <div class="container checkout-container">
                <ul class="checkout-progress-bar d-flex justify-content-center flex-wrap">
                    <li>
                        <a href="<?=BASE_URL?>/cart">Giỏ hàng</a>
                    </li>
                    <li class="active">
                        <a href="#">Kiểm tra</a>
                    </li>
                    <li class="disabled">
                        <a href="#">Hoàn tất đơn hàng</a>
                    </li>
                </ul>

                <div class="login-form-container">
                    

                    <div id="collapseOne" class="collapse">
                        <div class="login-section feature-box">
                            <div class="feature-box-content">
                                <form action="#" id="login-form">
                                    <p>
                                        If you have shopped with us before, please enter your details below. If you are a new customer, please proceed to the Billing & Shipping section.
                                    </p>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="mb-0 pb-1">Username or email <span
                                                        class="required">*</span></label>
                                                <input type="email" class="form-control" required />
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="mb-0 pb-1">Password <span
                                                        class="required">*</span></label>
                                                <input type="password" class="form-control" required />
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn">LOGIN</button>

                                    <div class="form-footer mb-1">
                                        <div class="custom-control custom-checkbox mb-0 mt-0">
                                            <input type="checkbox" class="custom-control-input" id="lost-password" />
                                            <label class="custom-control-label mb-0" for="lost-password">Remember
                                                me</label>
                                        </div>

                                        <a href="forgot-password.html" class="forget-password">Lost your password?</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="checkout-discount">
                   

                    <div id="collapseTwo" class="collapse">
                        <div class="feature-box">
                            <div class="feature-box-content">
                                <p>If you have a coupon code, please apply it below.</p>

                                <form action="#">
                                    <div class="input-group">
                                        <input type="text" class="form-control form-control-sm w-auto" placeholder="Coupon code" required="" />
                                        <div class="input-group-append">
                                            <button class="btn btn-sm mt-0" type="submit">
                                                Apply Coupon
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <form action="" method="post" class="row">
                    <div class="col-lg-7">
                        <ul class="checkout-steps">
                            <li>
                                <h2 class="step-title">Chi Tiết Thanh Toán</h2>

                                <div action="#" id="checkout-form">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Họ và Tên
                                                    <abbr class="required" title="required">*</abbr>
                                                </label>
                                                <input type="text" class="form-control" required name="ho_va_ten" />
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Số Điện Thoại <abbr class="required" title="required">*</abbr></label>
                                        <input type="tel" class="form-control" required name="so_dien_thoai" />
                                    </div>
                                        
                                    </div>

                                    

                                    <!-- <div class="select-custom">
                                    
                                        <select name="orderby" class="form-control">
                                            <option value="" disabled selected hidden>Tỉnh/Thành phố
                                            </option>
                                            <option value="1">Brunei</option>
                                            <option value="2">Bulgaria</option>
                                            <option value="3">Burkina Faso</option>
                                            <option value="4">Burundi</option>
                                            <option value="5">Cameroon</option>
                                        </select>
                                    </div>
                                    

                                    <div class="select-custom">
                                    
                                        <select name="orderby" class="form-control">
                                            <option value="" disabled selected hidden>Quận/Huyện
                                            </option>
                                            <option value="1">Brunei</option>
                                            <option value="2">Bulgaria</option>
                                            <option value="3">Burkina Faso</option>
                                            <option value="4">Burundi</option>
                                            <option value="5">Cameroon</option>
                                        </select>
                                    </div>
                                    
                                    <div class="select-custom">
                                    
                                        <select name="orderby" class="form-control">
                                            <option value="" disabled selected hidden>Phường/xã
                                            </option>
                                            <option value="1">Brunei</option>
                                            <option value="2">Bulgaria</option>
                                            <option value="3">Burkina Faso</option>
                                            <option value="4">Burundi</option>
                                            <option value="5">Cameroon</option>
                                        </select>
                                    </div> -->
                                    
                                    
                                    <div class="form-group mb-1 pb-2">
                                        <label>Địa chỉ cụ thể
                                            <abbr class="required" title="required">*</abbr></label>
                                        <input type="text" class="form-control" placeholder="Số nhà" required name="chi_tiet_dia_chi" />
                                    </div>

                                    <div class="form-group">
                                        <label class="order-comments">Ghi chú đơn hàng (optional)</label>
                                        <textarea class="form-control" placeholder="Notes about your order, e.g. special notes for delivery." required name="ghi_chu"></textarea>
                                    </div>

                                    
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- End .col-lg-8 -->

                    <div class="col-lg-5">
                        <div class="order-summary">
                            <h3>Đơn Hàng Của Bạn</h3>

                            <table class="table table-mini-cart">
                                <thead>
                                    <tr>
                                        <th colspan="2">Product</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($checkOrders as $checkOrder): ?>
                                        <tr>
                                            <td class="product-col">
                                                <h3 class="product-title">
                                                    <?=$checkOrder['ten_san_pham']?> ×
                                                    <span class="product-qty"><?=$checkOrder['so_luong']?></span>
                                                </h3>
                                            </td>

                                            <td class="price-col">
                                                <span><?= number_format($checkOrder['tong_phu'], 0, ',', '.') ?> VND</span>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                    
                                </tbody>
                                <tfoot>
                                    <tr class="cart-subtotal ">
                                        
                                    </tr>
                                    <tr class="order-shipping">
                                        <td class="text-left" colspan="2">
                                            <h4 class="m-b-sm">Phương thức thanh toán</h4>

                                            <div class="form-group form-group-custom-control">
                                                <div class="custom-control custom-radio d-flex">
                                                    <input type="radio" class="custom-control-input" name="id_thanh_toan" value="1" checked  />
                                                    <label class="custom-control-label">Thanh toán khi nhận hàng</label>
                                                </div>
                                                <!-- End .custom-checkbox -->
                                            </div>
                                            <!-- End .form-group -->

                                            <div class="form-group form-group-custom-control mb-0">
                                                <div class="custom-control custom-radio d-flex mb-0">
                                                    <input type="radio" name="id_thanh_toan" class="custom-control-input" value="2">
                                                    <label class="custom-control-label">Thanh toán chuyển khoản</label>
                                                </div>
                                                <!-- End .custom-checkbox -->
                                            </div>
                                            <!-- End .form-group -->
                                        </td>

                                    </tr>

                                    <tr class="order-total">
                                        <td>
                                            <h4>Tổng hóa đơn:</h4>
                                        </td>
                                        <td>
                                            <b class="total-price "><span><?=number_format($tong_tien, 0 , ',' , '.')?> VND</span></b>
                                            
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>

                            

                            <button type="submit" class="btn btn-dark btn-place-order">
                                Xác nhận đơn hàng
                            </button>
                        </div>
                        <!-- End .cart-summary -->
                    </div>
                    <!-- End .col-lg-4 -->
                </form>
                <!-- End .row -->
            </div>
            <!-- End .container -->
        </main>
        <!-- End .main -->
