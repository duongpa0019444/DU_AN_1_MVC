<?php

namespace models;

use commons\baseModel;

class user extends baseModel
{
    // Lấy tất cả người dùng
    public function allUser($param = [])
    {
        $sql = "SELECT * FROM users";
        return parent::pdoQueryAll($sql, $param);
    }

    // Tạo người dùng mới
    public function createUser($param = [])
    {
        $sql = "INSERT INTO users (ten_user, so_dien_thoai, email, hinh_anh, vai_tro, mat_khau) VALUES (:ten_user, :so_dien_thoai, :email, :hinh_anh, :vai_tro, :mat_khau);";
        parent::pdoQuery($sql, $param);
    }

    // Xóa người dùng
    public function deleteUser($param = [])
    {
        $sql = "DELETE FROM users WHERE id = :id";
        parent::pdoQuery($sql, $param);
    }

    // Cập nhật thông tin người dùng
    public function updateUser($param = [])
    {
        // Kiểm tra nếu có hình ảnh, cập nhật thông tin có hình ảnh
        if (isset($_POST['hinh_anh'])) {
            $sql = "UPDATE users SET ten_user = :ten_user, so_dien_thoai = :so_dien_thoai, email = :email, hinh_anh = :hinh_anh, vai_tro = :vai_tro, mat_khau = :mat_khau WHERE id = :id";
            parent::pdoQuery($sql, $param);
        } else {
            // Nếu không có hình ảnh, cập nhật thông tin không có hình ảnh
            $sql = "UPDATE users SET ten_user = :ten_user, so_dien_thoai = :so_dien_thoai, email = :email, vai_tro = :vai_tro, mat_khau = :mat_khau WHERE id = :id";
            parent::pdoQuery($sql, $param);
        }
    }

    // Lấy thông tin người dùng theo id
    public function getUser($param = [])
    {
        $sql = "SELECT * FROM users WHERE id = :id";
        return parent::pdoQuery($sql, $param);
    }
}
