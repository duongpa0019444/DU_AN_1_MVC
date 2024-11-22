<?php 
    namespace controllers\client;
    use models\single;

    class singleController{
        public function index(){
            $id = $_GET['id'];
            $baivietchitiet =(new single())->detailsBaiviet([$id]);
            require_once "./src/views/Client/single.php";
        }
    }
?>