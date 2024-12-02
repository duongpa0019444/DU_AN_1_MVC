
<div class="page-content">

     <!-- Start Container Fluid -->
     <div class="container-xxl">

          <div class="row">


               <div class="col-xl-12 col-lg-12 ">
                    <form class="card" method="post" enctype="multipart/form-data">
                         <div class="card-header">
                              <h4 class="card-title">Thêm hình ảnh đại diện</h4>
                         </div>
                         <div class="card-body">
                              <!-- File Upload -->
                              <div action="" method="post" class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews" data-upload-preview-template="#uploadPreviewTemplate">
                                   <div class="fallback">
                                        <input name="hinh_anh" type="file" multiple />
                                   </div>
                                   <div class="dz-message needsclick">
                                        <i class="bx bx-cloud-upload fs-25 text-primary"></i>
                                        <h3 class="mt-2">Thả hình ảnh của bạn ở đây hoặc <span class="text-primary">nhấp để duyệt</span></h3>
                                        <span class="text-muted fs-6">
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
                                                  <input type="text" id="ten_user" class="form-control" placeholder="Mời nhập tên tài khoản*" name="ten_user" required>
                                                  <label class="mt-1" for="product-name" class="form-label">Email</label>
                                                  <input type="email" id="email" class="form-control" placeholder="Mời nhập email*" name="email">
                                                  <label class="mt-1" for="product-name" class="form-label">Số điện thoại</label>
                                                  <input type="tel"  id="so_dien_thoai" class="form-control" placeholder="Mời nhập số điện thoại*" name="so_dien_thoai" required>
                                                  <label class="mt-1" for="product-name" class="form-label">Mật khẩu</label>
                                                  <input type="password" id="mat_khau" class="form-control" placeholder="Mời nhập mật khẩu*" name="mat_khau" required>
                                                  <label class="mt-1" for="product-name" class="form-label">Vai trò</label>
                                                  <select id="vai_tro" name="vai_tro" class="form-select">
                                                       <option value="" disabled selected >-- Chọn đối tượng --</option>
                                                       <option value="admin">Admin</option>
                                                       <option value="client">Client</option>
                                                
                                                  </select>
                                             </div>
                                        </div>
                                   </div>



                              </div>

                         </div>



                         <div class="p-3 bg-light mb-3 rounded">
                              <div class="row justify-content-end g-2">
                                   <div class="col-lg-2">
                                        <button type="submit" class="btn btn-primary w-100">Thêm</button>
                                   </div>
                                   <div class="col-lg-2">
                                        <a href="<?=BASE_URL?>/admin/users-list" class="btn btn-outline-secondary w-100">Thoát</a>
                                   </div>

                              </div>
                         </div>
                    </form>

               </div>
          </div>
     </div>
     <!-- End Container Fluid -->