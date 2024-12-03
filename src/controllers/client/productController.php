<?php

namespace controllers\client;  // Namespace này dành cho các controller xử lý logic phía client

use models\cart;  // Model quản lý giỏ hàng
use models\Category; // Model quản lý danh mục sản phẩm
use models\Product;  // Model quản lý sản phẩm

class productController
{
    public $modelOject;  // Đối tượng model để thao tác với dữ liệu sản phẩm
    public $Base_url = BASE_URL;  // URL cơ sở cho các liên kết

    public function __construct()
    {
        // Tạo đối tượng product và gắn vào modelObject
        $this->modelOject = new Product();
    }

    public function index()  // Hàm này lấy dữ liệu của sản phẩm và danh mục từ model để hiển thị ra view
    {
        // Lấy tất cả các danh mục lớn và nhỏ
        $allCategory = (new Category())->allCategory([]);
        $allCategorySmall = (new Category())->allCategorySmall([]);

        // Lấy các sản phẩm mới
        $productNews = $this->modelOject->productNew([]);

        // Kiểm tra các tham số trong URL để lọc sản phẩm theo giá, từ khóa, danh mục
        if (isset($_GET['priceProduct'])) {
            $gia = $_GET['priceProduct'];
            // Tìm sản phẩm theo mức giá
            $products = $this->modelOject->findPrice([$gia, $gia]);
        } elseif (isset($_GET['key_word'])) {
            $keyWord = $_GET['key_word'];
            // Tìm sản phẩm theo từ khóa tìm kiếm
            $products = $this->modelOject->findKeyWord($keyWord);
        } elseif (isset($_GET['idSM'])) {
            $idSM = $_GET['idSM'];
            // Tìm sản phẩm theo danh mục nhỏ
            $products = $this->modelOject->findProductCategorySM([$idSM]);
        } elseif (isset($_GET['id_DM_home'])) {
            $id = $_GET['id_DM_home'];
            // Tìm sản phẩm theo danh mục lớn
            $products = $this->modelOject->findProductCategory([$id]);
        } else {
            // Nếu không có tham số nào, lấy tất cả sản phẩm
            $products = $this->modelOject->index([]);
        }

        // Xử lý khi người dùng gửi POST request (ví dụ, thêm sản phẩm vào giỏ hàng)
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Kiểm tra xem người dùng đã đăng nhập chưa
            if (!isset($_SESSION['user_id'])) {
                // Yêu cầu người dùng đăng nhập
                setcookie("mess", "Đăng nhập để thêm sản phẩm vào giỏ hàng của bạn!", time() + 10, "/");
                header("location: $this->Base_url/acout"); // Chuyển hướng về trang sản phẩm

            } else {
                if (isset($_POST['addCart'])) {
                    // Kiểm tra xem sản phẩm đã có trong giỏ hàng chưa
                    $productCart = (new cart())->findCartUserId([$_SESSION['user_id'], $_POST['addCart']]);
                    if ($productCart > 0) {
                        // Nếu có, cập nhật số lượng sản phẩm
                        (new cart())->updateSL([$_SESSION['user_id'], $_POST['addCart']]);
                        header("location: $this->Base_url/product"); // Chuyển hướng về trang sản phẩm
                    } else {
                        // Nếu không có, thêm sản phẩm mới vào giỏ hàng
                        (new cart())->create([$_SESSION['user_id'], $_POST['addCart'], 1]);
                        header("location: $this->Base_url/product"); // Chuyển hướng về trang sản phẩm
                    }
                }
            }
        }

        // Render view sản phẩm
        require_once "./src/views/Client/product.php";
    }
}
?>
