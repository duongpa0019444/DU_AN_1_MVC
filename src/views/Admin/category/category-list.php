<!-- Start right Content here -->
<!-- ==================================================== -->
<div class="page-content">

     <!-- Start Container Fluid -->
     <div class="container-xxl">



          <div class="row">
               <div class="col-xl-12">
                    <div class="card">
                         <div class="card-header d-flex justify-content-between align-items-center gap-1">
                              <h4 class="card-title flex-grow-1">Tất cả danh mục</h4>

                              <a href="<?= BASE_URL ?>/admin/category-add" class="btn btn-sm btn-primary">
                                   Thêm Mới
                              </a>

                         </div>
                         <div>
                              <div class="table-responsive">
                                   <table class="table align-middle mb-0 table-hover table-centered">
                                        <thead class="bg-light-subtle">
                                             <tr>
                                                  <th style="width: 20px;">
                                                       <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="customCheck1">
                                                            <label class="form-check-label" for="customCheck1"></label>
                                                       </div>
                                                  </th>
                                                  <th>Hình ảnh</th>
                                                  <th>Tên danh mục</th>
                                                  <th>Số lượng danh mục con</th>
                                                  <th>Thao tác</th>
                                             </tr>
                                        </thead>
                                        <tbody>
                                             <?php foreach ($categories as $category) : ?>
                                                  <tr>
                                                       <td>
                                                            <div class="form-check">
                                                                 <input type="checkbox" class="form-check-input" id="customCheck2">
                                                                 <label class="form-check-label" for="customCheck2"></label>
                                                            </div>
                                                       </td>
                                                       <td>
                                                            <div class="d-flex align-items-center gap-2">
                                                                 <div class="rounded bg-light avatar-md d-flex align-items-center justify-content-center">
                                                                      <img src="<?= BASE_URL . '/' . $category['hinh_anh'] ?>" alt="lỗi hình ảnh" class="avatar-md">
                                                                 </div>

                                                            </div>

                                                       </td>

                                                       <td><?= $category['ten_danh_muc'] ?></td>

                                                       <td><?= $category['soLuongDMSM'] ?></td>
                                                       <td>
                                                            <div class="d-flex gap-2">
                                                                 <a href="<?= BASE_URL ?>/admin/category-detail?id=<?= $category['id'] ?>&name=<?= $category['ten_danh_muc'] ?>" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                 <a href="<?= BASE_URL ?>/admin/category-edit?id=<?= $category['id'] ?>" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                 <a href="<?= BASE_URL ?>/admin/category-delete?id=<?= $category['id'] ?>" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                            </div>
                                                       </td>
                                                  </tr>
                                             <?php endforeach; ?>
                                        </tbody>
                                   </table>
                              </div>
                              <!-- end table-responsive -->
                         </div>

                    </div>
               </div>
          </div>

     </div>
     <!-- End Container Fluid -->