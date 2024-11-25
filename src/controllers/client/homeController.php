<?php

namespace controllers\client;

use models\cart;
use models\home;

class homeController
{
    public $modelOject;

    public function __construct()
    {
        $this->modelOject = new home();
    }

    public function index(){

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            
            if(!isset($_SESSION['user_id'])){
                $messaddCart = "Đăng nhập để thêm sản phẩm vào giỏ hàng của bạn!";
                require_once "src/views/Client/acout.php";
            }else{
                if(isset($_POST['addCart'])){
                    //còn phải đi kiểm tra xem trong giỏ hàng của user có sản phẩm đấy chưa, nếu chưa thì thêm , còn nếu rồi thì update số lượng
                    (new cart())->create([$_SESSION['user_id'] , $_POST['addCart'] , 1]);
    
                }
            }
           
        }

        $products = $this->modelOject->getAllProduct();
        $productss = $this->modelOject->getAllProducts();
        $categories = $this->modelOject->getAllCate();
        $blogs = $this->modelOject->getAllBlog();

        require_once "./src/views/Client/home.php";
    }
}

?>