<?php 
namespace models;  // Định nghĩa namespace 'models' để phân biệt với các phần khác trong dự án

use commons\baseModel;  // Sử dụng lớp baseModel từ namespace commons để tương tác với cơ sở dữ liệu
use PDO;  // Sử dụng lớp PDO để thực hiện các câu lệnh SQL

class cart extends baseModel {  // Lớp 'cart' kế thừa từ lớp baseModel để sử dụng các phương thức truy vấn cơ sở dữ liệu

    // Phương thức tìm kiếm các sản phẩm trong giỏ hàng của người dùng
    public function findProductCartUsser($data){
        // Câu lệnh SQL để lấy thông tin sản phẩm trong giỏ hàng của người dùng
        $sql = "SELECT
                    gh.id,
                    gh.id_user,
                    sp.id AS id_san_pham,
                    sp.ten_san_pham,
                    (sp.gia_san_pham - (sp.khuyen_mai / 100 * sp.gia_san_pham)) AS gia_san_pham,
                    ha.hinh_anh_1,
                    gh.so_luong,
                    ((sp.gia_san_pham - (sp.khuyen_mai / 100 * sp.gia_san_pham)) * gh.so_luong) AS tong_phu
                FROM gio_hang AS gh
                JOIN san_pham AS sp ON sp.id = gh.id_san_pham
                JOIN hinh_anh AS ha ON sp.id = ha.id_san_pham
                WHERE gh.id_user = ?";
        return parent::pdoQueryAll($sql , $data);  // Trả về danh sách sản phẩm trong giỏ hàng của người dùng
    }

    // Phương thức tạo giỏ hàng mới
    public function create($data){
        // Câu lệnh SQL để thêm một sản phẩm vào giỏ hàng của người dùng
        $sql = "INSERT INTO gio_hang(id, id_user, id_san_pham, so_luong) 
                VALUES ('', ? ,? ,?)";
        return parent::pdoQueryAll($sql, $data);  // Thực thi câu lệnh SQL và trả về kết quả
    }

    // Phương thức xóa giỏ hàng của người dùng
    public function deleteCartUser($data){
        // Câu lệnh SQL để xóa giỏ hàng của người dùng theo id_user
        $sql = "DELETE FROM gio_hang WHERE id_user = ?";
        parent::pdoQueryAll($sql, $data);  // Xóa giỏ hàng của người dùng
    }

    // Phương thức tìm kiếm sản phẩm trong giỏ hàng của người dùng
    public function findCartUserId($data){
        // Câu lệnh SQL để tìm sản phẩm trong giỏ hàng theo id_user và id_san_pham
        $sql = "SELECT * FROM gio_hang WHERE id_user = ? AND id_san_pham = ?";
        return parent::pdoQuery($sql , $data);  // Trả về thông tin sản phẩm trong giỏ hàng
    }

    // Phương thức cập nhật số lượng sản phẩm trong giỏ hàng
    public function updateSL($data){
        // Câu lệnh SQL để tăng số lượng sản phẩm trong giỏ hàng
        $sql = "UPDATE gio_hang SET so_luong = so_luong + 1 
                WHERE id_user = ? AND id_san_pham = ?";
        parent::pdoQuery($sql , $data);  // Cập nhật số lượng sản phẩm trong giỏ hàng
    }

    // Phương thức tính tổng số sản phẩm trong giỏ hàng của người dùng
    public function tongProductCart($data){
        // Câu lệnh SQL để đếm tổng số sản phẩm trong giỏ hàng của người dùng
        $sql = "SELECT COUNT(so_luong) AS tong_product FROM gio_hang WHERE id_user = ?";
        return parent::pdoQuery($sql , $data);  // Trả về tổng số sản phẩm trong giỏ hàng
    }

    // Phương thức xóa sản phẩm khỏi giỏ hàng của người dùng
    public function deleteProductCart($data){
        // Câu lệnh SQL để xóa sản phẩm khỏi giỏ hàng theo id_san_pham và id_user
        $sql = "DELETE FROM gio_hang WHERE id_san_pham = ? AND id_user = ?";
        return parent::pdoQuery($sql , $data);  // Xóa sản phẩm khỏi giỏ hàng
    }
}
?>
