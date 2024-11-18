<?php 
    namespace controllers\admin;

    use commons\baseModel;

    class productController extends baseModel{
        public function index(){
            require_once "./src/views/Admin/product/product-list.php";
        }

        public function create(){
            require_once "./src/views/Admin/product/product-add.php";
        }

        public function edit(){
            require_once "./src/views/Admin/product/product-edit.php";
        }
    }

?>