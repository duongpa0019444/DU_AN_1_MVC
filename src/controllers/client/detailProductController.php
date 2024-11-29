<?php 
    namespace controllers\client;

use models\cart;
use models\detailProduct;
    class detailProductController{
        
        public $modelObject;
        public $Base_url = BASE_URL;
        public function __construct()
        {
            $this->modelObject = new detailProduct();
        }
        public function index(){    
                $id = $_GET['id'];
                $product = $this->modelObject->getProduct($id);
                // debug($product);
                if($_SERVER["REQUEST_METHOD"] == "POST"){
            
                    if(!isset($_SESSION['user_id'])){  //Đang sửa ở đây----------------------------------------------------------
                        $messaddCart = "Đăng nhập để thêm sản phẩm vào giỏ hàng của bạn!";
                        require_once "src/views/Client/acout.php";
                    }else{
                        if(isset($_POST['addCart'])){
                            // đi kiểm tra xem trong giỏ hàng của user có sản phẩm đấy chưa, nếu chưa thì thêm , còn nếu rồi thì update số lượng
                            $productCart = (new cart())->findCartUserId([$_SESSION['user_id'],$_POST['addCart']]);
                                
                            if($productCart>0){
                                //update số lượng sản phẩm 
                                (new cart())->updateSL([$_SESSION['user_id'],$_POST['addCart']]);
                                header("location: $this->Base_url/product");
        
                            }else{
                                //thêm sản phẩm mới vào giỏ hàng
                                (new cart())->create([$_SESSION['user_id'] , $_POST['addCart'] , 1]);
                                header("location: $this->Base_url/product");
        
                            }
                            
            
                        }
                    }
                   
                }

                require_once "./src/views/Client/detailProduct.php";
        }
    }
?>