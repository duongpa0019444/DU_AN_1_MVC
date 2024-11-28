

          <!-- ==================================================== -->
          <!-- Start right Content here -->
          <!-- ==================================================== -->
          <div class="page-content">

               <!-- Start Container Fluid -->
               <div class="container-fluid">

                    <div class="row">
                         <div class="col-xl-12">
                              <div class="card">
                                   <div class="card-header d-flex justify-content-between align-items-center gap-1">
                                        <h4 class="card-title flex-grow-1">Danh sách sản phẩm</h4>

                                        <a href="<?=BASE_URL?>/admin/product-add" class="btn btn-sm btn-primary">
                                             Thêm sản phẩm
                                        </a>

                                       
                                   </div>
                                   <div>
                                        <div class="table-responsive">
                                             <table class="table align-middle mb-0 table-hover table-centered">
                                                  <thead class="bg-light-subtle">
                                                       <tr>
                                                            <th style="width: 20px;">
                                                                 <div class="form-check ms-1">
                                                                      <input type="checkbox" class="form-check-input" id="customCheck1">
                                                                      <label class="form-check-label" for="customCheck1"></label>
                                                                 </div>
                                                            </th>
                                                            <th>Sản phẩm(Name/Image/QR)</th>
                                                            <th>Giá</th>
                                                            <th>Số lượng</th>
                                                            <th>khuyến mãi</th>
                                                            <th>lượt xem</th>
                                                            <th>Ngày thêm</th>
                                                            <th>Thao tác</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <?php foreach($products as $product): ?>
                                                            <tr>
                                                                 <td>
                                                                      <div class="form-check ms-1">
                                                                           <input type="checkbox" class="form-check-input" id="customCheck2">
                                                                           <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                                                      </div>
                                                                 </td>
                                                                 <td>
                                                                      <div class="d-flex align-items-center gap-2">
                                                                           <div class="rounded bg-light avatar-md d-flex align-items-center justify-content-center">
                                                                                <img src="<?=BASE_URL?>/<?=$product['hinh_anh_1']?>" alt="" class="avatar-md">
                                                                           </div>
                                                                           <div>
                                                                                <a href="#!" class="text-dark fw-medium fs-15"><?=$product['ten_san_pham']?></a>
                                                                                <p class="text-muted mb-0 mt-1 fs-13"><span>Mã : </span> <?=$product['ma_san_pham']?></p>
                                                                                 <p class="text-muted mb-0 mt-1 fs-13"><span><?=$product['ten_danh_muc']?> : </span><?=$product['ten_danh_muc_small']?></p>
                                                                           </div>
                                                                      </div>

                                                                 </td>
                                                                 <td><?=$product['gia_san_pham']?></td>
                                                                 <td><?=$product['so_luong']?></td>
                                                                 <td><?=$product['khuyen_mai']?>%</td>
                                                                 <td><?=$product['luot_xem']?></td>
                                                                 <td><?=$product['ngay_them']?></td>
                                                                 <td>
                                                                      <div class="d-flex gap-2">
                                                                           <a href="<?=BASE_URL?>/admin/product-edit" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                           <a href="<?=BASE_URL?>/admin/product/delete" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                      </div>
                                                                 </td>
                                                            </tr>

                                                       <?php endforeach ?>
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

    

          </div>
          <!-- ==================================================== -->
          <!-- End Page Content -->
          <!-- ==================================================== -->

  
