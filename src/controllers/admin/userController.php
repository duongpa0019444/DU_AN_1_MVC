<?php 
    namespace controllers\admin;

    use commons\baseModel;

    class usersController extends baseModel{
        public function index(){
            require_once "./src/views/Admin/user/users-list.php";
        }

        public function create(){
            require_once "./src/views/Admin/user/users-create.php";
        }

        public function edit(){
            require_once "./src/views/Admin/user/users-edit.php";
        }
    }

?>