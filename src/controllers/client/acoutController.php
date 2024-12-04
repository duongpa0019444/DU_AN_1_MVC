<?php 
namespace controllers\client;

use models\acout;
use models\donHang;

class acoutController {
    public $Base_url = BASE_URL; // Định nghĩa URL gốc để điều hướng

    public function index(){
        if ($_SERVER['REQUEST_METHOD'] == "POST") { // Kiểm tra nếu yêu cầu là POST
            $data = [];
            
            // Nếu người dùng yêu cầu đăng nhập
            if (isset($_POST['logIn'])) {
                // Xử lý đăng nhập
                foreach ($_POST as $key => $value) {
                    if ($key != "logIn") { // Loại bỏ key 'logIn'
                        $data[$key] = $value;
                    }
                }

                $user = (new acout())->logIn($data); // Gọi phương thức đăng nhập từ model

                if ($user < 1) {
                    
                    // Nếu đăng nhập thất bại
                    $messDN = "Sai số điện thoại hoặc mật khẩu!";
                    require_once "src/views/Client/acout.php"; // Hiển thị thông báo lỗi
                }
            } 
            
            // Nếu người dùng yêu cầu đăng ký
            elseif (isset($_POST['signIn'])) {
                // Xử lý đăng ký
                $find = (new acout())->findAcout([$_POST['so_dien_thoai'], $_POST['email']]); // Kiểm tra số điện thoại và email đã được đăng ký hay chưa
                
                if ($find['sl'] > 0) {  // Nếu đã tồn tại tài khoản
                    $messDK = "Số điện thoại hoặc Email đã tồn tại!";
                    require_once "../DU_AN_1_MVC/src/views/Client/acout.php"; // Hiển thị thông báo lỗi
                } else { 
                    // Nếu chưa tồn tại thì thêm tài khoản vào database
                    foreach ($_POST as $key => $value) {
                        if ($key != "signIn") { // Loại bỏ key 'signIn'
                            $data[$key] = $value;
                        }
                    }

                    // Gọi phương thức đăng ký từ model
                    (new acout())->signIn($data);

                    // Đăng nhập ngay sau khi đăng ký
                    $user = (new acout())->logIn(['so_dien_thoai' => $data['so_dien_thoai'], 'mat_khau' => $data['mat_khau']]);
                }

            } 
            
            // Nếu người dùng yêu cầu cập nhật tài khoản
            elseif (isset($_POST['detailAccount'])) {
                $mess = "";
                $mess2 = "";
                $data = [];

                // Xử lý việc tải ảnh mới cho tài khoản
                if (isset($_FILES['hinh_anh']) && $_FILES['hinh_anh']["size"] > 0) {
                    $dir = "assets/Admin/images/user/" . basename($_FILES['hinh_anh']['name']);
                    $tmp_name = $_FILES['hinh_anh']['tmp_name'];
                    $_POST['hinh_anh'] = $dir;
                    move_uploaded_file($tmp_name, $dir); // Tải ảnh lên server
                }

                // Cập nhật thông tin tài khoản
                $dataUpdate['id'] = $_SESSION['user_id'];
                foreach ($_POST as $key => $value) {
                    if ($key != 'detailAccount') { // Loại bỏ key 'detailAccount'
                        $dataUpdate[$key] = $value;
                    }
                }

                // Kiểm tra và cập nhật mật khẩu nếu có
                if (!empty($dataUpdate['password-old']) && !empty($dataUpdate['mat_khau']) && !empty($dataUpdate['confirm-password'])) {
                    if ($dataUpdate['mat_khau'] == $dataUpdate['confirm-password']) {
                        $user = (new acout())->findUserId([$_SESSION['user_id']]);
                        if ($dataUpdate['password-old'] == $user['mat_khau']) {
                            // Cập nhật thông tin người dùng
                            foreach ($dataUpdate as $key => $value) {
                                if ($key != 'password-old' && $key != 'confirm-password') {
                                    $data[$key] = $value;
                                }
                            }
                            (new acout())->updateUser($data);
                            $mess2 = "Bạn vừa cập nhật tài khoản!";
                        } else {
                            $mess = "Sai mật khẩu cũ! Mời nhập lại!";
                        }
                    } else {
                        $mess = "Mật khẩu xác nhận sai! Mời nhập lại!";
                    }
                } else {
                    // Cập nhật thông tin mà không thay đổi mật khẩu
                    foreach ($dataUpdate as $key => $value) {
                        if ($key != "password-old" && $key != "mat_khau" && $key != "confirm-password") {
                            $data[$key] = $value;
                        }
                    }
                    (new acout())->updateUser($data);
                }

                // Hiển thị thông tin người dùng đã cập nhật
                if (isset($_SESSION['user_id'])) {
                    $user = (new acout())->finUserId([$_SESSION['user_id']]);
                    $orders = (new donHang())->allDonHang([$_SESSION['user_id']]);
                    $mess2 = "Bạn vừa cập nhật tài khoản!";
                }
            }

            // Nếu người dùng đăng nhập thành công
            if ($user > 0) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['vai_tro'] = $user['vai_tro'];
                $_SESSION['img_user'] = $user['hinh_anh'];
                $orders = (new donHang())->allDonHang([$user['id']]);
                
                require_once "../DU_AN_1_MVC/src/views/Client/acout.php"; // Hiển thị trang tài khoản
            }
        } else {
            // Nếu không phải yêu cầu POST
            if (isset($_SESSION['user_id'])) {
                $user = (new acout())->finUserId([$_SESSION['user_id']]); // Lấy thông tin người dùng từ session
                $_SESSION['img_user'] = $user['hinh_anh'];

                $orders = (new donHang())->allDonHang([$_SESSION['user_id']]);
            }

            require_once "../DU_AN_1_MVC/src/views/Client/acout.php"; // Hiển thị trang tài khoản
        }
    }

    public function dangxuat() {
        session_destroy(); // Xóa session khi đăng xuất
        header("location: $this->Base_url/"); // Chuyển hướng về trang chủ
    }
}
?>
