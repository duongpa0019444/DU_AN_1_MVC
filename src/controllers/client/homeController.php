<?php

namespace controllers\client;

use models\cart;
use models\home;

class homeController
{
    public $modelOject;
    public $Base_url = BASE_URL;
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

                    // đi kiểm tra xem trong giỏ hàng của user có sản phẩm đấy chưa, nếu chưa thì thêm , còn nếu rồi thì update số lượng
                    $productCart = (new cart())->findCartUserId([$_SESSION['user_id'],$_POST['addCart']]);
                        
                    if($productCart>0){
                        //update số lượng sản phẩm 
                        (new cart())->updateSL([$_SESSION['user_id'],$_POST['addCart']]);
                        header("location: $this->Base_url/");

                    }else{
                        //thêm sản phẩm mới vào giỏ hàng
                        (new cart())->create([$_SESSION['user_id'] , $_POST['addCart'] , 1]);
                        header("location: $this->Base_url/");
                    }
    
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