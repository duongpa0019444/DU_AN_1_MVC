<?php 
namespace controllers\admin;

use models\Category;

class categoryController {
    public $modelObject;
    
    // Constructor để khởi tạo model Category
    public function __construct() {
        $this->modelObject = new Category(); 
    }

    // Phương thức hiển thị danh sách các danh mục
    public function index() {
        $categories = $this->modelObject->allCateAdmin(); // Lấy tất cả danh mục từ model
        require_once "./src/views/Admin/category/category-list.php"; // Hiển thị danh sách danh mục
    }

    // Phương thức thêm mới danh mục
    public function create() {
        if ($_SERVER['REQUEST_METHOD'] == "POST") { 
            // Xử lý khi form tạo danh mục được gửi
            $_POST['hinh_anh'] = "assets/Admin/images/categories/".$_FILES['hinh_anh']['name']; // Đặt đường dẫn cho hình ảnh
            $tmp_name = $_FILES['hinh_anh']['tmp_name'];
            $dir = "assets/Admin/images/categories/".$_FILES['hinh_anh']['name'];
            move_uploaded_file($tmp_name, $dir); // Di chuyển file hình ảnh lên thư mục
            $this->modelObject->createCate($_POST); // Gọi phương thức tạo danh mục trong model
            header('location: '.BASE_URL.'/admin/category-list'); // Chuyển hướng đến danh sách danh mục
        } else {
            require_once "./src/views/Admin/category/category-add.php"; // Hiển thị form tạo danh mục
        }
    }

    // Phương thức xóa danh mục
    public function delete() {
        $id = $_GET['id'];
        if($_GET['soLuongDMSM'] == 0) {
            $this->modelObject->deleteCate(['id' => $id]);
            header('location: '.BASE_URL.'/admin/category-list');
        } else{
            echo "<script>
            alert('KHÔNG THỂ XOÁ DANH MỤC LỚN này vì đang có danh mục con');
            window.location.href = '".BASE_URL."/admin/category-list';
          </script>";
        }
       

    }

    // Phương thức sửa danh mục
    public function edit() {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if (isset($_FILES['hinh_anh']) && $_FILES['hinh_anh']['size'] > 0) {
                $_POST['hinh_anh'] = "assets/Admin/images/categories/".$_FILES['hinh_anh']['name']; // Xử lý upload hình ảnh
            }
            $tmp_name = $_FILES['hinh_anh']['tmp_name'];
            $dir = "assets/Admin/images/categories/".$_FILES['hinh_anh']['name'];
            move_uploaded_file($tmp_name, $dir); // Di chuyển file hình ảnh
            $data = $_POST;
            $data['id'] = $_GET['id']; // Thêm id vào dữ liệu
            $this->modelObject->update($data); // Gọi phương thức cập nhật danh mục trong model
            header('location: '.BASE_URL.'/admin/category-list'); // Chuyển hướng đến danh sách danh mục
        } else {
            $id = $_GET['id']; // Lấy id danh mục từ URL
            $categories = $this->modelObject->getNameCate(['id' => $id]); // Lấy thông tin danh mục cần sửa
            require_once "./src/views/Admin/category/category-edit.php"; // Hiển thị form sửa danh mục
        }
    }

    // Phương thức xem chi tiết danh mục
    public function detail() {
        $id = $_GET['id']; // Lấy id danh mục từ URL
        $categories = $this->modelObject->allCateAdminSmall(['id' => $id]); // Lấy danh mục con của danh mục chính
        require_once "./src/views/Admin/category/category-detail.php"; // Hiển thị chi tiết danh mục
    }

    // Phương thức tạo danh mục con
    public function createSmall() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST['id_danh_muc'] = $_GET['id']; // Lấy id danh mục cha từ URL
            $id = $_GET['id'];
            $name = $_GET['name'];
            $this->modelObject->createCateSmall($_POST); // Gọi phương thức tạo danh mục con trong model
            header("location: ".BASE_URL."/admin/category-detail?id=" . $id."&name=".$name); // Chuyển hướng đến chi tiết danh mục cha
        } else {
            require_once "./src/views/Admin/category/category-smallcreate.php"; // Hiển thị form tạo danh mục con
        }
    }

    // Phương thức xóa danh mục con
    public function deleteSmall(){
        $id = $_GET['id'];
        $name = $_GET['name'];
        $id_DMSM = $_GET['id_DMSM'];
        if($_GET['soLuongSP'] == 0) {
            $this->modelObject->deleteCateSmall(['id' => $id_DMSM]);
            header('location: '.BASE_URL.'/admin/category-detail?id='.$id."&name=".$name);
        } else {
            echo "<script>
               alert('KHÔNG THỂ XOÁ DANH MỤC này vì đang có sản phẩm');
               window.location.href = '".BASE_URL."/admin/category-detail?id=".$id."&name=".$name."';
             </script>";

        }
      
    }

    // Phương thức sửa danh mục con
    public function editSmall() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id_DML = $_GET['id']; // Lấy id danh mục cha từ URL
            $name = $_GET['name']; 
            $id = $_GET['id_DMSM']; // Lấy id danh mục con từ URL
            $param = [
                "id" => $id,
                "ten_danh_muc" => $_POST['ten_danh_muc'] // Lấy tên danh mục từ form
            ];
            $category = $this->modelObject->updateSmall($param); // Gọi phương thức sửa danh mục con trong model
            header('location: '.BASE_URL.'/admin/category-detail?id='.$id_DML."&name=".$name); // Chuyển hướng đến chi tiết danh mục cha
        } else {
            $id = $_GET['id_DMSM']; 
            $categories = $this->modelObject->getNameDMSM(['id' => $id]); // Lấy thông tin danh mục con cần sửa
            require_once "./src/views/Admin/category/category-smalledit.php"; // Hiển thị form sửa danh mục con
        }
    }



    
}
?>
