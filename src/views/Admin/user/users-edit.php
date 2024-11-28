

          <!-- ==================================================== -->
          <!-- Start right Content here -->
          <!-- ==================================================== -->
          <div class="page-content">

               <!-- Start Container Fluid -->
               <div class="container-xxl">

                    <div class="row">
                         

                         <div class="col-xl-12 col-lg-12 ">
                              <div class="card">
                                   <div class="card-header">
                                        <h4 class="card-title">Hình ảnh</h4>
                                   </div>
                                   <div class="card-body">
                                        <!-- File Upload -->
                                        <form action="https://techzaa.in/" method="post" class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews" data-upload-preview-template="#uploadPreviewTemplate">
                                             <div class="fallback">
                                                  <input name="file" type="file" multiple />
                                             </div>
                                             <div class="dz-message needsclick">
                                                  <i class="bx bx-cloud-upload fs-48 text-primary"></i>
                                                  <h3 class="mt-4">Thả hình ảnh của bạn ở đây hoặc <span class="text-primary">nhấp để duyệt</span></h3>
                                                  <span class="text-muted fs-13">
                                                        Khuyến nghị (4:3). Các tệp PNG, JPG và GIF được phép
                                                  </span>
                                             </div>
                                        </form>
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
                                                            <input type="text" id="product-name" class="form-control" placeholder="Mời nhập mã sản phẩm*" name="ma_san_pham">
                                                       </div>
                                                  </div>
                                             </div>

                                             <div class="col-lg-6">
                                                  <div>
                                                       <div class="mb-3">
                                                            <label for="product-name" class="form-label">Tên sản phẩm</label>
                                                            <input type="text" id="product-name" class="form-control" placeholder="Mời nhập tên sản phẩm*" name="ma_san_pham">
                                                       </div>
                                                  </div>
                                             </div>
                                             
                                        </div>
                                        <div class="row">
                                             <div class="col-lg-6">
                                                  <div>
                                                       <label for="product-categories" class="form-label">Danh mục</label>
                                                       <select class="form-control" id="product-categories" data-choices data-choices-groups data-placeholder="Select Categories" name="choices-single-groups">
                                                            <option value="" selected hidden disabled>-Danh mục của sản phẩm-</option>
                                                            <option value="Fashion">Fashion</option>
                                                            <option value="Electronics">Electronics</option>
                                                            <option value="Footwear">Footwear</option>
                                                            <option value="Sportswear">Sportswear</option>
                                                            <option value="Watches">Watches</option>
                                                            <option value="Furniture">Furniture</option>
                                                            <option value="Appliances">Appliances</option>
                                                            <option value="Headphones">Headphones</option>
                                                            <option value="Other Accessories">Other Accessories</option>
                                                       </select>
                                                  </div>
                                             </div>
                                            

                                             <div class="col-lg-6">
                                                  <div>
                                                       <div class="mb-3">
                                                            <label for="product-weight" class="form-label">Số lượng sản phẩm</label>
                                                            <input type="number" id="product-weight" class="form-control" placeholder="Mời nhập số lượng sản phẩm*">
                                                       </div>
                                                  </div>
                                             </div>
                                             
                                        </div>
                                        
                                        <div class="row">
                                             <div class="col-lg-12">
                                                  <div class="mb-3">
                                                       <label for="description" class="form-label">Mô tả sản phẩn</label>
                                                       <textarea class="form-control bg-light-subtle" id="description" rows="7" placeholder="Mô tả thông tin chi tiết về sản phẩm"></textarea>
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
                                                  <form>
                                                       <label for="product-price" class="form-label">Giá sản phẩm</label>
                                                       <div class="input-group mb-3">
                                                            <span class="input-group-text fs-20">VND</span>
                                                            <input type="number" id="product-price" class="form-control" placeholder="mời nhập giá*">
                                                       </div>
                                                  </form>
                                             </div>
                                             <div class="col-lg-6">
                                                  <form>
                                                       <label for="product-discount" class="form-label">Khuyến mãi</label>
                                                       <div class="input-group mb-3">
                                                            <span class="input-group-text fs-20"><i class='bx bxs-discount'></i></span>
                                                            <input type="number" id="product-discount" class="form-control" placeholder="%">
                                                       </div>
                                                  </form>
                                             </div>
                                             
                                        </div>
                                   </div>
                                   
                                   <div class="p-3 bg-light mb-3 rounded">
                                   <div class="row justify-content-end g-2">
                                        <div class="col-lg-2">
                                             <a href="#!" class="btn btn-primary w-100">Sửa</a>
                                        </div>
                                        <div class="col-lg-2">
                                             <a href="#!" class="btn btn-outline-secondary w-100">reset</a>
                                        </div>
                                        
                                   </div>
                                   </div>
                              </div>
                              
                         </div>
                    </div>
               </div>
               <!-- End Container Fluid -->
