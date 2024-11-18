
<?php if(!isset($_SESSION['admin'])): ?>

    <footer class="footer bg-dark">
            <div class="footer-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="widget">
                                <h4 class="widget-title">THÔNG TIN LIÊN HỆ</h4>
                                <ul class="contact-info">
                                    <li>
                                        <span class="contact-info-label">ĐỊA CHỈ:</span>P.Đông Vệ - TP.Thanh Hóa - Thanh Hóa - Việt Nam</li>
                                    <li>
                                        <span class="contact-info-label">SỐ ĐIỆN THOẠI</span><a href="tel:">0379330492</a>
                                    </li>
                                    <li>
                                        <span class="contact-info-label">EMAIL:</span> <a href="https://portotheme.com/cdn-cgi/l/email-protection#0b666a62674b6e736a667b676e25686466"><span class="__cf_email__" data-cfemail="224f434b4e62475a434f524e470c414d4f">cuahanglaptopdpk36@gmail.com</span></a>
                                    </li>
                                    <li>
                                        <span class="contact-info-label">NGÀY/ GIỜ LÀM VIỆC:</span> Từ thứ 2 đến chủ nhật / 7:00 AM - 22:30 PM
                                    </li>
                                    <img src="http://online.gov.vn/Content/EndUser/LogoCCDVSaleNoti/logoSaleNoti.png" alt="" style="width: 70%; height: 70%;">
                                    <div class="social-icons" style="padding-top: 15px;">
                                    <a href="#" class="social-icon social-facebook icon-facebook" target="_blank" title="Facebook"></a>
                                    <a href="#" class="social-icon social-twitter icon-twitter" target="_blank" title="Twitter"></a>
                                    <a href="#" class="social-icon social-instagram icon-instagram" target="_blank" title="Instagram"></a>
                                </div>
                                </ul>
                              
                             
                                <!-- End .social-icons -->
                            </div>
                            <!-- End .widget -->
                        </div>
                        <!-- End .col-lg-3 -->

                        <div class="col-lg-3 col-sm-6">
                            <div class="widget">
                                <h4 class="widget-title">DỊCH VỤ KHÁCH HÀNG</h4>

                                <ul class="links">
                                    <li><a href="#">Chính sách khách hàng thân thiết</a></li>
                                    <li><a href="#">Chính sách kiểm hàng</a></li>
                                    <li><a href="#">Chính sách đổi hàng</a></li>
                                    <li><a href="#">Chính sách bảo hành</a></li>
                                    <li><a href="#">Chính sách bảo mật</a></li>
                                    <li><a href="#">Chính sách vận chuyển và thanh toán</a></li>
                                    <li><a href="#">Hướng dẫn chọn laptop</a></li>
                                </ul>
                            </div>
                            <!-- End .widget -->
                        </div>
                        <!-- End .col-lg-3 -->

                        <div class="col-lg-3 col-sm-6">
                            <div class="widget">
                                <h4 class="widget-title">VỊ TRÍ CỬA HÀNG</h4>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3754.4095618955976!2d105.77616049625242!3d19.780224994149933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1730358400272!5m2!1svi!2s" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                        <!-- End .col-lg-3 -->

                        <div class="col-lg-3 col-sm-6">
                            <div class="widget widget-newsletter">
                                <h4 class="widget-title">ĐĂNG KÝ NHẬN ƯU ĐÃI TỪ LAPTOP DPK</h4>
                                <p>Nhận thông tin sản phẩm mới và các chương trình khuyến mại của LAPTOP DPK
                                </p>
                                <form action="#" class="mb-0">
                                    <input type="email" class="form-control m-b-3" placeholder="Nhập email của bạn" required>

                                    <input type="submit" class="btn btn-primary shadow-none" value="Đăng ký">
                                </form>
                                <h4 class="widget-title" style="padding-top: 15px;">PHƯƠNG THỨC THANH TOÁN</h4>
                                     <div class="footer-right ml-auto mt-1 mt-sm-0">
                            <div class="payment-icons">
                                <span class="payment-icon visa" style="background-image: url(assets/Client/images/payments/payment-visa.svg)"></span>
                                <span class="payment-icon paypal" style="background-image: url(assets/Client/images/payments/payment-paypal.svg)"></span>
                                <span class="payment-icon stripe" style="background-image: url(assets/Client/images/payments/payment-stripe.png)"></span>
                                <span class="payment-icon verisign" style="background-image:  url(assets/Client/images/payments/payment-verisign.svg)"></span>
                            </div>
                        </div>
                            </div>
                            <!-- End .widget -->
                        </div>
                        <!-- End .col-lg-3 -->
                    </div>
                    <!-- End .row -->
                </div>
                <!-- End .container -->
            </div>
            <!-- End .footer-middle -->

        </footer>
        <!-- End .footer -->


<?php else: ?>


         <!-- ========== Footer Start ========== -->
         <footer class="footer">
                   <div class="container-fluid">
                       <div class="row">
                           <div class="col-12 text-center">
                               <script>document.write(new Date().getFullYear())</script> &copy; Nhóm 4 - Dự Án 1 <iconify-icon icon="fluent-emoji:laptop"></iconify-icon> <a
                                   href="#" class="fw-bold footer-text" target="_blank">LAPTOP DPK</a>
                           </div>
                       </div>
                   </div>
        </footer>
               <!-- ========== Footer End ========== -->
<?php endif ?>