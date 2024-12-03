<?php 
// Định nghĩa namespace cho các controller xử lý logic phía client
    namespace controllers\client; 
    class aboutController{
        public function index(){
            //gọi view để hiển thị ra trang about
            require_once "./src/views/Client/about.php";
        }
    }
?>