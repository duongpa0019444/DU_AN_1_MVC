<?php 
    namespace controllers\client;

use models\cart;

    class cartController{
        public function index(){
            if(isset($_SESSION['user_id'])){
                $id_user = $_SESSION['user_id'];
                $productCarts = (new cart())->findProductCartUsser([$id_user]);
            }

            require_once "./src/views/Client/cart.php";
        }
    }
?>