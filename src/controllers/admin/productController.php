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
            require_once "./src/views/Admin/product/product-edit.php";
        }
    }

?>