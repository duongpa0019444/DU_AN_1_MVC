<?php 
    namespace controllers\client;

use models\client\blog;

    class blogController{
        public function index(){
            $baiviets = (new blog())->allBaiviet([]);

            require_once "./src/views/Client/blog.php";
        }
    }
?>