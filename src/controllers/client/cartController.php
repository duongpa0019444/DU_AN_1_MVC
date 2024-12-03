<?php 
namespace controllers\client; 
// Định nghĩa namespace cho các controller xử lý logic phía client

use models\cart; 
// Import model cart để xử lý dữ liệu liên quan đến giỏ hàng

class cartController {
    // Controller quản lý logic cho giỏ hàng

    public $Base_url = BASE_URL; 
    // Biến chứa URL gốc, sử dụng để điều hướng

    public function index() {
        // Hàm index chịu trách nhiệm xử lý logic chính cho trang giỏ hàng

        if (isset($_SESSION['user_id'])) {
            // Kiểm tra người dùng đã đăng nhập hay chưa
            $id_user = $_SESSION['user_id']; 
            // Lấy ID người dùng từ session
            
            $productCarts = (new cart())->findProductCartUsser([$id_user]); 
            // Lấy danh sách sản phẩm trong giỏ hàng của người dùng
        }

        if (isset($_GET['id_SP'])) {
            // Nếu có yêu cầu xóa sản phẩm khỏi giỏ hàng
            (new cart())->deleteProductCart([$_GET['id_SP'], $_SESSION['user_id']]); 
            // Gọi model cart để xóa sản phẩm khỏi giỏ hàng theo ID sản phẩm và người dùng
            
            header("location: $this->Base_url/cart"); 
            // Chuyển hướng về lại trang giỏ hàng
        }

        require_once "./src/views/Client/cart.php"; 
        // Gọi file view để hiển thị giao diện giỏ hàng
    }
}
?>
