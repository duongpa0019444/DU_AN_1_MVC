<!-- Start right Content here -->
<!-- ==================================================== -->
<div class="page-content">

     <!-- Start Container Fluid -->
     <div class="container-xxl">



          <div class="row">
               <div class="col-xl-12">
                    <div class="card">
                         <div class="card-header d-flex justify-content-between align-items-center gap-1">
                              <h4 class="card-title flex-grow-1">Tất cả bình luận</h4>
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
                                                  <th>Id</th>
                                                  <th>Tên tài khoản</th>
                                                  <th>Tên sản phẩm</th>
                                                  <th>Số sao</th>
                                                  <th>Nội dung</th>
                                                  <th>Thời gian</th>
                                                  <th>Thao tác</th>
                                             </tr>
                                        </thead>
                                        <tbody>
                                             <?php foreach ($comments as $comment) : ?>
                                                  <tr>
                                                       <td>
                                                            <div class="form-check">
                                                                 <input type="checkbox" class="form-check-input" id="customCheck2">
                                                                 <label class="form-check-label" for="customCheck2"></label>
                                                            </div>
                                                       </td>
                                                        <td><?= $comment['id'] ?></td>
                                                        <td><?= $comment['ten_user'] ?></td>
                                                       <td><?= $comment['ten_san_pham'] ?></td>

                                                       <td><?= $comment['so_sao'] ?></td> 
                                                       <td><?= $comment['noi_dung'] ?></td> 
                                                       <td><?= $comment['thoi_gian'] ?></td> 
                                                       <td>
                                                            <div class="d-flex gap-2">
                                                            <a href="<?= BASE_URL ?>/admin/comment-delete?id=<?= $comment['id'] ?>" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>

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