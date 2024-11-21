<?php 
    namespace controllers\client;

use models\client\cart;

    class cartController{
        public function index(){
            $id_user = $_SESSION['user_id'];
            $productCarts = (new cart())->findProductCartUsser([$id_user]);
            require_once "./src/views/Client/cart.php";
        }
    }
?>