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
                $this->modelObject->createCate($_POST);
               header('location: '.BASE_URL.'/admin/category-list');
            } else {
                require_once "./src/views/Admin/category/category-add.php";
            }
        }

        public function delete() {
            $id = $_GET['id'];
            
            $this->modelObject->deleteCate(['id' => $id]);
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
                    $data = $_POST;
                    $data['id'] = $_GET['id'];
                    $this->modelObject->update($data); 
                    header('location: '.BASE_URL.'/admin/category-list');
                
            } else {
               $id = $_GET['id'];
               $categories = $this->modelObject->getNameCate(['id' => $id]);

                require_once "./src/views/Admin/category/category-edit.php";
            }
            
        }

        public function detail(){
            $id = $_GET['id'];
            $categories = $this->modelObject->allCateAdminSmall(['id' => $id]);
            // debug($categories);
            require_once "./src/views/Admin/category/category-detail.php";
        }

        public function createSmall(){
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
            // debug($_POST);
            $_POST['id_danh_muc'] = $_GET['id'];
            $id = $_GET['id'];
            $name = $_GET['name'];
            $this->modelObject->createCateSmall($_POST);
            header("location: ".BASE_URL."/admin/category-detail?id=" . $id."&name=".$name);
            } else {
                require_once "./src/views/Admin/category/category-smallcreate.php";
            }

        }

        public function deleteSmall(){
            $id = $_GET['id'];
            $name = $_GET['name'];
            $id_DMSM = $_GET['id_DMSM'];
            $this->modelObject->deleteCateSmall(['id' => $id_DMSM]);
            header('location: '.BASE_URL.'/admin/category-detail?id='.$id."&name=".$name);
        }

        public function editSmall(){
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $id_DML = $_GET['id'];
                    $name = $_GET['name']; 
                    $id = $_GET['id_DMSM']; 
                    $param = [
                        "id" => $id,
                        "ten_danh_muc" => $_POST['ten_danh_muc']
                    ];
                   
                    $category = $this->modelObject->updateSmall($param);
                   
                    header('location: '.BASE_URL.'/admin/category-detail?id='.$id_DML."&name=".$name);

                } else {
                    $id = $_GET['id_DMSM']; 
                    $categories = $this->modelObject->getNameDMSM(['id' => $id]);
                    require_once "./src/views/Admin/category/category-smalledit.php";
                }
        }


    }
?>