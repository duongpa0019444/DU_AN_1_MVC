<?php 
    namespace controllers\client;

use models\client\Product;

    class completedController{
        public $Base_url = BASE_URL;
        public function index(){
            
            if($_SERVER['REQUEST_METHOD']=="POST"){
               header("location: $this->Base_url/acout"); 
            }

            $products = (new Product())->finproductNewLimit([]);
            require_once "./src/views/Client/completed.php";
        }
    }
?>