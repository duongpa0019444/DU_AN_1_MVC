<?php 
    namespace controllers\admin;
    use models\Comment;

    class commentController{
        public $modelObject;

        public function __construct()
        {
            $this->modelObject = new Comment();
        }

        public function index() {
            $comments = $this->modelObject->getAllComment();
            require_once "./src/views/Admin/comment/comment-list.php";
        }

        public function delete() {
            $id = $_GET['id'];
            $this->modelObject->deleteComment(['id'=>$id]);
            header('location: '.BASE_URL.'/admin/comment-list');
        }
        
    }
?>