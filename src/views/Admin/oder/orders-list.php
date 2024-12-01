

               <div class="page-content">

                    <!-- Start Container Fluid -->
                    <div class="container-xxl">

                         <div class="row">
                              <?php foreach($data as $trang_thai): ?>
                                   <a href="<?=BASE_URL?>/admin/orders-list?id_TT=<?=$trang_thai['id_tt']?>">
                                        <div class="col-md-6 col-xl-3">
                                             <div class="card">
                                                  <div class="card-body">
                                                       <div class="d-flex align-items-center justify-content-between">
                                                            <div>
                                                                 <h4 class="card-title mb-2"><?=$trang_thai['ten_trang_thai']?></h4>
                                                                 <p class="text-muted fw-medium fs-22 mb-0"><?=$trang_thai['total']?></p>
                                                            </div>
                                                            <div>
                                                                 <div class="avatar-md bg-primary bg-opacity-10 rounded">
                                                                      <?php if($trang_thai['id_tt']==1):?>
                                                                           <iconify-icon icon="solar:clipboard-remove-broken" class="fs-32 text-primary avatar-title"></iconify-icon>
                                                                      <?php elseif($trang_thai['id_tt']==2): ?>
                                                                           <iconify-icon icon="solar:clock-circle-broken" class="fs-32 text-primary avatar-title"></iconify-icon>
                                                                      <?php elseif($trang_thai['id_tt']==3): ?>
                                                                           <iconify-icon icon="solar:tram-broken" class="fs-32 text-primary avatar-title"></iconify-icon>
                                                                      <?php elseif($trang_thai['id_tt']==4): ?>
                                                                           <iconify-icon icon="solar:box-broken" class="fs-32 text-primary avatar-title"></iconify-icon>
                                                                      <?php elseif($trang_thai['id_tt']==5): ?>
                                                                           <iconify-icon icon="solar:cart-cross-broken" class="fs-32 text-primary avatar-title"></iconify-icon>
                                                                      <?php elseif($trang_thai['id_tt']==6): ?>
                                                                           <iconify-icon icon="solar:inbox-line-broken" class="fs-32 text-primary avatar-title"></iconify-icon>
                                        
                                                                      <?php endif ?>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </a>
                              <?php endforeach ?>

                         </div>

                         <div class="row">
                              <div class="col-xl-12">
                                   <div class="card">
                                        <div class="d-flex card-header justify-content-between align-items-center">
                                             <div>
                                                  <h4 class="card-title">Tất cả đơn hàng</h4>
                                             </div>
                                             
                                        </div>
                                        <div class="card-body p-0">
                                             <div class="table-responsive">
                                                  <table class="table align-middle mb-0 table-hover table-centered">
                                                       <thead class="bg-light-subtle">
                                                            <tr>
                                                                 <th>Mã</th>
                                                                 <th>Thời gian</th>
                                                                 <th>khách hàng</th>
                                                                 <th>Tổng tiền</th>
                                                                 <th>Phươn thức thanh toán</th>
                                                                 <th>Sản phẩm</th>
                                                                 <th>Ghi chú</th>
                                                                 <th>Trang thái</th>
                                                                 <th>Thao tác</th>
                                                            </tr>
                                                       </thead>
                                                       <tbody>
                                                            <?php foreach($orders as $order): ?>
                                                                 <tr>
                                                                      <td>
                                                                           #<?=$order['id']?>
                                                                      </td>
                                                                      <td><?=$order['thoi_gian']?></td>
                                                                      <td>
                                                                           <a href="#!" class="link-primary fw-medium"><?=$order['ten_user']?></a>
                                                                      </td>

                                                                      <td><?=$order['tong_tien']?></td>
                                                                      <td>
                                                                           <?php if($order['id_pt']==1): ?>
                                                                                <span class="badge bg-success text-light px-2 py-1 fs-7">Thanh toán khi nhận hàng</span>
                                                                           <?php else: ?>
                                                                                 <span class="badge bg-light text-dark px-2 py-1 fs-7">Thanh toán chuyển khoản</span>
                                                                           <?php endif ?>
                                                                                
                                                                      </td>
                                                                      <td><?=$order['so_san_pham']?></td>
                                                                      <td><?=$order['ghi_chu']?></td>
                                                                      <td> 
                                                                           <?php if($order['id_tt']==1): ?>
                                                                                <span class="badge border border-secondary text-secondary  px-2 py-1 fs-7">Chờ duyệt</span>
                                                                           <?php elseif($order['id_tt']==2): ?>
                                                                                <span class="badge border border-warning text-warning  px-2 py-1 fs-7">Đang xử lý</span>
                                                                           <?php elseif($order['id_tt']==3): ?>
                                                                                <span class="badge border border-info text-info  px-2 py-1 fs-7">Đang giao</span>
                                                                           <?php elseif($order['id_tt']==4): ?>
                                                                                <span class="badge border border-success text-success  px-2 py-1 fs-7">Đã giao</span>
                                                                           <?php elseif($order['id_tt']==5): ?>
                                                                                <span class="badge border  border-danger text-danger  px-2 py-1 fs-7">Đã hủy</span>
                                                                           <?php else: ?>
                                                                                <span class="badge border border-danger text-light bg-danger px-2 py-1 fs-7">Đã trả hàng</span>
                                                                           <?php endif ?>

                                                                      </td>
                                                                      <td>
                                                                           <div class="d-flex gap-2">
                                                                                <a href="<?=BASE_URL?>/admin/orders-detail?id_DH=<?=$order['id']?>" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                                <a href="<?=BASE_URL?>/admin/orders-delete?id_DH=<?=$order['id']?>" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                           </div>
                                                                      </td>
                                                                 </tr>
                                                            <?php  endforeach?>
                                                            
                                                            

                                                       </tbody>
                                                  </table>
                                             </div>
                                             <!-- end table-responsive -->
                                        </div>
                                        <div class="card-footer border-top">
                                             <nav aria-label="Page navigation example">
                                                  <ul class="pagination justify-content-end mb-0">
                                                       <li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a></li>
                                                       <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                                       <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                                       <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                                       <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>
                                                  </ul>
                                             </nav>
                                        </div>
                                   </div>
                              </div>

                         </div>

                    </div>
                    <!-- End Container Fluid -->

                  

    