<?php 
namespace controllers\client; 
// Định nghĩa namespace cho các controller xử lý logic phía client

class contactController {
    // Controller quản lý logic cho trang liên hệ

    public function index() {
        // Hàm index chịu trách nhiệm hiển thị giao diện trang liên hệ
        
        require_once "./src/views/Client/contact.php"; 
        // Gọi file view để hiển thị giao diện trang liên hệ
    }
}
?>
