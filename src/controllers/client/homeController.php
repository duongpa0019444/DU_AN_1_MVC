<?php
namespace controllers\client;// Namespace định nghĩa nhóm controller xử lý logic phía client
use models\cart; // Model quản lý giỏ hàng
use models\home; // Model quản lý trang chủ

class homeController
{
    public $modelOject; // Đối tượng model để thao tác dữ liệu trang chủ
    public $Base_url = BASE_URL; // URL cơ sở được định nghĩa sẵn

    public function __construct()
    {
        // Khởi tạo đối tượng model "home" và gán vào modelObject
        $this->modelOject = new home();
    }

    public function index()
    {
        // Kiểm tra nếu phương thức HTTP là POST
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            // Kiểm tra người dùng đã đăng nhập hay chưa
            if (!isset($_SESSION['user_id'])) {
                // Thông báo nếu chưa đăng nhập và chuyển đến trang đăng nhập
                $messaddCart = "Đăng nhập để thêm sản phẩm vào giỏ hàng của bạn!";
                require_once "src/views/Client/acout.php";
            } else {
                // Xử lý thêm sản phẩm vào giỏ hàng
                if (isset($_POST['addCart'])) {

                    // Tìm kiếm sản phẩm trong giỏ hàng của người dùng
                    $productCart = (new cart())->findCartUserId([$_SESSION['user_id'], $_POST['addCart']]);
                    
                    if ($productCart > 0) {
                        // Nếu đã tồn tại, cập nhật số lượng sản phẩm
                        (new cart())->updateSL([$_SESSION['user_id'], $_POST['addCart']]);
                        header("location: $this->Base_url/");
                    } else {
                        // Nếu chưa có, thêm sản phẩm mới vào giỏ hàng
                        (new cart())->create([$_SESSION['user_id'], $_POST['addCart'], 1]);
                        header("location: $this->Base_url/");
                    }
                }
            }
        }

        // Lấy dữ liệu sản phẩm, danh mục và blog để hiển thị
        $products = $this->modelOject->getAllProduct();  // Lấy tất cả sản phẩm
        $productss = $this->modelOject->getAllProducts(); // Lấy thêm dữ liệu sản phẩm khác
        $categories = $this->modelOject->getAllCate();   // Lấy danh sách danh mục
        $blogs = $this->modelOject->getAllBlog();        // Lấy danh sách bài blog

        // Kết xuất (render) giao diện trang chủ
        require_once "./src/views/Client/home.php";
    }
}
?>
