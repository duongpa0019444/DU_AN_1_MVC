<?php 
    namespace controllers\client;
    use models\blog;

    class blogController{
        public function index(){
            $baiviets =(new blog())->allBaiViet([]);
            $baivietnew = (new blog())->baiVietNew([]);
            require_once "./src/views/Client/blog.php";
        }
    }
?>