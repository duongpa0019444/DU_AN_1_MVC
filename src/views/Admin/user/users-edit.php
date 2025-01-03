<?php

use models\user;
?>
<!-- ==================================================== -->
<!-- Start right Content here -->
<!-- ==================================================== -->
<div class="page-content">

     <!-- Start Container Fluid -->
     <div class="container-xxl">

          <div class="row">


               <div class="col-xl-12 col-lg-12 ">
                    <form class="card" method="post" enctype="multipart/form-data">
                         <div class="card-header">
                              <h4 class="card-title">Thêm hình ảnh</h4>
                         </div>
                         <div class="card-body">
                              <!-- File Upload -->
                              <div action="" method="post" class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews" data-upload-preview-template="#uploadPreviewTemplate">
                                   <div class="fallback">
                                        <input name="hinh_anh" type="file" multiple />
                                   </div>
                                   <div class="dz-message needsclick">
                                        <i class="bx bx-cloud-upload fs-48 text-primary"></i>
                                        <h3 class="mt-4">Thả hình ảnh của bạn ở đây hoặc <span class="text-primary">nhấp để duyệt</span></h3>
                                        <span class="text-muted fs-13">
                                             Khuyến nghị (4:3). Các tệp PNG, JPG và GIF được phép
                                        </span>
                                   </div>
                              </div>
                         </div>


                         <div class="card-body">
                              <div class="row">
                                   <div class="col-lg-12">
                                        <div>
                                             <div class="mb-3">
                                                  <label class="mt-1" for="product-name" class="form-label">Tên tài khoản</label>
                                                  <input type="text" id="ten_user" class="form-control" value="<?= $user['ten_user']?>"  name="ten_user" required>
                                                  <label class="mt-1" for="product-name" class="form-label">Email</label>
                                                  <input type="email" id="email" class="form-control" value="<?= $user['email']?>" name="email">
                                                  <label class="mt-1" for="product-name" class="form-label">Số điện thoại</label>
                                                  <input type="tel" id="so_dien_thoai" class="form-control" value="<?= $user['so_dien_thoai']?>" name="so_dien_thoai" required>
                                                  <label class="mt-1" for="product-name" class="form-label">Mật khẩu</label>
                                                  <input type="tel" id="mat_khau" class="form-control" value="<?= $user['mat_khau']?>" name="mat_khau" required>
                                                  <label class="mt-1" for="product-name" class="form-label">Vai trò</label>
                                                  <select id="vai_tro" name="vai_tro" class="form-select">
                                                       <!-- <option value="" disabled selected>-- Chọn đối tượng --</option> -->
                                                       <option value="admin" <?= $user['vai_tro'] === 'admin' ? 'selected' : '' ?>>Admin</option>
                                                       <option value="client" <?= $user['vai_tro'] === 'client' ? 'selected' : '' ?>>Client</option>

                                                  </select>
                                             </div>
                                        </div>
                                   </div>



                              </div>

                         </div>



                         <div class="p-3 bg-light mb-3 rounded">
                              <div class="row justify-content-end g-2">
                                   <div class="col-lg-2">
                                        <button type="submit" class="btn btn-primary w-100">Sửa</button>
                                        <!-- <a href="#!" class="btn btn-primary w-100">Sửa</a> -->
                                   </div>
                                   <div class="col-lg-2">
                                        <button type="reset" class="btn btn-primary w-100">Reset</button>

                                   </div>

                              </div>
                         </div>
                    </form>

               </div>
          </div>
     </div>
     <!-- End Container Fluid -->