<?php 
    namespace models;

    use commons\baseModel;

    class single extends baseModel{

        //hiển thị chi tiết bài viết theo id
        public function detailsBaiviet($data){
            $sql = "SELECT * FROM  bai_viet WHERE id = ?";
            return parent::pdoQuery($sql , $data);
        }
    }

?>