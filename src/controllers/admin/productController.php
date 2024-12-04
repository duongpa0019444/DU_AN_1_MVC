<?php 
    namespace controllers\admin;

    use commons\baseModel;  // Lớp baseModel dùng làm cơ sở cho các controller khác
    use models\Category;    // Lớp Category dùng để xử lý các dữ liệu liên quan đến danh mục sản phẩm
    use models\image;       // Lớp image dùng để xử lý các hình ảnh của sản phẩm
    use models\Product;     // Lớp Product dùng để xử lý các sản phẩm

    class productController extends baseModel{
        public $base_url = BASE_URL; // Định nghĩa biến base_url để lưu trữ URL gốc của trang web

        // Phương thức index - Hiển thị danh sách sản phẩm
        public function index(){
            // Lấy danh sách tất cả sản phẩm từ lớp Product
            $products = (new Product())->index([]); 
            // Bao gồm file view để hiển thị danh sách sản phẩm
            require_once "./src/views/Admin/product/product-list.php";
        }

        // Phương thức create - Tạo mới sản phẩm
        public function create(){
            // Lấy danh sách tất cả danh mục lớn và nhỏ từ cơ sở dữ liệu
            $allCategoryHeaders = (new Category())->allCategory([]);
            $allCategorySmallHeaders = (new Category())->allCategorySmall([]);

            // Kiểm tra nếu phương thức là POST, tức là người dùng đang gửi dữ liệu từ form tạo mới
            if($_SERVER['REQUEST_METHOD']=="POST"){
                
                // Khởi tạo mảng $san_pham để lưu trữ dữ liệu của sản phẩm từ POST
                $san_pham = [];
                // Lọc bỏ trường "search_iterms" (không cần thiết trong việc thêm sản phẩm)
                foreach($_POST as $key => $value){
                    if($key != "search_iterms"){
                        $san_pham[$key] = $value;
                    }
                }

                // Thêm sản phẩm vào cơ sở dữ liệu và lấy id của sản phẩm vừa tạo
                $id_san_pham = (new Product())->createProduct($_POST); 

                // Kiểm tra nếu có hình ảnh được tải lên
                if(isset($_FILES['hinh_anh']) && $_FILES['hinh_anh']["size"]>0){

                    // Lấy thông tin các tệp tin ảnh từ $_FILES
                    $arrayNames = $_FILES['hinh_anh']['name'];
                    $arrayTmpNames = $_FILES['hinh_anh']['tmp_name'];
                    // Thêm id sản phẩm vào mảng dữ liệu hình ảnh
                    $hinh_anh['id_san_pham'] = $id_san_pham;

                    // Xử lý việc lưu trữ hình ảnh
                    if(count($arrayNames)<=4){ // Giới hạn số lượng ảnh tối đa là 4

                        // Lặp qua từng ảnh và di chuyển vào thư mục lưu trữ
                        for ($i = 0; $i < count($arrayNames); $i++) {

                            // Tạo tên file duy nhất cho mỗi ảnh
                            $uniqueName = uniqid() . "_" . basename($arrayNames[$i]);
                            $dir = "assets/Client/images/products/" . $uniqueName; // Định nghĩa đường dẫn lưu ảnh

                            $tmp_name = $arrayTmpNames[$i]; // Lấy tên tạm thời của ảnh

                            // Di chuyển ảnh từ vị trí tạm thời vào thư mục lưu trữ
                            move_uploaded_file($tmp_name, $dir);
                            $index = $i+1;
                            // Thêm đường dẫn hình ảnh vào mảng
                            $hinh_anh["hinh_anh_$index"] = $dir;
                        }

                        // Thêm thông tin hình ảnh vào cơ sở dữ liệu
                        (new image())->create($hinh_anh);
                    }
                }
                
                // Sau khi thêm sản phẩm và hình ảnh thành công, chuyển hướng về trang danh sách sản phẩm
                header("location:$this->base_url/admin/product-list");
            }

            // Bao gồm file view để hiển thị form tạo mới sản phẩm
            require_once "./src/views/Admin/product/product-add.php";
        }

        // Phương thức edit - Sửa thông tin sản phẩm
        public function edit()
        {
            // Lấy id sản phẩm từ URL
            $id = $_GET['id']; 
            // Lấy danh sách các danh mục từ cơ sở dữ liệu
            $allCategoryHeaders = (new Category())->allCategory([]);
            $allCategorySmallHeaders = (new Category())->allCategorySmall([]);
            // Lấy thông tin chi tiết của sản phẩm từ database
            $product = (new Product())->finProductId([$id]);

            // Kiểm tra nếu phương thức là POST, tức là người dùng đang gửi dữ liệu cập nhật
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                // Gắn id sản phẩm vào mảng POST
                $_POST['id'] = $id; 

                // Kiểm tra nếu có hình ảnh mới được tải lên
                if (isset($_FILES['hinh_anh']) && $_FILES['hinh_anh']["size"] > 0) {

                    // Lấy thông tin các tệp tin ảnh
                    $arrayNames = $_FILES['hinh_anh']['name'];
                    $arrayTmpNames = $_FILES['hinh_anh']['tmp_name'];
                    // Thêm id sản phẩm vào mảng hình ảnh
                    $hinh_anh['id_san_pham'] = $id;

                    // Xử lý lưu trữ hình ảnh mới
                    if (count($arrayNames) <= 4) {

                        for ($i = 0; $i < count($arrayNames); $i++) {

                            // Tạo tên file duy nhất cho mỗi ảnh
                            $uniqueName = uniqid() . "_" . basename($arrayNames[$i]);
                            $dir = "assets/Client/images/products/" . $uniqueName;

                            $tmp_name = $arrayTmpNames[$i];

                            // Di chuyển ảnh từ tạm thời vào thư mục lưu trữ
                            move_uploaded_file($tmp_name, $dir);
                            $index = $i + 1;
                            // Thêm đường dẫn hình ảnh vào mảng
                            $hinh_anh["hinh_anh_$index"] = $dir;
                        }
                        // Cập nhật hình ảnh trong cơ sở dữ liệu
                        (new Product())->updateImage($hinh_anh); 
                    }
                }

                // Cập nhật thông tin sản phẩm
                (new Product())->update($_POST); 

                // Sau khi cập nhật thành công, chuyển hướng về trang danh sách sản phẩm
                header("location:$this->base_url/admin/product-list");
            }
            // Bao gồm file view để hiển thị form chỉnh sửa sản phẩm
            require_once "./src/views/Admin/product/product-edit.php";
        }

        // Phương thức delete - Xóa sản phẩm
        public function delete(){
            // Lấy id sản phẩm từ URL
            $id = $_GET['id']; 

            // Lấy tất cả đường dẫn các file ảnh liên quan đến sản phẩm cần xóa từ cơ sở dữ liệu
            $files = (new image())->select([$id]);

            // Duyệt qua từng file và xóa nếu nó là file thực tế
            foreach ($files as $file) {
                if (is_file($file)) { // Chỉ xóa nếu là file thực
                    unlink($file); // Xóa file
                }
            }

            // Xóa ảnh trong cơ sở dữ liệu
            (new image())->delete([$id]);

            // Xóa sản phẩm trong cơ sở dữ liệu
            (new Product())->delete([$id]);

            // Sau khi xóa thành công, chuyển hướng về trang danh sách sản phẩm
            header("location:$this->base_url/admin/product-list");
        }
    }
?>
