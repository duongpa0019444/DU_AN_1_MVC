<?php if(isset($_SESSION['user_id'])): ?>
    
    <!-- Khi đã đăng nhập khoặc đăng ký -->
		<main class="main">
			<div class="page-header">
				<div class="container d-flex flex-column align-items-center">
					<nav aria-label="breadcrumb" class="breadcrumb-nav">
						<div class="container">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="<?=BASE_URL?>/home">Trang chủ</a></li>
								<li class="breadcrumb-item"><a href="#">Tài khoản</a></li>
								
							</ol>
						</div>
					</nav>

					<h1>Tài khoản của bạn</h1>
				</div>
			</div>

			<div class="container account-container custom-account-container">
				<div class="row">
					<div class="sidebar widget widget-dashboard mb-lg-0 mb-3 col-lg-3 order-0">
						<h2 class="text-uppercase">Tài khoản của bạn </h2>
						<ul class="nav nav-tabs list flex-column mb-0" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="dashboard-tab" data-toggle="tab" href="#dashboard"
									role="tab" aria-controls="dashboard" aria-selected="true">Bảng điều khiển</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" id="order-tab" data-toggle="tab" href="#order" role="tab"
									aria-controls="order" aria-selected="true">Đơn hàng</a>
							</li>

							
							<li class="nav-item">
								<a class="nav-link" id="address-tab" data-toggle="tab" href="#address" role="tab"
									aria-controls="address" aria-selected="false">Địa chỉ</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" id="edit-tab" data-toggle="tab" href="#edit" role="tab"
									aria-controls="edit" aria-selected="false">Chi tiết tài khoản</a>
							</li>
							
							<li class="nav-item">
								<a class="nav-link" id="edit-tab" data-toggle="tab" href="#wishlist" role="tab"
									aria-controls="edit" aria-selected="false">Sản phẩm yêu thích</a>
							</li>
							
                            <?php if($_SESSION['vai_tro']=="admin"): ?>
                                <li class="nav-item">
							    	<a class="nav-link" href="<?=BASE_URL?>/admin">Quản Lý Website</a>
							    </li>
                            <?php endif ?>
							<li class="nav-item">
								<a class="nav-link" href="<?=BASE_URL?>/dangxuat">Đăng xuất</a>
							</li>
						</ul>
					</div>
					<div class="col-lg-9 order-lg-last order-1 tab-content">
						<div class="tab-pane fade show active" id="dashboard" role="tabpanel">
							<div class="dashboard-content">
								

								<h3>Bảng điều khiển</h3>

								<div class="row row-lg">
									<div class="col-6 col-md-4">
										<div class="feature-box text-center pb-4">
											<a href="#order" class="link-to-tab"><i
													class="sicon-social-dropbox"></i></a>
											<div class="feature-box-content">
												<h3>Đơn hàng</h3>
											</div>
										</div>
									</div>


									<div class="col-6 col-md-4">
										<div class="feature-box text-center pb-4">
											<a href="#address" class="link-to-tab"><i
													class="sicon-location-pin"></i></a>
											<div class="feature-box-content">
												<h3>Địa chỉ</h3>
											</div>
										</div>
									</div>

									<div class="col-6 col-md-4">
										<div class="feature-box text-center pb-4">
											<a href="#edit" class="link-to-tab"><i class="icon-user-2"></i></a>
											<div class="feature-box-content p-0">
												<h3>Chi tiết tài khoản</h3>
											</div>
										</div>
									</div>

									<div class="col-6 col-md-4">
										<div class="feature-box text-center pb-4">
											<a href="#wishlist"><i class="sicon-heart"></i></a>
											<div class="feature-box-content">
												<h3>Sản phẩm yêu thích</h3>
											</div>
										</div>
									</div>

									<div class="col-6 col-md-4">
										<div class="feature-box text-center pb-4">
											<a href="login.html"><i class="sicon-logout"></i></a>
											<div class="feature-box-content">
												<h3>Đăng xuất</h3>
											</div>
										</div>
									</div>
								</div><!-- End .row -->
							</div>
						</div><!-- End .tab-pane -->

						<div class="tab-pane fade" id="order" role="tabpanel">
							<div class="order-content">
								<h3 class="account-sub-title d-none d-md-block"><i
										class="sicon-social-dropbox align-middle mr-3"></i>ĐƠN HÀNG </h3>
								<div class="order-table-container text-center">
									<table class="table table-order text-left">
										<thead>
											<tr>
												<th class="order-id">Mã đơn</th>
												<th class="order-date">Ngày đặt</th>
												<th class="order-price">Tổng đơn</th>
												<th class="order-status">Trạng thái</th>
												<th class="order-status">ghi chú</th>
												<th class="order-status">Phương thức</th>
												<th class="order-status" >Thao tác</th>


												<!-- <th class="order-action">ACTIONS</th> -->
											</tr>
										</thead>
										<tbody>
											<?php foreach($orders as $order): ?>
												<tr>
													<td class="text-center p-2">#<?=$order['id']?></td>
													<td class="text-center p-2"><?=$order['thoi_gian']?></td>
													<td class="text-center p-2"><?= number_format($order['tong_tien'], 0, ',', '.') ?>VND</td>
													<td class="text-center p-2">
														<?php if($order['trang_thai']==1): ?>
															
															<span class="badge bg-light  border-secondary text-secondary  px-2 py-1 fs-7">Đang Chờ duyệt</span>
														
														<?php elseif($order['trang_thai']==2): ?>
															
															<span class="badge bg-info  border-secondary text-light  px-2 py-1 fs-7">Đã duyệt - Đang xử lý</span>
														
														<?php elseif($order['trang_thai']==3): ?>
															
															<span class="badge bg-primary  border-secondary text-light  px-2 py-1 fs-7">Đang giao hàng</span>
														
														<?php elseif($order['trang_thai']==4): ?>
															
															<span class="badge bg-success  border-secondary text-light  px-2 py-1 fs-7">Đã giao hàng</span>
														
														<?php elseif($order['trang_thai']==5): ?>
															
															<span class="badge bg-warning border-secondary text-light  px-2 py-1 fs-7">Đã hủy</span>
														
														<?php else: ?>
															
															<span class="badge bg-danger border-secondary text-light  px-2 py-1 fs-7">Đã hoàn hàng</span>
														
														<?php endif ?>

													</td>
													<td class="text-center p-2">Ghi chú 1</td>
													<td class="text-center p-2">
														<?php if($order['id_thanh_toan']==1): ?>
															<span class="badge bg-success text-white  px-2 py-1 fs-7">Thanh toán khi nhận hàng</span>
														<?php else: ?>
															<span class="badge bg-primary text-white  px-2 py-1 fs-7">Thanh toán chuyển khoản</span>
														<?php endif ?>
													</td>

													<td class="text-center p-2">
														<?php if($order['trang_thai'] == 5 || $order['trang_thai'] == 6): ?>
															<a href="#detailProduct" class="link-to-tab"><button type="button" class="btn btn-primary rounded">Chi tiết</button></a>

														<?php else: ?>
															
															<button type="button" class="btn btn-light rounded">Hủy</button>
															<a href="#detailProduct" class="link-to-tab"><button type="button" class="btn btn-primary rounded">Chi tiết</button></a>
														
														<?php endif ?>
													</td>
													
												</tr>
											<?php endforeach ?>
										</tbody>
									</table>
									<hr class="mt-0 mb-3 pb-2" />

									
								</div>
							</div>
						</div><!-- End .tab-pane -->

						
						<div class="tab-pane fade" id="address" role="tabpanel">
							<h3 class="account-sub-title d-none d-md-block mb-1"><i
									class="sicon-location-pin align-middle mr-3"></i>Địa chỉ</h3>
							<div class="addresses-content">
								<p class="mb-4">
							
								Các địa chỉ sau sẽ được sử dụng trên trang thanh toán theo mặc định.
								</p>

								<div class="row">
									
									<div class="address col-md-6 mt-5 mt-md-0">
										<div class="heading d-flex">
											<h4 class="text-dark mb-0">
												Địa chỉ giao hàng
											</h4>
										</div>

										<div class="address-box">
										Bạn chưa thiết lập loại địa chỉ này?
										</div>

										<a href="#shipping" class="btn btn-default address-action link-to-tab">Thêm địa chỉ</a>
									</div>
								</div>
							</div>
						</div><!-- End .tab-pane -->

						<div class="tab-pane fade" id="edit" role="tabpanel">
							<h3 class="account-sub-title d-none d-md-block mt-0 pt-1 ml-1"><i
									class="icon-user-2 align-middle mr-3 pr-1"></i>Chi tiết tài khoản</h3>
							<div class="account-content">
								<form action="">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="acc-name">Họ và tên<span class="required">*</span></label>
												<input type="text" class="form-control" value="Name"
													id="acc-name" name="acc-name" required />
											</div>
										</div>

										
									</div>



									<div class="form-group mb-4">
										<label for="acc-email">Địa chỉ E-mail <span class="required">*</span></label>
										<input type="email" class="form-control" id="acc-email" name="acc-email"
											value="laptopdpk1314@gmail.com" required />
									</div>

									<div class="form-group mb-4">
										<label for="acc-email">Số Điện Thoại<span class="required">*</span></label>
										<input type="number" class="form-control" id="acc-email" name="acc-email"
											value="0123456789" required />
									</div>

									<div class="change-password">
										<h3 class="text-uppercase mb-2">Thay đổi mật khẩu</h3>

										<div class="form-group">
											<label for="acc-password">Mật Khẩu Cũ:</label>
											<input type="password" class="form-control" id="acc-password"
												name="acc-password" />
										</div>

										<div class="form-group">
											<label for="acc-password">Mật Khẩu Mới</label>
											<input type="password" class="form-control" id="acc-new-password"
												name="acc-new-password" />
										</div>

										<div class="form-group">
											<label for="acc-password">Xác Nhận Mật Khẩu mới</label>
											<input type="password" class="form-control" id="acc-confirm-password"
												name="acc-confirm-password" />
										</div>
									</div>

									<div class="form-footer mt-3 mb-0">
										<button type="submit" class="btn btn-dark mr-0">
											Lưu Thay Đổi
										</button>
									</div>
								</form>
							</div>
						</div><!-- End .tab-pane -->



						<div class="tab-pane fade" id="wishlist" role="tabpanel">
							<div class="order-content">
								<h3 class="account-sub-title d-none d-md-block"><i
										class="sicon-social-dropbox align-middle mr-3"></i>Sản phẩm yêu thích</h3>
								<div class="order-table-container text-center">
									<table class="table table-order text-left">
										<thead>
											<tr style="text-align: center;">
												<th class="order-id">Mã sản phẩm</th>
												<th class="order-id">Hình ảnh</th>
												<th class="order-date">Tên sản phẩm</th>
												<th class="order-price">Giá</th>
												<th class="order-status">Hành Động</th>

												<!-- <th class="order-action">ACTIONS</th> -->
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="text-center">SP001</td>
												<td class="text-center"><img width="70px" src="assets/Client/images/banner_laptop/banner_1.jpg" alt=""></td>
												<td class="text-center">Laptop Macbook Air 1</td>
												<td class="text-center">18000000 VND</td>
												<td class="text-center"><a href=""><button class="btn btn-dark">Thêm giỏ hàng</button></a></td>
											</tr>

											<tr>
												<td class="text-center">SP001</td>
												<td class="text-center"><img width="70px" src="assets/Client/images/banner_laptop/banner_1.jpg" alt=""></td>
												<td class="text-center">Laptop Macbook Air 1</td>
												<td class="text-center">18000000 VND</td>
												<td class="text-center"><a href=""><button class="btn btn-dark">Thêm giỏ hàng</button></a></td>
											</tr>

											<tr>
												<td class="text-center">SP001</td>
												<td class="text-center"><img width="70px" src="assets/Client/images/banner_laptop/banner_1.jpg" alt=""></td>
												<td class="text-center">Laptop Macbook Air 1</td>
												<td class="text-center">18000000 VND</td>
												<td class="text-center"><a href=""><button class="btn btn-dark">Thêm giỏ hàng</button></a></td>
											</tr>
										</tbody>
									</table>
									<hr class="mt-0 mb-3 pb-2" />

									
								</div>
							</div>
						</div><!-- End .tab-pane -->


						<div class="tab-pane fade" id="detailProduct" role="tabpanel">
							<div class="address account-content mt-0 pt-2">
								<h4 class="title mb-3">Chi tiết đơn hàng</h4>

								<table class="table table-order text-left">
									<thead>
										<tr style="text-align: center;">
											<th class="order-id">Mã sản phẩm</th>
											<th class="order-id">Hình ảnh</th>
											<th class="order-date">Tên sản phẩm</th>
											<th class="order-price">Giá</th>
											<th class="order-status">Hành Động</th>
											<!-- <th class="order-action">ACTIONS</th> -->
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="text-center">SP001</td>
											<td class="text-center"><img width="70px" src="assets/Client/images/banner_laptop/banner_1.jpg" alt=""></td>
											<td class="text-center">Laptop Macbook Air 1</td>
											<td class="text-center">18000000 VND</td>
											<td class="text-center"><a href=""><button class="btn btn-dark">Thêm giỏ hàng</button></a></td>
										</tr>
										<tr>
											<td class="text-center">SP001</td>
											<td class="text-center"><img width="70px" src="assets/Client/images/banner_laptop/banner_1.jpg" alt=""></td>
											<td class="text-center">Laptop Macbook Air 1</td>
											<td class="text-center">18000000 VND</td>
											<td class="text-center"><a href=""><button class="btn btn-dark">Thêm giỏ hàng</button></a></td>
										</tr>
										<tr>
											<td class="text-center">SP001</td>
											<td class="text-center"><img width="70px" src="assets/Client/images/banner_laptop/banner_1.jpg" alt=""></td>
											<td class="text-center">Laptop Macbook Air 1</td>
											<td class="text-center">18000000 VND</td>
											<td class="text-center"><a href=""><button class="btn btn-dark">Thêm giỏ hàng</button></a></td>
										</tr>
									</tbody>
								</table>
								<hr class="mt-0 mb-3 pb-2" />
							</div>
						</div><!-- End .tab-pane -->

						<div class="tab-pane fade" id="shipping" role="tabpanel">
							<div class="address account-content mt-0 pt-2">
								<h4 class="title mb-3">Shipping Address</h4>

								<form class="mb-2" action="#">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>First name <span class="required">*</span></label>
												<input type="text" class="form-control" required />
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label>Last name <span class="required">*</span></label>
												<input type="text" class="form-control" required />
											</div>
										</div>
									</div>

									<div class="form-group">
										<label>Company </label>
										<input type="text" class="form-control">
									</div>

									<div class="select-custom">
										<label>Country / Region <span class="required">*</span></label>
										<select name="orderby" class="form-control">
											<option value="" selected="selected">British Indian Ocean Territory
											</option>
											<option value="1">Brunei</option>
											<option value="2">Bulgaria</option>
											<option value="3">Burkina Faso</option>
											<option value="4">Burundi</option>
											<option value="5">Cameroon</option>
										</select>
									</div>

									<div class="form-group">
										<label>Street address <span class="required">*</span></label>
										<input type="text" class="form-control"
											placeholder="House number and street name" required />
										<input type="text" class="form-control"
											placeholder="Apartment, suite, unit, etc. (optional)" required />
									</div>

									<div class="form-group">
										<label>Town / City <span class="required">*</span></label>
										<input type="text" class="form-control" required />
									</div>

									<div class="form-group">
										<label>State / Country <span class="required">*</span></label>
										<input type="text" class="form-control" required />
									</div>

									<div class="form-group">
										<label>Postcode / ZIP <span class="required">*</span></label>
										<input type="text" class="form-control" required />
									</div>

									<div class="form-footer mb-0">
										<div class="form-footer-right">
											<button type="submit" class="btn btn-dark py-4">
												Save Address
											</button>
										</div>
									</div>
								</form>
							</div>
						</div><!-- End .tab-pane -->

					</div><!-- End .tab-content -->
				</div><!-- End .row -->
			</div><!-- End .container -->

			<div class="mb-5"></div><!-- margin -->
		</main><!-- End .main -->

	
<?php else: ?>
    
    <!-- Khi chưa đăng nhập hoặc đăng ký -->
		<main class="main">
			<div class="page-header">
				<div class="container d-flex flex-column align-items-center">
					<nav aria-label="breadcrumb" class="breadcrumb-nav">
						<div class="container">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="<?BASE_URL?>/">Tang chủ</a></li>
								<li class="breadcrumb-item active" aria-current="page">
									Tài khoản
								</li>
							</ol>
						</div>
					</nav>

					<h1>Tài khoản của bạn</h1>
				</div>
			</div>

			<div class="container login-container">
				<div class="row">
					<div class="col-lg-10 mx-auto">
						<div class="row">
							<div class="col-md-6">
								<div class="heading mb-1">
									<h2 class="title">Đăng Nhập</h2>
								</div>

								<form action="" method="post">
									<label for="login-email">
										số điện thoại đăng nhập
										<span class="required">*</span>
									</label>
									<input type="number" min="" class="form-input form-wide" id="login-email" name="so_dien_thoai" required />

									<label for="login-password">
										Mật khẩu
										<span class="required">*</span>
									</label>
									<input type="password" class="form-input form-wide" id="login-password" name="mat_khau" required />

									<div class="form-footer">
										<div class="custom-control custom-checkbox mb-0">
											<input type="checkbox" class="custom-control-input" id="lost-password" />
											<label class="custom-control-label mb-0" for="lost-password">Nhớ tài khoản?</label>
										</div>

										
									</div>

									
										<button type="submit" name="logIn" class="btn btn-dark btn-md w-100">
											Đăng nhập
										</button>
									
								</form>
							</div>
							<div class="col-md-6">
								<div class="heading mb-1">
									<h2 class="title">Đăng Ký</h2>
								</div>

								<form action="" method="post">
									<label for="register-email">
										Họ và Tên
										<span class="required">*</span>
									</label>
									<input type="text" min="5" class="form-input form-wide" id="register-email" name="ten_user" required />


									<label for="register-email">
										Số điện thoại
										<span class="required">*</span>
									</label>
									<input type="number" min="" class="form-input form-wide" id="register-email" name="so_dien_thoai" required />

                                    <label for="register-email">
										Email
										<span class="required">*</span>
									</label>
									<input type="email" min="100" class="form-input form-wide" id="register-email" name="email" required />

									<label for="register-password">
										Mật khẩu
										<span class="required">*</span>
									</label>
									<input type="password" class="form-input form-wide" id="register-password" name="mat_khau" required />
									
									<p class="text-danger"><?= $mess??''; ?></p>


									<div class="form-footer mb-2">
										<button type="submit" name="signIn" class="btn btn-dark btn-md w-100 mr-0">
											Đăng ký
										</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main><!-- End .main -->

	
<?php endif ?>