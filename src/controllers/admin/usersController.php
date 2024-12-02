<?php

namespace controllers\admin;

use models\user;

class usersController
{
    public $modelObject;

    public function __construct()
    {
        $this->modelObject = new user();
    }
    public function index()
    {
        $users = $this->modelObject->allUser();
        require_once "./src/views/Admin/user/users-list.php";
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST['hinh_anh'] = "assets/Admin/images/user/" . $_FILES['hinh_anh']['name'];
            $tmp_name = $_FILES['hinh_anh']['tmp_name'];
            $dir = "assets/Admin/images/user/" . $_FILES['hinh_anh']['name'];
            move_uploaded_file($tmp_name, $dir);
            $users = $this->modelObject->createUser($_POST);

            header('location: ' . BASE_URL . '/admin/users-list');
        } else {
            require_once "./src/views/Admin/user/users-add.php";
        }
    }

    public function delete()
    {
        $id = $_GET['id'];
        $this->modelObject->deleteUser(['id' => $id]);
        header('location: ' . BASE_URL . '/admin/users-list');
    }


    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_FILES['hinh_anh']) && $_FILES['hinh_anh']['size'] > 0) {
                $_POST['hinh_anh'] = "assets/Admin/images/user/" . $_FILES['hinh_anh']['name'];
            }
            $tmp_name = $_FILES['hinh_anh']['tmp_name'];
            $dir = "assets/Admin/images/user/" . $_FILES['hinh_anh']['name'];
            move_uploaded_file($tmp_name, $dir);
            $param = $_POST;
            $param['id'] = $_GET['id'];
            $this->modelObject->updateUser($param);
            header('location: ' . BASE_URL . '/admin/users-list');
        } else {
            $id = $_GET['id'];
            $user = $this->modelObject->getUser(['id' => $id]);
            require_once "./src/views/Admin/user/users-edit.php";
        }
    }
}
