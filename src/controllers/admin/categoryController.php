<?php 
    namespace controllers\admin;

    use models\Category;

    class categoryController{
        public $modelObject;
        
        public function __construct()
        {
            $this->modelObject = new Category();
        }

        public function index(){
            $categories = $this->modelObject->allCateAdmin();
            require_once "./src/views/Admin/category/category-list.php";
        }

        public function create(){
            if($_SERVER['REQUEST_METHOD'] == "POST") {
                $_POST['hinh_anh'] = "assets/Admin/images/categories/".$_FILES['hinh_anh']['name'];
                $tmp_name = $_FILES['hinh_anh']['tmp_name'];
                // debug($_FILES);
                $dir = "assets/Admin/images/categories/".$_FILES['hinh_anh']['name'];
                move_uploaded_file($tmp_name, $dir);
                $category = $this->modelObject->createCate($_POST);
                // debug($_POST);

               header('location: '.BASE_URL.'/admin/category-list');
            } else {
                require_once "./src/views/Admin/category/category-add.php";
            }
        }

        public function delete() {
            $this->modelObject->deleteCate($_GET);
            header('location: '.BASE_URL.'/admin/category-list');

        }

        public function edit(){
            if($_SERVER['REQUEST_METHOD'] == "POST") {
                if(isset($_FILES['hinh_anh']) && $_FILES['hinh_anh']['size'] > 0){
                    $_POST['hinh_anh'] = "assets/Admin/images/categories/".$_FILES['hinh_anh']['name'];
                } 
                    $tmp_name = $_FILES['hinh_anh']['tmp_name'];
                    $dir = "assets/Admin/images/categories/".$_FILES['hinh_anh']['name'];
                    move_uploaded_file($tmp_name, $dir);
                    $_POST['id'] = $_GET['id'];
                    $category = $this->modelObject->update($_POST); 
                    header('location: '.BASE_URL.'/admin/category-list');
                
            } else {
               $id = $_GET['id'];
               $categories = $this->modelObject->getNameCate($id);

                require_once "./src/views/Admin/category/category-edit.php";
            }
            
        }

        public function detail(){
            $id = $_GET['id'];
            $categories = $this->modelObject->allCateAdminSmall($id);
            // debug($categories);
            require_once "./src/views/Admin/category/category-detail.php";
        }

        public function createSmall(){
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
            // debug($_POST);
            $_POST['id_danh_muc'] = $_GET['id'];
            $id = $_GET['id'];
            $name = $_GET['name'];
            $category = $this->modelObject->createCateSmall($_POST);
            header("location: ".BASE_URL."/admin/category-detail?id=" . $id."&name=".$name);
            } else {
                require_once "./src/views/Admin/category/category-smallcreate.php";
            }

        }

        public function deleteSmall(){
            $id = $_GET['id'];
            $name = $_GET['name'];
            $categories =   $this->modelObject->deleteCateSmall([$_GET['id_DMSM']]);
            header('location: '.BASE_URL.'/admin/category-detail?id='.$id."&name=".$name);
        }

        public function editSmall(){
            if($_SERVER['REQUEST_METHOD'] == 'POST') {


                header('location: '.BASE_URL.'/admin/category-detail');
                } else {

                    require_once "./src/views/Admin/category/category-smalledit.php";
                }
        }


    }
?>