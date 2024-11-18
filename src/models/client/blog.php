<?php 
    namespace models\client;

    use commons\baseModel;

    class blog extends baseModel{

        
        public function allBaiviet($data){
            $sql = "SELECT *FROM  bai_viet";
            return parent::pdoQueryAll($sql , $data);
        }
        
    }

?>