

<?php if(!isset($_SESSION['admin'])): ?>
    <!-- End .top-notice -->

    <header class="header">

        <div class="header-middle sticky-header" data-sticky-options="{'mobile': true}">
            <div class="container">
                <div class="header-left col-lg-2 w-auto pl-0">
                    <button class="mobile-menu-toggler text-primary mr-2" type="button">
                        <i class="fas fa-bars"></i>
                    </button>
                    <a href="demo4.html" class="logo">
                        <img src="<?=BASE_URL?>/assets/Client/images/logo1.png" width="111" height="44" alt="Porto Logo">
                    </a>
                </div>
                <!-- End .header-left -->
                    
                <div class="header-right w-lg-max">
                    <div class="header-icon header-search header-search-inline header-search-category w-lg-max text-right mt-0">
                        <a href="#" class="search-toggle" role="button"><i class="icon-search-3"></i></a>
                        <form action="<?=BASE_URL?>/product" method="get">
                            <div class="header-search-wrapper">
                                <input type="search" class="form-control" name="key_word" id="q" placeholder="Search...">
                                <div class="select-custom">
                                    <select id="cat" name="idSM">
                                        <option value="" disabled selected hidden>Danh Mục</option>
                                        <?php foreach($allCategoryHeaders as $allCategoryHeader): ?>
                                             <option value="" disabled><?=$allCategoryHeader['ten_danh_muc']?></option>
                                             <?php foreach($allCategorySmallHeaders as $allCategorySmallHeader): ?>
                                                  <?php if($allCategoryHeader['id'] == $allCategorySmallHeader['id_danh_muc']): ?>
                                                       <option value="<?=$allCategorySmallHeader['id']?>">- <?=$allCategorySmallHeader['ten_danh_muc']?></option>
                                                  <?php endif ?>
                                             <?php endforeach ?>
                                             
                                        <?php endforeach ?>
                                        
                                    </select>
                                </div>
                                <!-- End .select-custom -->
                                <button class="btn icon-magnifier p-0" title="search" type="submit"></button>
                            </div>
                            <!-- End .header-search-wrapper -->
                        </form>
                    </div>
                    <!-- End .header-search -->

                    <div class="header-contact d-none d-lg-flex pl-4 pr-4">
                        <img alt="phone" src="<?=BASE_URL?>/assets/Client/images/phone.png" width="30" height="30" class="pb-1">
                        <h6><span>Gọi cho chúng tôi ngay</span><a href="tel:#" class="text-dark font1">0961.469.353</a></h6>
                    </div>

                    <?php if(isset($_SESSION['user_id'])): ?>
                     <a href="<?=BASE_URL?>/acout" class="header-icon" title="acout"><img src="<?=BASE_URL?>/<?=$_SESSION['img_user']?>" style="width:40px; height:40px"  class="rounded-circle" alt=""></a>

                         
                    <?php else: ?>
                     <a href="<?=BASE_URL?>/acout" class="header-icon" title="acout"><i class="icon-user-2"></i></a>
                    <?php endif ?>

                    <!-- <a href="#" class="header-icon" title="wishlist"><i class="icon-wishlist-2"></i></a> -->

                    <div class="dropdown cart-dropdown">
                        <a href="<?=BASE_URL?>/cart" title="Cart" class="dropdown-toggle dropdown-arrow cart-toggle">
                            <i class="minicart-icon"></i>
                            <span class="cart-count badge-circle"><?=$tong_product['tong_product']??""?></span>
                        </a>

                    </div>
                    <!-- End .dropdown -->
                </div>
                <!-- End .header-right -->
            </div>
            <!-- End .container -->
        </div>
        <!-- End .header-middle -->



        <div class="header-bottom sticky-header d-none d-lg-block" data-sticky-options="{'mobile': false}">
            <div class="container">
                <nav class="main-nav w-100">
                    <ul class="menu d-flex justify-content-between">
                        <li class="active">
                            <a href="<?=BASE_URL?>/">Trang chủ</a>
                        </li>

                        <li>
                         
                            <a href="<?=BASE_URL?>/product">Sản Phẩm</a>

                            <div class="megamenu megamenu-fixed-width">
                                <div class="row">
                                   <?php foreach($allCategorySmallHeaders as $allCategorySmallHeader): ?>
                                        <div class="col-lg-4">
                                            <a href="<?=BASE_URL?>/product?idSM=<?=$allCategorySmallHeader['id']?>" class=""><?=$allCategorySmallHeader['ten_danh_muc']?></a>
                                            
                                        </div>
                                    <!-- End .col-lg-4 -->
                                   <?php endforeach ?>
        
                                </div>
                                <!-- End .row -->
                            </div>
                            <!-- End .megamenu -->
                        </li>

                        <li><a href="<?=BASE_URL?>/blog">Bài Viết</a></li>

                        <li><a href="<?=BASE_URL?>/about">Giới Thiệu</a></li>

                        <li><a href="<?=BASE_URL?>/contact">Liên Hệ</a></li>

                        
                    </ul>
                </nav>
                
             
            
        </div>
        <!-- End .header-top -->
            </div>
            <!-- End .container -->
        </div>
        <!-- End .header-bottom -->
    </header>
    <!-- End .header -->


<?php else: ?>


         <!-- START Wrapper -->
         <div class="wrapper">

<!-- ========== Topbar Start ========== -->
<header class="topbar">
     <div class="container-fluid">
          <div class="navbar-header">
               <div class="d-flex align-items-center">
                    <!-- Menu Toggle Button -->
                    <div class="topbar-item">
                         <button type="button" class="button-toggle-menu me-2">
                              <iconify-icon icon="solar:hamburger-menu-broken" class="fs-24 align-middle"></iconify-icon>
                         </button>
                    </div>

                    <!-- Menu Toggle Button -->
                    <div class="topbar-item">
                         <h4 class="fw-bold topbar-button pe-none text-uppercase mb-0">Welcome!</h4>
                    </div>
               </div>

               <div class="d-flex align-items-center gap-1">

                    <!-- Theme Color (Light/Dark) -->
                    <div class="topbar-item">
                         <button type="button" class="topbar-button" id="light-dark-mode">
                              <iconify-icon icon="solar:moon-bold-duotone" class="fs-24 align-middle"></iconify-icon>
                         </button>
                    </div>

                    <!-- Notification -->
                    

                    <!-- Theme Setting -->
                    <div class="topbar-item d-none d-md-flex">
                         <button type="button" class="topbar-button" id="theme-settings-btn" data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
                              <iconify-icon icon="solar:settings-bold-duotone" class="fs-24 align-middle"></iconify-icon>
                         </button>
                    </div>

      

                    <!-- User -->
                    <div class="dropdown topbar-item">
                         <a type="button" class="topbar-button" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span class="d-flex align-items-center">
                                   <img class="rounded-circle" width="40" height="40" src="<?=BASE_URL?>/<?=$_SESSION['img_user']?>" alt="avatar-3">
                              </span>
                         </a>
                         
                    </div>

                    <!-- App Search-->
                    <!-- <form class="app-search d-none d-md-block ms-2">
                         <div class="position-relative">
                              <input type="search" class="form-control" placeholder="Search..." autocomplete="off" value="">
                              <iconify-icon icon="solar:magnifer-linear" class="search-widget-icon"></iconify-icon>
                         </div>
                    </form> -->
               </div>
          </div>
     </div>
</header>


<!-- Right Sidebar (Theme Settings) -->
<div>
     <div class="offcanvas offcanvas-end border-0" tabindex="-1" id="theme-settings-offcanvas">
          <div class="d-flex align-items-center bg-primary p-3 offcanvas-header">
               <h5 class="text-white m-0">Cài đặt chủ đề</h5>
               <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>

          <div class="offcanvas-body p-0">
               <div data-simplebar class="h-100">
                    <div class="p-3 settings-bar">

                         <div>
                              <h5 class="mb-3 font-16 fw-semibold">Bảng màu</h5>

                              <div class="form-check mb-2">
                                   <input class="form-check-input" type="radio" name="data-bs-theme" id="layout-color-light" value="light">
                                   <label class="form-check-label" for="layout-color-light">Sáng</label>
                              </div>

                              <div class="form-check mb-2">
                                   <input class="form-check-input" type="radio" name="data-bs-theme" id="layout-color-dark" value="dark">
                                   <label class="form-check-label" for="layout-color-dark">Tối</label>
                              </div>
                         </div>    

                         <div>
                              <h5 class="my-3 font-16 fw-semibold">Thanh màu trên cùng</h5>

                              <div class="form-check mb-2">
                                   <input class="form-check-input" type="radio" name="data-topbar-color" id="topbar-color-light" value="light">
                                   <label class="form-check-label" for="topbar-color-light">Sáng</label>
                              </div>
                              <div class="form-check mb-2">
                                   <input class="form-check-input" type="radio" name="data-topbar-color" id="topbar-color-dark" value="dark">
                                   <label class="form-check-label" for="topbar-color-dark">Tối</label>
                              </div>
                         </div>


                         <div>
                              <h5 class="my-3 font-16 fw-semibold">Màu menu</h5>

                              <div class="form-check mb-2">
                                   <input class="form-check-input" type="radio" name="data-menu-color" id="leftbar-color-light" value="light">
                                   <label class="form-check-label" for="leftbar-color-light">
                                        Sáng 
                                   </label>
                              </div>

                              <div class="form-check mb-2">
                                   <input class="form-check-input" type="radio" name="data-menu-color" id="leftbar-color-dark" value="dark">
                                   <label class="form-check-label" for="leftbar-color-dark">
                                        Tối
                                   </label>
                              </div>
                         </div>

                         <div>
                              <h5 class="my-3 font-16 fw-semibold">Kích thước thanh bên</h5>

                              <div class="form-check mb-2">
                                   <input class="form-check-input" type="radio" name="data-menu-size" id="leftbar-size-default" value="default">
                                   <label class="form-check-label" for="leftbar-size-default">
                                        Mặc định
                                   </label>
                              </div>

                              <div class="form-check mb-2">
                                   <input class="form-check-input" type="radio" name="data-menu-size" id="leftbar-size-small" value="condensed">
                                   <label class="form-check-label" for="leftbar-size-small">
                                        Đặc
                                   </label>
                              </div>

                              <div class="form-check mb-2">
                                   <input class="form-check-input" type="radio" name="data-menu-size" id="leftbar-hidden" value="hidden">
                                   <label class="form-check-label" for="leftbar-hidden">
                                        Ẩn
                                   </label>
                              </div>

                              <div class="form-check mb-2">
                                   <input class="form-check-input" type="radio" name="data-menu-size" id="leftbar-size-small-hover-active" value="sm-hover-active">
                                   <label class="form-check-label" for="leftbar-size-small-hover-active">
                                        Hoạt động di chuột nhỏ
                                   </label>
                              </div>

                              <div class="form-check mb-2">
                                   <input class="form-check-input" type="radio" name="data-menu-size" id="leftbar-size-small-hover" value="sm-hover">
                                   <label class="form-check-label" for="leftbar-size-small-hover">
                                        Di chuột nhỏ
                                   </label>
                              </div>
                         </div>

                    </div>
               </div>
          </div>
          <div class="offcanvas-footer border-top p-3 text-center">
               <div class="row">
                    <div class="col">
                         <button type="button" class="btn btn-danger w-100" id="reset-layout">Reset</button>
                    </div>
               </div>
          </div>
     </div>
</div>
<!-- ========== Topbar End ========== -->








<!-- ========== App Menu Start ========== -->
<div class="main-nav">
     <!-- Sidebar Logo -->
     <div class="logo-box">
          <a href="index.html" class="logo-dark">
               <img src="<?=BASE_URL?>/assets/Admin/images/logo_black_2.png" class="logo-sm" alt="logo sm">
               <img src="<?=BASE_URL?>/assets/Admin/images/logo_black.png" class="logo-lg" alt="logo dark">
          </a>

          <a href="index.html" class="logo-light">
               <img src="<?=BASE_URL?>/assets/Admin/images/logo_white_2.png" class="logo-sm" alt="logo sm">
               <img src="<?=BASE_URL?>/assets/Admin/images/logo_white.png" class="logo-lg" alt="logo light">
          </a>

          
     </div>
   
     <!-- Menu Toggle Button (sm-hover) -->
     <button type="button" class="button-sm-hover" aria-label="Show Full Sidebar">
          <iconify-icon icon="solar:double-alt-arrow-right-bold-duotone" class="button-sm-hover-icon"></iconify-icon>
     </button>







     <div class="scrollbar" data-simplebar>
          <ul class="navbar-nav" id="navbar-nav">

               <li class="menu-title">Tổng quát</li>

               <li class="nav-item">
                    <a class="nav-link" href="<?=BASE_URL?>/admin">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:widget-5-bold-duotone"></iconify-icon>
                         </span>
                         <span class="nav-text"> Bảng Điều Khiển </span>
                    </a>
               </li>

               <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarCategory" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCategory">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:clipboard-list-bold-duotone"></iconify-icon>
                         </span>
                         <span class="nav-text">Quản Lý Danh Mục</span>
                    </a>
                    <div class="collapse" id="sidebarCategory">
                         <ul class="nav sub-navbar-nav">
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="<?=BASE_URL?>/admin/category-list">Danh sách danh mục</a>
                              </li>                         
                              
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="<?=BASE_URL?>/admin/category-add">Thêm danh mục</a>
                              </li>
                         </ul>
                    </div>
               </li>

               <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarProducts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProducts">
                         <span class="nav-icon">
                              <iconify-icon icon="iconoir:laptop"></iconify-icon>
                         </span>
                         <span class="nav-text">Quản lý Sản Phẩm </span>
                    </a>
                    <div class="collapse" id="sidebarProducts">
                         <ul class="nav sub-navbar-nav">
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="<?=BASE_URL?>/admin/product-list">Danh sách sản phẩm</a>
                              </li>

                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="<?=BASE_URL?>/admin/product-add">Thêm sản phẩm</a>
                              </li>
                         </ul>
                    </div>
               </li>

               


               <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarOrders" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarOrders">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:bag-smile-bold-duotone"></iconify-icon>
                         </span>
                         <span class="nav-text">Quản lý Đơn Hàng</span>
                    </a>
                    <div class="collapse" id="sidebarOrders">
                         <ul class="nav sub-navbar-nav">

                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="<?=BASE_URL?>/admin/orders-list">Danh sách đơn hàng</a>
                              </li>
                              
                              
                         </ul>
                    </div>
               </li>

            

               <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarComment" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarComment">
                         <span class="nav-icon">
                          <iconify-icon icon="material-symbols:comment" width="24" height="24"></iconify-icon>
                         </span>
                         <span class="nav-text">Quản Lý bình luận </span>
                    </a>
                    <div class="collapse" id="sidebarComment">
                         <ul class="nav sub-navbar-nav">

                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="<?=BASE_URL?>/admin/comment-list">Danh sách bình luận</a>
                              </li>
                         </ul>
                    </div>
               </li>

               <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarCustomers" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCustomers">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:users-group-two-rounded-bold-duotone"></iconify-icon>
                         </span>
                         <span class="nav-text">Quản Lý Users </span>
                    </a>
                    <div class="collapse" id="sidebarCustomers">
                         <ul class="nav sub-navbar-nav">

                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="<?=BASE_URL?>/admin/users-list">Danh sách Users</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="<?=BASE_URL?>/admin/users-create">Thêm Users</a>
                              </li>
                              
                         </ul>
                    </div>
               </li>


               <li class="nav-item">
                    <a class="nav-link" href="<?=BASE_URL?>/admin/dangxuat">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:settings-bold-duotone"></iconify-icon>
                         </span>
                         <span class="nav-text"> Thoát Quản Trị </span>
                    </a>
               </li>

              
          

               

               
          </ul>
     </div>
</div>
<!-- ========== App Menu End ========== -->

<?php endif ?>