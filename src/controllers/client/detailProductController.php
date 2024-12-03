<?php 
namespace controllers\client;

use models\cart; // Import model quản lý giỏ hàng
use models\detailProduct; // Import model quản lý chi tiết sản phẩm

class detailProductController{
    
    public $modelObject; // Biến lưu trữ đối tượng model
    public $Base_url = BASE_URL; // Đường dẫn cơ sở

    public function __construct()
    {
        $this->modelObject = new detailProduct(); // Khởi tạo đối tượng detailProduct và gán vào modelObject
    }

    public function index(){    
        // Lấy ID sản phẩm từ query string
        $id = $_GET['id'];
        $product = $this->modelObject->getProduct($id); // Lấy thông tin chi tiết sản phẩm dựa vào ID

        // Xử lý khi form được gửi bằng phương thức POST
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            
            // Kiểm tra xem người dùng đã đăng nhập chưa
            if(!isset($_SESSION['user_id'])){  
                // Nếu chưa đăng nhập, đặt thông báo yêu cầu đăng nhập trong cookie
                setcookie("mess", "Đăng nhập để thêm sản phẩm vào giỏ hàng của bạn!", time() + 10, "/");
                // Chuyển hướng người dùng tới trang đăng nhập
                header("location: $this->Base_url/acout"); 
            } else {
                // Nếu người dùng đã đăng nhập
                if(isset($_POST['addCart'])){ 
                    // Kiểm tra xem sản phẩm đã có trong giỏ hàng chưa
                    $productCart = (new cart())->findCartUserId([$_SESSION['user_id'], $_POST['addCart']]);
                    
                    if($productCart > 0){
                        // Nếu đã có, cập nhật số lượng sản phẩm
                        (new cart())->updateSL([$_SESSION['user_id'], $_POST['addCart']]);
                        // Chuyển hướng về trang sản phẩm
                        header("location: $this->Base_url/product");

                    } else {
                        // Nếu chưa có, thêm sản phẩm mới vào giỏ hàng với số lượng cụ thể
                        (new cart())->create([$_SESSION['user_id'], $_POST['addCart'], $_POST['so_luong']]);
                        // Chuyển hướng lại trang chi tiết sản phẩm
                        header("location: $this->Base_url/detailProduct?id=".$id);
                    }
                }
            }
        }

        // Gọi file view để hiển thị giao diện chi tiết sản phẩm
        require_once "./src/views/Client/detailProduct.php";
    }
}
?>
