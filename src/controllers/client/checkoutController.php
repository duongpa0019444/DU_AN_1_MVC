<?php 
    namespace controllers\client;

use models\cart;
use models\checkOut;
use models\donHang;

    class checkoutController{
        public $Base_url = BASE_URL;
        public function index(){
            $id_user = $_SESSION['user_id'];
            $checkOrders = (new checkOut())->check([$id_user]);

            $tong_tien = 0;
            foreach($checkOrders as $checkOrder){
                $tong_tien += $checkOrder['tong_phu'];
            }

            
            //xử lý logic
            $diachi =[];
            $donhang =[];
            $detailOrder = [];
            if($_SERVER['REQUEST_METHOD']=="POST"){
                
                foreach($_POST as $key => $value){
                    

                    if($key == 'ho_va_ten' || $key =='so_dien_thoai' || $key =='chi_tiet_dia_chi'){
                        $diachi[$key] = $value;
                        
                    }elseif($key == 'ghi_chu' || $key == 'id_thanh_toan'){
                        $donhang[$key] = $value;
                    }elseif($key != 'ho_va_ten' && $key !='so_dien_thoai' && $key !='chi_tiet_dia_chi' && $key != 'ghi_chu' && $key != 'id_thanh_toan'){
                        $detailOrder[$key] = $value;
                    }

                }

                
                $diachi['id_user'] = $id_user;
                $donhang['id_user']  = $id_user;
                $donhang['tong_tien'] = $tong_tien;
                $id_dia_chi = (new checkOut())->insertDiachi($diachi); //insert địa chỉ
                $donhang['id_dia_chi'] = $id_dia_chi;
                $id_don_hang = (new donHang())->insertDonHang($donhang); //đây là lệnh insert đơn hàng
                
                $chi_tiet_dh = [];
                foreach($detailOrder as $key => $value){
                    if(strpos($key, 'id_san_pham') === 0){ //tìm kiếm chuỗi con trong chuỗi lớn
                        $index = str_replace('id_san_pham' , '' , $key); //lấy index trong idsp để đi tìm kiếm những slsp tương ứng
                        if(isset($detailOrder['sl_san_pham'.$index])){ //tìm kiếm slsp tuong ứng với index đã lấy
                            $chi_tiet_dh [] = [
                                'id_san_pham' => $value,
                                'sl_san_pham' => $detailOrder['sl_san_pham'.$index],
                                'id_don_hang' => $id_don_hang
                            ] ;
                        }
                    }
                }

                //sau khi mà có một mảng các mảng dữ liệu gồm id, sl, id_dh thì dùng vòng lặp và insert vào chi_tiet_dh
                foreach($chi_tiet_dh as $item_chi_tiet){
                    
                    (new donHang())->insertDetailOrder($item_chi_tiet); //insert chi tiết đơn hàng
                    
                }

                (new cart())->deleteCartUser([$_SESSION['user_id']]); //lệnh xóa sản phẩm trong giỏ hàng sau khi ng dùng thêm vào đơn hàng

                header("location: $this->Base_url/completedOrder");
                exit;
            }


            
            
            require_once "./src/views/Client/checkout.php";
        }
    }
?>