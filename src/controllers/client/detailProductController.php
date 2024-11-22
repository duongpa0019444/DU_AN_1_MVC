<?php 
    namespace controllers\client;
    use models\detailProduct;
    class detailProductController{
        
        public $modelObject;

        public function __construct()
        {
            $this->modelObject = new detailProduct();
        }
        public function index(){    
                $id = $_GET['id'];
                $product = $this->modelObject->getProduct($id);
                // debug($product);
                require_once "./src/views/Client/detailProduct.php";
        }
    }
?>