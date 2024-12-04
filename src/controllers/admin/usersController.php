<?php

namespace controllers\admin;  // Định nghĩa controller nằm trong namespace "admin"

use models\user;  // Sử dụng model user để xử lý các thao tác liên quan đến người dùng

class usersController
{
    public $modelObject;  // Biến lưu trữ đối tượng model user

    // Constructor - Tạo đối tượng user khi khởi tạo controller
    public function __construct()
    {
        $this->modelObject = new user();  // Khởi tạo đối tượng user
    }

    // Phương thức index - Hiển thị danh sách người dùng
    public function index()
    {
        // Lấy danh sách người dùng từ model user
        $users = $this->modelObject->allUser();
        
        // Bao gồm view để hiển thị danh sách người dùng
        require_once "./src/views/Admin/user/users-list.php";
    }

    // Phương thức create - Tạo mới người dùng
    public function create()
    {
        // Kiểm tra xem phương thức là POST (người dùng gửi thông tin qua form)
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Lưu tên file ảnh của người dùng vào biến $_POST
            $_POST['hinh_anh'] = "assets/Admin/images/user/" . $_FILES['hinh_anh']['name'];
            
            // Lấy tên tạm của file ảnh và di chuyển đến thư mục lưu trữ
            $tmp_name = $_FILES['hinh_anh']['tmp_name'];
            $dir = "assets/Admin/images/user/" . $_FILES['hinh_anh']['name'];
            move_uploaded_file($tmp_name, $dir);  // Di chuyển file ảnh đến thư mục đích
            
            // Tạo người dùng mới bằng phương thức createUser từ model user
            $users = $this->modelObject->createUser($_POST);

            // Sau khi tạo thành công, chuyển hướng về danh sách người dùng
            header('location: ' . BASE_URL . '/admin/users-list');
        } else {
            // Nếu không phải là POST, bao gồm view tạo người dùng mới
            require_once "./src/views/Admin/user/users-add.php";
        }
    }

    // Phương thức delete - Xóa người dùng
    public function delete()
    {
        // Lấy id người dùng từ tham số URL
        $id = $_GET['id'];

        // Gọi phương thức deleteUser từ model để xóa người dùng
        $this->modelObject->deleteUser(['id' => $id]);

        // Sau khi xóa thành công, chuyển hướng về danh sách người dùng
        header('location: ' . BASE_URL . '/admin/users-list');
    }

    // Phương thức update - Cập nhật thông tin người dùng
    public function update()
    {
        // Kiểm tra xem phương thức là POST (người dùng gửi form chỉnh sửa)
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Nếu có ảnh được tải lên, xử lý và cập nhật ảnh của người dùng
            if (isset($_FILES['hinh_anh']) && $_FILES['hinh_anh']['size'] > 0) {
                $_POST['hinh_anh'] = "assets/Admin/images/user/" . $_FILES['hinh_anh']['name'];
            }
            
            // Lưu ảnh tạm thời vào thư mục
            $tmp_name = $_FILES['hinh_anh']['tmp_name'];
            $dir = "assets/Admin/images/user/" . $_FILES['hinh_anh']['name'];
            move_uploaded_file($tmp_name, $dir);

            // Thêm id người dùng vào thông tin cần cập nhật
            $param = $_POST;
            $param['id'] = $_GET['id'];

            // Cập nhật thông tin người dùng qua phương thức updateUser từ model user
            $this->modelObject->updateUser($param);

            // Sau khi cập nhật thành công, chuyển hướng về danh sách người dùng
            header('location: ' . BASE_URL . '/admin/users-list');
        } else {
            // Nếu không phải là POST, lấy thông tin người dùng từ id và hiển thị form chỉnh sửa
            $id = $_GET['id'];
            $user = $this->modelObject->getUser(['id' => $id]);

            // Bao gồm view để hiển thị form chỉnh sửa người dùng
            require_once "./src/views/Admin/user/users-edit.php";
        }
    }
}
?>
