<?php 
    namespace controllers\client;

use models\client\checkOut;
use models\client\donHang;

    class checkoutController{
        public function index(){
            $id_user = $_SESSION['user_id'];
            $checkOrders = (new checkOut())->check([$id_user]);

            $tong_tien = 0;
            foreach($checkOrders as $checkOrder){
                $tong_tien += $checkOrder['tong_phu'];
            }

            
            //xử lý logic để lấy dữ liệu insert vào bảng địa chỉ
            $diachi =[];
            $donhang =[];
            if($_SERVER['REQUEST_METHOD']=="POST"){
                
                foreach($_POST as $key => $value){
                    if($key != 'ghi_chu' && $key !='id_thanh_toan'){
                        $diachi[$key] = $value;
                        
                    }else{
                        $donhang[$key] = $value;
                    }
                }

                
                $diachi['id_user'] = $id_user;
                $donhang['id_user']  = $id_user;
                $donhang['tong_tien'] = $tong_tien;

                (new checkOut())->insertDiachi($diachi);
                (new donHang())->insertDonHang($donhang);


            }


            
            
            require_once "./src/views/Client/checkout.php";
        }
    }
?>