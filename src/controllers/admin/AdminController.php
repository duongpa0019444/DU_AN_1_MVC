<?php 

    namespace controllers\admin;
use model\admin\homeAdmin;
    class AdminController {
        public $base_url = BASE_URL;

        public function repload(){
            $_SESSION['admin'] = 1;
            header("location: $this->base_url/admin/dashboard");
        }
        
        public function index() {
            
            require_once "./src/views/Admin/home.php";

        }


        public function dangxuat(){
            unset($_SESSION['admin']);
            header("location: $this->base_url/acout");
        }
    }
?>