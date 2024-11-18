<?php 
    namespace controllers\admin;

    use commons\baseModel;

    class ordersController extends baseModel{
        public function index(){
            require_once "./src/views/Admin/oder/orders-list.php";
        }

        public function create(){
            require_once "./src/views/Admin/order/orders-add.php";
        }

        public function edit(){
            require_once "./src/views/Admin/order/orders-edit.php";
        }
    }

?>