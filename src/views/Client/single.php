<main class="main">
			<nav aria-label="breadcrumb" class="breadcrumb-nav">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="demo4.html"><i class="icon-home"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page">Blog Post</li>
					</ol>
				</div><!-- End .container -->
			</nav>

			<div class="container">
				<div class="row">
					<div class="col-lg-9">
						<article class="post single">
							<div class="post-media">
								<img src="<?=$baivietchitiet['hinh_anh']?>" alt="Post">
							</div><!-- End .post-media -->

							<div class="post-body">
								<div class="post-date">
									<span class="day">22</span>
									<span class="month">Jun</span>
								</div><!-- End .post-date -->

								<h2 class="post-title"><?=$baivietchitiet['tieu_de']?></h2>

								<div class="post-meta">
									<a href="#" class="hash-scroll">0 Comments</a>
								</div><!-- End .post-meta -->

								<div class="post-content">
									<p><?=$baivietchitiet['noi_dung']?>
									</p>
									</p>
								</div><!-- End .post-content -->

								<div class="post-share">
									<h3 class="d-flex align-items-center">
										<i class="fas fa-share"></i>
										Chia sẻ bài đăng này
									</h3>

									<div class="social-icons">
										<a href="#" class="social-icon social-facebook" target="_blank"
											title="Facebook">
											<i class="icon-facebook"></i>
										</a>
										<a href="#" class="social-icon social-twitter" target="_blank" title="Twitter">
											<i class="icon-twitter"></i>
										</a>
										<a href="#" class="social-icon social-linkedin" target="_blank"
											title="Linkedin">
											<i class="fab fa-linkedin-in"></i>
										</a>
										<a href="#" class="social-icon social-gplus" target="_blank" title="Google +">
											<i class="fab fa-google-plus-g"></i>
										</a>
										<a href="#" class="social-icon social-mail" target="_blank" title="Email">
											<i class="icon-mail-alt"></i>
										</a>
									</div><!-- End .social-icons -->
								</div><!-- End .post-share -->

								<div class="post-author">
									<h3><i class="far fa-user"></i>Tác Giả</h3>

									<figure>
										<a href="#">
											<img src="https://www.studytienganh.vn/upload/2022/10/115689.jpg" alt="author">
										</a>
									</figure>

									<div class="author-content">
										<h4><a href="#">Tuấn Kiệt</a></h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod
											odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in
											adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis
											placerat, felis enim ornare nisi, vitae mattis nulla ante id dui.</p>
									</div><!-- End .author.content -->
								</div><!-- End .post-author -->
								<div class="comment-respond">
									<h3>Để Lại Một Câu Trả Lời</h3>

									<form action="#">
										<p>Địa chỉ email của bạn sẽ không được công bố. Các trường bắt buộc được đánh dấu *</p>

										<div class="form-group">
											<label>Comment</label>
											<textarea cols="30" rows="1" class="form-control" required></textarea>
										</div><!-- End .form-group -->

										<div class="form-group">
											<label>Name</label>
											<input type="text" class="form-control" required>
										</div><!-- End .form-group -->

										<div class="form-group">
											<label>Email</label>
											<input type="email" class="form-control" required>
										</div><!-- End .form-group -->

										<div class="form-group">
											<label>Website</label>
											<input type="url" class="form-control">
										</div><!-- End .form-group -->

										<div class="form-group-custom-control mb-2">
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="save-name">
												<label class="custom-control-label" for="save-name">Lưu tên, email và trang web của tôi trong trình duyệt này cho lần bình luận tiếp theo.</label>
											</div><!-- End .custom-checkbox -->
										</div><!-- End .form-group-custom-control -->

										<div class="form-footer my-0">
											<button type="submit" class="btn btn-sm btn-primary">Post
												Comment</button>
										</div><!-- End .form-footer -->
									</form>
								</div><!-- End .comment-respond -->
							</div><!-- End .post-body -->
						</article><!-- End .post -->

						<hr class="mt-2 mb-1">
					</div><!-- End .col-lg-9 -->

					<div class="sidebar-toggle custom-sidebar-toggle">
						<i class="fas fa-sliders-h"></i>
					</div>
					<div class="sidebar-overlay"></div>
					<aside class="sidebar mobile-sidebar col-lg-3">
						<div class="sidebar-wrapper" data-sticky-sidebar-options='{"offsetTop": 72}'>
							<div class="widget widget-categories">
								<h4 class="widget-title">DANH MỤC BLOG</h4>

								<ul class="list">
									<li>
										<a href="#">Tất cả về máy tính</a>

										<ul class="list">
											<li><a href="#">máy tính</a></li>
										</ul>
									</li>
									<li><a href="#">máy tính</a></li>
									<li><a href="#">máy tính</a></li>
									<li><a href="#">máy tính</a></li>
									<li><a href="#">máy tính</a></li>
								</ul>
							</div><!-- End .widget -->
							

							<div class="widget">
							
								<h4 class="widget-title">BÀI Viết Gần Đây</h4>

								<?php foreach($baivietnew as $baiviet): ?>
							<div class="widget widget-post">
								
								<ul class="simple-post-list">
									<li>
										<div class="post-media">
											<a href="<?=BASE_URL?>/single">
												<img src="<?=$baiviet['hinh_anh']?>" alt="Post">
											</a>
										</div><!-- End .post-media -->
										<div class="post-info">
											<a href="<?=BASE_URL?>/single"><?=$baiviet['tieu_de']?></a>
											<div class="post-meta"><?=$baiviet['ngay_dang']?></div>
											<!-- End .post-meta -->
										</div><!-- End .post-info -->
									</li>
								</ul>
							</div><!-- End .widget -->
							<?php endforeach ?>

							</div><!-- End .widget -->
							

							<div class="widget">
								<h4 class="widget-title">Tags</h4>

								<div class="tagcloud">
									<a href="#">ARTICLES</a>
									<a href="#">CHAT</a>
								</div><!-- End .tagcloud -->
							</div><!-- End .widget -->
						</div><!-- End .sidebar-wrapper -->
					</aside><!-- End .col-lg-3 -->
				</div><!-- End .row -->
			</div><!-- End .container -->
		</main><!-- End .main -->