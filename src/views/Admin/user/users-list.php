<!-- ==================================================== -->
<!-- Start right Content here -->
<!-- ==================================================== -->

<div class="page-content">

    <!-- Start Container Fluid -->
    <div class="container-xxl">



        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="d-flex card-header justify-content-between align-items-center">
                        <div>
                            <h4 class="card-title">Danh sách Users</h4>
                        </div>
                        <a href="<?= BASE_URL ?>/admin/users-add" class="btn btn-sm btn-primary">
                            Thêm Users
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
                                        <th>Tên - image</th>
                                        <th>Email</th>
                                        <th>Số Điện Thoại</th>
                                        <th>Mật khẩu</th>
                                        <th>Vai trò</th>
                                        <th>Ngày Tạo</th>
                                        <th>Thao Tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                <?php  foreach ($users as $user): ?>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheck2">
                                                    <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                                </div>
                                            </td>
                                            <td><img src="<?= BASE_URL . '/' . $user['hinh_anh'] ?>" class="avatar-sm rounded-circle me-2" alt="Không có ảnh">
                                                <p><?= $user['ten_user'] ?></p>
                                            </td>
                                            <td><a href="javascript: void(0);" class="text-body"><?= $user['email'] ?></a> </td>
                                            <td><?= $user['so_dien_thoai'] ?></td>
                                            <td><?= $user['mat_khau'] ?></td>
                                            <?php if ($user['vai_tro'] === 'client'): ?>
                                                <td><span class="badge bg-success-subtle text-success py-1 px-2"><?= $user['vai_tro'] ?></span> </td>
                                            <?php else: ?>
                                                <td><span class="badge bg-danger-subtle text-danger px-2 py-1"><?= $user['vai_tro'] ?></span> </td>
                                            <?php endif; ?>
                                            <td><?= $user['thoi_gian_tao'] ?></td>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <a href="<?= BASE_URL ?>/admin/users-edit?id=<?= $user['id'] ?>" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                    <a href="<?= BASE_URL ?>/admin/users-delete?id=<?= $user['id'] ?>" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                </div>
                                            </td>
                                        </tr>

                                    <?php endforeach; ?>


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