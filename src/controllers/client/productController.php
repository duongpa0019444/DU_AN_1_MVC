<?php 
    namespace controllers\client;

use models\client\Product;

    class productController{
        public function index(){
            $products = (new Product())->index([]);
            $allCategory = (new Product())->allCategory([]);
            // $allCategorySmall = (new Product())->allCategorySmall([]);
            require_once "./src/views/Client/product.php";
        }
    }
?>