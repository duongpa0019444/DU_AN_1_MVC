<?php 
namespace controllers\client;

use models\Product; // Model xử lý dữ liệu sản phẩm

class completedController {
    public $Base_url = BASE_URL; // URL gốc để điều hướng

    public function index() {
        // Kiểm tra nếu yêu cầu là POST
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            header("location: $this->Base_url/acout"); 
            // Nếu có form POST, chuyển hướng người dùng đến trang tài khoản (acout)
        }

        // Lấy danh sách sản phẩm mới với giới hạn (số lượng sản phẩm nhất định)
        $products = (new Product())->finproductNewLimit([]);

        require_once "./src/views/Client/completed.php"; 
        // Gọi view để hiển thị giao diện trang hoàn tất đơn hàng
    }
}
?>
