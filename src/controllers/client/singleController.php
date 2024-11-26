<?php 
    namespace controllers\client;

use models\blog;
use models\single;

    class singleController{
        public function index(){
            $id = $_GET['id'];
            $baivietchitiet =(new single())->detailsBaiviet([$id]);
            $baivietnew = (new blog())->baiVietNew([]);

            require_once "./src/views/Client/single.php";
        }
    }
?>