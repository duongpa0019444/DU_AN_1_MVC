<?php 
namespace models;  // Định nghĩa namespace 'models' để phân biệt với các phần khác trong dự án

use commons\baseModel;  // Sử dụng lớp baseModel từ namespace commons để tương tác với cơ sở dữ liệu

class donHang extends baseModel {  // Lớp 'donHang' kế thừa từ lớp baseModel để sử dụng các phương thức truy vấn cơ sở dữ liệu

    // Phương thức thêm đơn hàng vào cơ sở dữ liệu
    public function insertDonHang($data){
        // Câu lệnh SQL để thêm đơn hàng mới
        $sql = "INSERT INTO don_hang(id_user, tong_tien, trang_thai, thoi_gian, ghi_chu, id_thanh_toan, id_dia_chi)
                VALUES (:id_user, :tong_tien, 1, now(), :ghi_chu, :id_thanh_toan ,:id_dia_chi)";
        return parent::pdoUpdateParam($sql , $data);  // Thực thi câu lệnh SQL và trả về kết quả
    }

    // Phương thức lấy tất cả đơn hàng của một người dùng
    public function allDonHang($data){
        $sql = "SELECT * FROM don_hang WHERE id_user = ?";  // Lọc các đơn hàng theo id_user
        return parent::pdoQueryAll($sql, $data);  // Trả về danh sách đơn hàng
    }

    // Phương thức thêm chi tiết đơn hàng vào cơ sở dữ liệu
    public function insertDetailOrder($data){
        $sql = "INSERT INTO chi_tiet_dh (id_don_hang, id_san_pham, sl_san_pham)
                VALUES (:id_don_hang, :id_san_pham, :sl_san_pham)";
        parent::pdoQuery($sql, $data);  // Thực thi câu lệnh SQL để thêm chi tiết đơn hàng
    }

    // Phương thức đếm số lượng đơn hàng theo trạng thái
    public function countStatusOrder($data){
        // Câu lệnh SQL để đếm số lượng đơn hàng theo trạng thái
        $sql = "SELECT 
                    dh.trang_thai AS id_tt,
                    COUNT(*) AS total,
                    (SELECT trang_thai FROM trang_thai_dh WHERE id = dh.trang_thai) AS ten_trang_thai
                FROM don_hang AS dh
                GROUP BY dh.trang_thai;";
        return parent::pdoQueryAll($sql, $data);  // Trả về kết quả đếm theo trạng thái đơn hàng
    }

    // Phương thức hiển thị danh sách các đơn hàng
    public function ordersManage($data){
        $sql = "SELECT 
                    dh.id,
                    dh.thoi_gian,
                    dh.tong_tien,
                    dh.ghi_chu,
                    dh.trang_thai AS id_tt,
                    dh.id_thanh_toan AS id_pt,
                    (SELECT ten_user FROM users WHERE id = dh.id_user) AS ten_user,
                    (SELECT trang_thai FROM trang_thai_dh WHERE dh.trang_thai = id) AS trang_thai,
                    (SELECT phuong_thuc FROM pt_thanh_toan WHERE id = dh.id_thanh_toan) AS phuong_thuc,
                    (SELECT COUNT(*) FROM chi_tiet_dh WHERE id_don_hang = dh.id ) AS so_san_pham
                FROM don_hang as dh";
        return parent::pdoQueryAll($sql, $data);  // Trả về danh sách các đơn hàng quản lý
    }

    // Phương thức lọc đơn hàng theo trạng thái
    public function findOrdersTT($data){
        $sql = "SELECT 
                    dh.id,
                    dh.thoi_gian,
                    dh.tong_tien,
                    dh.ghi_chu,
                    dh.trang_thai AS id_tt,
                    dh.id_thanh_toan AS id_pt,
                    (SELECT ten_user FROM users WHERE id = dh.id_user) AS ten_user,
                    (SELECT trang_thai FROM trang_thai_dh WHERE dh.trang_thai = id) AS trang_thai,
                    (SELECT phuong_thuc FROM pt_thanh_toan WHERE id = dh.id_thanh_toan) AS phuong_thuc,
                    (SELECT COUNT(*) FROM chi_tiet_dh WHERE id_don_hang = dh.id ) AS so_san_pham
                FROM don_hang as dh WHERE dh.trang_thai = ?";
        return parent::pdoQueryAll($sql, $data);  // Trả về danh sách đơn hàng theo trạng thái
    }

    // Phương thức lấy chi tiết sản phẩm trong đơn hàng
    public function detailOrderProduct($data){
        $sql = "SELECT 
                    sp.ten_san_pham,
                    (sp.gia_san_pham - (sp.gia_san_pham * (sp.khuyen_mai / 100))) AS gia_san_pham,
                    ctdh.sl_san_pham,
                    ((sp.gia_san_pham - (sp.gia_san_pham * (sp.khuyen_mai / 100))) * ctdh.sl_san_pham) AS tong,
                    (SELECT hinh_anh_1 FROM hinh_anh WHERE sp.id = id_san_pham) AS hinh_anh,
                    (SELECT ten_danh_muc FROM danh_muc_small WHERE sp.id_DM_small = id) AS ten_DM_small
                FROM san_pham AS sp 
                JOIN chi_tiet_dh as ctdh ON sp.id = ctdh.id_san_pham
                JOIN don_hang AS dh ON dh.id = ctdh.id_don_hang
                WHERE dh.id = ?";
        return parent::pdoQueryAll($sql, $data);  // Trả về chi tiết sản phẩm của đơn hàng
    }

    // Phương thức lấy thông tin địa chỉ giao hàng của đơn hàng
    public function detailOrderAdress($data){
        $sql = "SELECT 
                    dh.id as id_dh,
                    dh.thoi_gian,
                    dh.ghi_chu,
                    dh.tong_tien,
                    dh.trang_thai,
                    dc.*
                FROM don_hang as dh
                JOIN dia_chi as dc ON dh.id_dia_chi = dc.id
                WHERE dh.id = ?";
        return parent::pdoQuery($sql, $data);  // Trả về thông tin địa chỉ của đơn hàng
    }

    // Phương thức lấy tất cả trạng thái đơn hàng
    public function trangThai($data){
        $sql = "SELECT * FROM trang_thai_dh";
        return parent::pdoQueryAll($sql, $data);  // Trả về tất cả trạng thái đơn hàng
    }

    // Phương thức cập nhật trạng thái của đơn hàng
    public function updateOrder($data){
        $sql = "UPDATE don_hang SET trang_thai = ? WHERE don_hang.id = ?";
        parent::pdoQuery($sql , $data);  // Cập nhật trạng thái đơn hàng
    }

    // Phương thức xóa đơn hàng
    public function deleteOrder($data){
        $sql = "DELETE FROM don_hang WHERE id = ?";
        parent::pdoQuery($sql , $data);  // Xóa đơn hàng theo ID
    }

    // Phương thức xóa chi tiết đơn hàng
    public function deleteOrderDetail($data){
        $sql = "DELETE FROM chi_tiet_dh WHERE id_don_hang = ?";
        parent::pdoQueryAll($sql, $data);  // Xóa chi tiết đơn hàng theo ID đơn hàng
    }
}
?>
