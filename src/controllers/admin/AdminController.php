<?php 

namespace controllers\admin;

use models\home;

class AdminController {
    public $base_url = BASE_URL; // Định nghĩa URL gốc để điều hướng

    // Phương thức đăng nhập admin
    public function repload(){
        $_SESSION['admin'] = 1; // Đặt session cho admin
        header("location: $this->base_url/admin/dashboard"); // Chuyển hướng đến trang dashboard của admin
    }
    
    // Phương thức hiển thị trang chủ của admin
    public function index() {
        $data = (new home())->countAllDashboard([]); // Lấy dữ liệu cho dashboard từ model 'home'
        require_once "./src/views/Admin/home.php"; // Hiển thị giao diện trang chủ của admin
    }

    // Phương thức đăng xuất
    public function dangxuat(){
        unset($_SESSION['admin']); // Xóa session admin khi đăng xuất
        header("location: $this->base_url/acout"); // Chuyển hướng về trang tài khoản
    }
}
?>
