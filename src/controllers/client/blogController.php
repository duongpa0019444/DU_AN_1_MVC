<?php 
namespace controllers\client; 
// Định nghĩa namespace cho các controller xử lý logic phía client

use models\blog; 
// Import model blog để xử lý dữ liệu liên quan đến bài viết

class blogController {
    // Controller quản lý logic cho trang blog

    public function index() {
        // Hàm index chịu trách nhiệm lấy dữ liệu bài viết và hiển thị giao diện
        
        $baiviets = (new blog())->allBaiViet([]); 
        // Lấy tất cả các bài viết từ model blog
        
        $baivietnew = (new blog())->baiVietNew([]); 
        // Lấy danh sách các bài viết mới từ model blog
        
        require_once "./src/views/Client/blog.php"; 
        // Gọi file view để hiển thị giao diện trang blog
    }
}
?>
