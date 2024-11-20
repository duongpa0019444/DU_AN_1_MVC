<?php 
    namespace controllers\client;

    use models\client\Product;

    class productController{

        public $modelOject;

        public function __construct()
        {
            $this->modelOject = new Product();
        }
    
        public function index(){
            
            $allCategory = $this->modelOject->allCategory([]);
            $productNews = $this->modelOject->productNew([]);
            $allCategorySmall = $this->modelOject->allCategorySmall([]);
            if(isset($_GET['priceProduct'])){
                $gia = $_GET['priceProduct'];
                $products = $this->modelOject->findPrice([$gia,$gia]);
                
            }elseif(isset($_GET['idSM'])){
                $idSM = $_GET['idSM'];
                $products = $this->modelOject->findProductCategorySM([$idSM]);
            }else{
                $products = $this->modelOject->index([]);
            }
             
            require_once "./src/views/Client/product.php";
        }
    }
?>