<!-- ==================================================== -->
<!-- Start right Content here -->
<!-- ==================================================== -->
<div class="page-content">

     <!-- Start Container Fluid -->
     <div class="container-xxl">

          <div class="row">


               <div class="col-xl-12 col-lg-12 ">
                    <form class="card" action="" method="post" enctype="multipart/form-data">
                         <div class="card-header">
                              <h4 class="card-title">Thêm hình ảnh</h4>
                         </div>
                         <div class="card-body">
                              <!-- File Upload -->
                              <div class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews" data-upload-preview-template="#uploadPreviewTemplate">
                                   <div class="fallback">
                                        <input name="hinh_anh[]" type="file" multiple />
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

                         <div class="card-header">
                              <h4 class="card-title">Thông Tin Sản Phẩm</h4>
                         </div>
                         <div class="card-body">
                              <div class="row">
                                   <div class="col-lg-6">
                                        <div>
                                             <div class="mb-3">
                                                  <label for="product-name" class="form-label">Mã sản phẩm</label>
                                                  <input type="text" id="product-name" class="form-control" name="ma_san_pham" value="<?= $product['ma_san_pham'] ?>" required>
                                             </div>
                                        </div>
                                   </div>

                                   <div class="col-lg-6">
                                        <div>
                                             <div class="mb-3">
                                                  <label for="product-name" class="form-label">Tên sản phẩm</label>
                                                  <input type="text" id="product-name" class="form-control" name="ten_san_pham" value="<?= $product['ten_san_pham'] ?>" required>
                                             </div>
                                        </div>
                                   </div>

                              </div>
                              <div class="row">
                                   <div class="col-lg-6">
                                        <div>
                                             <label class="form-label">Danh mục</label>
                                             <select class="form-control" value="<?= $product['id_DM_small'] ?>" name="id_DM_small" required>


                                                  <?php foreach ($allCategoryHeaders as $allCategoryHeader): ?>
                                                       <option value="" disabled><?= $allCategoryHeader['ten_danh_muc'] ?></option>
                                                       <?php foreach ($allCategorySmallHeaders as $allCategorySmallHeader): ?>
                                                            <?php if ($allCategoryHeader['id'] == $allCategorySmallHeader['id_danh_muc']): ?>
                                                                 <option value="<?= $allCategorySmallHeader['id'] ?>" <?= $product['id_DM_small'] == $allCategorySmallHeader['id'] ? 'selected' : '' ?>>
                                                                      - <?= $allCategorySmallHeader['ten_danh_muc'] ?>
                                                                 </option>
                                                            <?php endif ?>
                                                       <?php endforeach ?>

                                                  <?php endforeach ?>
                                             </select>
                                        </div>
                                   </div>


                                   <div class="col-lg-6">
                                        <div>
                                             <div class="mb-3">
                                                  <label for="product-weight" class="form-label">Số lượng sản phẩm</label>
                                                  <input type="number" id="product-weight" class="form-control" name="so_luong" value="<?=$product['so_luong']?>" required>
                                             </div>
                                        </div>
                                   </div>

                              </div>

                              <div class="row">
                                   <div class="col-lg-12">
                                        <div class="mb-3">
                                             <label for="description" class="form-label">Mô tả sản phẩn</label>
                                             <textarea class="form-control bg-light-subtle" rows="7" name="mo_ta" required><?=$product['mo_ta']?></textarea>
                                        </div>
                                   </div>
                              </div>

                         </div>

                         <div class="card-header">
                              <h4 class="card-title">Chi tiết giá cả</h4>
                         </div>
                         <div class="card-body">
                              <div class="row">
                                   <div class="col-lg-6">
                                        <div>
                                             <label for="product-price" class="form-label">Giá sản phẩm</label>
                                             <div class="input-group mb-3">
                                                  <span class="input-group-text fs-20">VND</span>
                                                  <input type="number" id="product-price" class="form-control" value="<?=$product['gia_san_pham']?>" name="gia_san_pham" required>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col-lg-6">
                                        <div>
                                             <label for="product-discount" class="form-label">Khuyến mãi</label>
                                             <div class="input-group mb-3">
                                                  <span class="input-group-text fs-20"><i class='bx bxs-discount'></i></span>
                                                  <input type="number" id="product-discount" name="khuyen_mai" max="100" value="<?=$product['khuyen_mai']?>" class="form-control" required>
                                             </div>
                                        </div>
                                   </div>

                              </div>
                         </div>

                         <div class="p-3 bg-light mb-3 rounded">
                              <div class="row justify-content-end g-2">
                                   <div class="col-lg-2">
                                        <button class="btn btn-primary w-100">Cập Nhật</button>
                                   </div>
                                   <div class="col-lg-2">
                                        <a href="<?=BASE_URL?>/admin/product-list" class="btn btn-outline-secondary w-100">Thoát</a>
                                   </div>

                              </div>
                         </div>
                    </form>

               </div>
          </div>
     </div>
     <!-- End Container Fluid -->