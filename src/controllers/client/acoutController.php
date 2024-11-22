<?php 
    namespace controllers\client;

use models\client\acout;
use models\client\donHang;

    class acoutController{
        public $Base_url = BASE_URL;
        public function index(){
            if($_SERVER['REQUEST_METHOD']=="POST"){
                $data = [];
                if (isset($_POST['logIn'])) {
                    // Code xử lý cho phần đăng nhập

                    foreach($_POST as $key => $value){
                        if($key != "logIn"){
                            $data[$key] = $value;
                        }
                    }
        
                    $user = (new acout())->logIn($data);
                    


                } elseif (isset($_POST['signIn'])) {
                    // Code xử lý cho phần đăng ký

                    //Kiểm tra xem số điện thoại và email đã được đăng ký hay chưa
                    $find = (new acout())->findAcout([$_POST['so_dien_thoai'], $_POST['email']]);
                    
                    if($find['sl']>0){  //nếu đã tồn tại thì hiện lỗi

                        
                        $mess = "Số điện thoại hoặc Email đã tồn tại!";
                        require_once "../DU_AN_1_MVC/src/views/Client/acout.php";


                    }else{ // nếu chưa thì thêm tài khoản vào database
                    
                        foreach($_POST as $key => $value){
                            if($key != "signIn"){
                                $data[$key] = $value;
                            }
                        }
                        
                        (new acout())->signIn($data);
                
                    }
                    $user = (new acout())->logIn(['so_dien_thoai' => $data['so_dien_thoai'], 'mat_khau' => $data['mat_khau']]);//đi kiểm tra xem database đã có tài khoản vừa đăng ký hay chưa, nếu có rồi thì đặt session và quay lại trang acout

                }

                
                if($user > 0){
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['vai_tro'] = $user['vai_tro'];
                    $orders = (new donHang())->allDonHang([$user['id']]);
                    
                    require_once "../DU_AN_1_MVC/src/views/Client/acout.php";
                    // header("location: $this->Base_url/acout");
                }

                

                
                
            }            
            
            $orders = (new donHang())->allDonHang([$_SESSION['user_id']]);
            require_once "../DU_AN_1_MVC/src/views/Client/acout.php";
            


        }


        public function dangxuat(){
            session_destroy();
            header("location: $this->Base_url/");
        }


       

        
    }
?>