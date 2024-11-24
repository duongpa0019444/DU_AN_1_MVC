<?php 
    namespace models;

    use commons\baseModel;

    class Category extends baseModel{


        public function allCategory($data){
            $sql = "SELECT * FROM danh_muc";
            return parent::pdoQueryAll($sql , $data);
        }

        public function allCategorySmall($data){
            $sql = "SELECT * FROM danh_muc_small";
            return parent::pdoQueryAll($sql , $data);
        }

        
    }

?>