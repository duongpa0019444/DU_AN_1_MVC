<?php 
    namespace models;

    use commons\baseModel;

    class blog extends baseModel{

        //lấy tất cả bài viết
        public function allBaiviet($data){
            $sql = "SELECT *FROM  bai_viet";
            return parent::pdoQueryAll($sql , $data);
        }

        //Lấy 3 bài viết mới nhất theo ngày đăng
        public function baiVietNew($data){
            $sql = "SELECT * FROM bai_viet
            ORDER BY ngay_dang DESC
            LIMIT 3";
            return parent::pdoQueryAll($sql , $data);
        }
        
    }

?>