<?php 
    namespace models\client;

    use commons\baseModel;

    class blog extends baseModel{

        
        public function allBaiviet($data){
            $sql = "SELECT *FROM  bai_viet";
            return parent::pdoQueryAll($sql , $data);
        }
        public function baiVietNew($data){
            $sql = "SELECT * FROM bai_viet
            ORDER BY ngay_dang DESC
            LIMIT 3";
            return parent::pdoQueryAll($sql , $data);
        }
        
    }

?>