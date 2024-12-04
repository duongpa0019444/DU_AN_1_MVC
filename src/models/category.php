<?php 

namespace models;

use commons\baseModel;

class Category extends baseModel
{
    // Lấy tất cả danh mục sản phẩm
    public function allCategory($data)
    {
        $sql = "SELECT * FROM danh_muc";  // Truy vấn tất cả các danh mục sản phẩm
        // Trả về tất cả danh mục từ cơ sở dữ liệu
        return parent::pdoQueryAll($sql, $data);
    }

    // Lấy tất cả danh mục nhỏ
    public function allCategorySmall($data)
    {
        $sql = "SELECT * FROM danh_muc_small";  // Truy vấn tất cả các danh mục nhỏ
        // Trả về tất cả danh mục nhỏ từ cơ sở dữ liệu
        return parent::pdoQueryAll($sql, $data);
    }

    // Hàm hiển thị danh mục cho Admin (kèm theo số lượng danh mục nhỏ)
    public function allCateAdmin()
    {
        $sql = "SELECT 
            COUNT(danh_muc_small.id) as soLuongDMSM,  -- Đếm số lượng danh mục nhỏ trong mỗi danh mục lớn
            danh_muc.ten_danh_muc,
            danh_muc.hinh_anh,
            danh_muc.id     
        FROM 
            danh_muc
        LEFT JOIN 
            danh_muc_small
        ON 
            danh_muc.id = danh_muc_small.id_danh_muc
        GROUP BY 
            danh_muc.ten_danh_muc;";
        // Trả về danh mục lớn cùng số lượng danh mục nhỏ trong mỗi danh mục
        return parent::pdoQueryAll($sql, []);
    }

    // Hàm thêm mới danh mục
    public function createCate($param = [])
    {
        $sql = "INSERT INTO danh_muc (ten_danh_muc, hinh_anh) VALUES (:ten_danh_muc, :hinh_anh);";  // Truy vấn thêm một danh mục mới
        parent::pdoQuery($sql, $param);  // Thực thi truy vấn để thêm danh mục
    }

    // Hàm xoá danh mục
    public function deleteCate($param = [])
    {
        $sql = "DELETE FROM danh_muc WHERE id = :id";  // Truy vấn xoá danh mục theo id
        parent::pdoQuery($sql, $param);  // Thực thi truy vấn để xoá danh mục
    }

    // Hàm sửa danh mục (cập nhật tên và hình ảnh nếu có)
    public function update($param = [])
    {
        // Kiểm tra nếu có thay đổi hình ảnh
        if (isset($_POST['hinh_anh'])) {
            $sql = "UPDATE danh_muc SET ten_danh_muc = :ten_danh_muc, hinh_anh = :hinh_anh WHERE id = :id";  // Truy vấn cập nhật với hình ảnh
            parent::pdoQuery($sql, $param);  // Thực thi truy vấn
        } else {
            $sql = "UPDATE danh_muc SET ten_danh_muc = :ten_danh_muc WHERE id = :id";  // Truy vấn cập nhật mà không có thay đổi hình ảnh
            parent::pdoQuery($sql, $param);  // Thực thi truy vấn
        }
    }

    // Lấy tên danh mục theo id
    public function getNameCate($param = [])
    {
        $sql = "SELECT ten_danh_muc FROM danh_muc WHERE id = :id";  // Truy vấn lấy tên danh mục theo id
        return parent::pdoQuery($sql, $param);  // Trả về tên danh mục
    }

    // Hàm hiển thị danh mục nhỏ cho Admin (kèm theo số lượng sản phẩm)
    public function allCateAdminSmall($param = []) 
    {
        $sql = "SELECT 
                    danh_muc_small.ten_danh_muc AS tenDMSM,  -- Tên danh mục nhỏ
                    danh_muc_small.id as idDMSM,
                    danh_muc.ten_danh_muc AS tenDM,  -- Tên danh mục lớn
                    COUNT(san_pham.id) AS soLuongSP  -- Số lượng sản phẩm trong danh mục nhỏ
                FROM danh_muc
                JOIN danh_muc_small ON danh_muc.id = danh_muc_small.id_danh_muc
                LEFT JOIN san_pham ON danh_muc_small.id = san_pham.id_DM_small
                WHERE danh_muc.id = :id  -- Lọc theo danh mục lớn
                GROUP BY danh_muc_small.ten_danh_muc, danh_muc.ten_danh_muc
                ORDER BY danh_muc_small.ten_danh_muc ASC;";
        // Trả về các danh mục nhỏ kèm số lượng sản phẩm cho từng danh mục lớn
        return parent::pdoQueryAll($sql, $param);
    }

    // Hàm thêm mới danh mục nhỏ
    public function createCateSmall($param = [])
    {
        $sql = "INSERT INTO danh_muc_small (ten_danh_muc, id_danh_muc) VALUES (:ten_danh_muc, :id_danh_muc);";  // Truy vấn thêm danh mục nhỏ
        parent::pdoQuery($sql, $param);  // Thực thi truy vấn để thêm danh mục nhỏ
    }

    // Hàm xoá danh mục nhỏ
    public function deleteCateSmall($param = [])
    {
        $sql = "DELETE FROM danh_muc_small WHERE id = :id";  // Truy vấn xoá danh mục nhỏ theo id
        parent::pdoQuery($sql, $param);  // Thực thi truy vấn để xoá danh mục nhỏ
    }

    // Hàm sửa danh mục nhỏ
    public function updateSmall($param = [])
    {
        $sql = "UPDATE danh_muc_small SET ten_danh_muc = :ten_danh_muc WHERE id = :id";  // Truy vấn sửa tên danh mục nhỏ
        parent::pdoQuery($sql, $param);  // Thực thi truy vấn để sửa danh mục nhỏ
    }

    // Lấy tên danh mục nhỏ theo id
    public function getNameDMSM($param = [])
    {
        $sql = "SELECT ten_danh_muc FROM danh_muc_small WHERE id = :id";  // Truy vấn lấy tên danh mục nhỏ theo id
        return parent::pdoQuery($sql, $param);  // Trả về tên danh mục nhỏ
    }
}


?>