<?php 
    namespace controllers\client;

use models\acout;
use models\donHang;

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

                    if($user<1){
                        $messaddCart = "Sai số điện thoại hoặc mật khẩu!";
                        require_once "src/views/Client/acout.php";
                    };

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

                }elseif(isset($_POST['detailAccount'])){
                    //phần cập nhật tài khoản

                    
                    $dataUpdate['id']= $_SESSION['user_id'];
                    $data = [];

                    $mess = "";
                    $mess2 = "";

                    foreach($_POST as $key => $value){ //hàm này đi bỏ cái key detailAccount
                        if($key != 'detailAccount'){
                            $dataUpdate[$key] = $value;
                        }
                    }

                    
                    if(!empty($dataUpdate['password-old']) && !empty($dataUpdate['mat_khau']) && !empty($dataUpdate['confirm-password'])){
                        //thực  hiện việc cập nhật tất cả thông tin nếu như điền đầy đủ thông tin của form cập nhật mật khẩu

                        if($dataUpdate['mat_khau'] == $dataUpdate['confirm-password']){
                            $user = (new acout())->findUserId([$_SESSION['user_id']]);
                            if($dataUpdate['password-old'] == $user['mat_khau']){

                                foreach($dataUpdate as $key => $value){
                                    if($key != 'password-old' && $key != 'confirm-password'){
                                        $data[$key] = $value;
                                    
                                    }
                                }
                                (new acout())->updateUser($data);
                                $mess2 = "Bạn vừa cập nhật tài khoản!";

                            }else{
                                $mess = "sai mật khẩu cũ! mời nhập lại!";
                            }

                        }else{
                            $mess = "mật khẩu xác nhận sai! mời nhập lại!";

                        }
                        

                    }else{
                        //thực hiện cập nhật các thông tin khác
                        foreach($dataUpdate as $key => $value){
                            if($key != "password-old" && $key != "mat_khau" && $key != "confirm-password"){
                                $data[$key] = $value;
                            }
                        }

                        (new acout())->updateUser($data);

                    }

                    if(isset($_SESSION['user_id'])){ 
                        //nếu như vào trang acout mà có user_id thì lấy dữ liệu của user đó ra và gắn vào form chi tiết tài khoản
                        $user = (new acout())->finUserId([$_SESSION['user_id']]);
                        $orders = (new donHang())->allDonHang([$_SESSION['user_id']]);
                        
                    }
                }

                
                if($user > 0){
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['vai_tro'] = $user['vai_tro'];
                    $orders = (new donHang())->allDonHang([$user['id']]);
                    
                    require_once "../DU_AN_1_MVC/src/views/Client/acout.php";
                    // header("location: $this->Base_url/acout");
                }
                

                
                
            }else{
                if(isset($_SESSION['user_id'])){ 
                    //nếu như vào trang acout mà có user_id thì lấy dữ liệu của user đó ra và gắn vào form chi tiết tài khoản
                    $user = (new acout())->finUserId([$_SESSION['user_id']]);
                    $orders = (new donHang())->allDonHang([$_SESSION['user_id']]);
                    
                }

                require_once "../DU_AN_1_MVC/src/views/Client/acout.php";

                
            } 
            
            
            
           
            


        }


        
        public function dangxuat(){
            session_destroy();
            header("location: $this->Base_url/");
        }


       

        
    }
?>