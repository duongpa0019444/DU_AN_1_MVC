<?php 
    namespace controllers\admin;

    use commons\baseModel;

    class categoryController extends baseModel{
        public function index(){
            require_once "./src/views/Admin/category/category-list.php";
        }

        public function create(){
            require_once "./src/views/Admin/category/category-add.php";
        }

        public function edit(){
            require_once "./src/views/Admin/category/category-edit.php";
        }

        public function detail(){
            require_once "./src/views/Admin/category/category-detail.php";
        }

        public function editSmall(){
            require_once "./src/views/Admin/category/category-small-edit.php";
        }
    }
?>