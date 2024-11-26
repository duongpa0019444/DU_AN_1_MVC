<?php 
    namespace controllers\client;

use models\cart;

    class cartController{
        public $Base_url = BASE_URL;
        
        public function index(){
            if(isset($_SESSION['user_id'])){
                $id_user = $_SESSION['user_id'];
                $productCarts = (new cart())->findProductCartUsser([$id_user]);
            }
            if(isset($_GET['id_SP'])){
                (new cart())->deleteProductCart([$_GET['id_SP'] , $_SESSION['user_id']]);
                header("location: $this->Base_url/cart");
            }

            require_once "./src/views/Client/cart.php";
        }

        
    }
?>