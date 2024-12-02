<?php 
    namespace controllers\admin;

    use commons\baseModel;
use models\Category;
use models\image;
use models\Product;

    class productController extends baseModel{
        public $base_url = BASE_URL;

        public function index(){
            $products = (new Product())->index([]);
            require_once "./src/views/Admin/product/product-list.php";
        }

        public function create(){
            $allCategoryHeaders = (new Category())->allCategory([]);
            $allCategorySmallHeaders = (new Category())->allCategorySmall([]);

            if($_SERVER['REQUEST_METHOD']=="POST"){
                
                $san_pham = [];
                //insert vào bảng sản phẩm trước để lấy id sản phẩm rồi mới thêm vào bảng hình ảnh 
                foreach($_POST as $key => $value){
                    if($key != "search_iterms"){
                        $san_pham[$key] = $value;
                    }
                }

                $id_san_pham = (new Product())->createProduct($_POST); //thêm vào bảng sản phẩm trước

                //nếu có hình ảnh thì thêm vào bảng hình ảnh 
                if(isset($_FILES['hinh_anh']) && $_FILES['hinh_anh']["size"]>0){

                    $arrayNames = $_FILES['hinh_anh']['name'];
                    $arrayTmpNames = $_FILES['hinh_anh']['tmp_name'];
                    $hinh_anh['id_san_pham'] = $id_san_pham;

                    //xử lý logic để thêm từng sản phẩm vào file lưu trữ product

                    if(count($arrayNames)<=4){
                        
                        for ($i = 0; $i < count($arrayNames); $i++) {

                            $uniqueName = uniqid() . "_" . basename($arrayNames[$i]);
                            $dir = "assets/Client/images/products/" . $uniqueName;
    
                            $tmp_name = $arrayTmpNames[$i];
                    
                            move_uploaded_file($tmp_name, $dir);
                            $index = $i+1;
                            $hinh_anh["hinh_anh_$index"] = $dir;
                        }
    
                        //insert vào bảng hình ảnh
                        (new image())->create($hinh_anh);
                    }
                    


                }
                
                
                header("location:$this->base_url/admin/product-list");
                

            }
            require_once "./src/views/Admin/product/product-add.php";
        }

        public function edit(){
            $id = $_GET['id'];
            $allCategoryHeaders = (new Category())->allCategory([]);
            $allCategorySmallHeaders = (new Category())->allCategorySmall([]);
            $product = (new Product())->finProductId([$id]);


            if($_SERVER['REQUEST_METHOD'] == "POST"){
                $_POST['id'] = $id;
                //nếu có hình ảnh thì thêm vào bảng hình ảnh 
                if(isset($_FILES['hinh_anh']) && $_FILES['hinh_anh']["size"]>0){

                    $arrayNames = $_FILES['hinh_anh']['name'];
                    $arrayTmpNames = $_FILES['hinh_anh']['tmp_name'];
                    $hinh_anh['id_san_pham'] = $id;

                    //xử lý logic để thêm từng sản phẩm vào file lưu trữ product

                    if(count($arrayNames)<=4){

                        for ($i = 0; $i < count($arrayNames); $i++) {

                            $uniqueName = uniqid() . "_" . basename($arrayNames[$i]);
                            $dir = "assets/Client/images/products/" . $uniqueName;

                            $tmp_name = $arrayTmpNames[$i];
                        
                            move_uploaded_file($tmp_name, $dir);
                            $index = $i+1;
                            $hinh_anh["hinh_anh_$index"] = $dir;
                        }
                        //update vào bảng hình ảnh
                        (new Product())->updateImage($hinh_anh);
                    }



                }
                (new Product())->update($_POST);

            
                header("location:$this->base_url/admin/product-list");
                
            }
            require_once "./src/views/Admin/product/product-edit.php";
        }

        public function delete(){
            $id = $_GET['id'];

            //xử lý xóa ảnh trong thư mục 
            $files = (new image())->select([$id]);  // Lấy tất cả đường dẫn file trong thư mục trên database
            
            // Duyệt qua và xóa từng file
            foreach ($files as $file) {
                if (is_file($file)) { // Chỉ xóa nếu là file
                    unlink($file); // Xóa file
                }
            }
            (new image())->delete([$id]); //xóa ảnh trong database

            (new Product())->delete([$id]); // xóa sản phẩm
            header("location:$this->base_url/admin/product-list");
            
        }

    }

?>