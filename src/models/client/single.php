<?php 
    namespace models\client;

    use commons\baseModel;

    class single extends baseModel{

        
        public function detailsBaiviet($data){
            $sql = "SELECT * FROM  bai_viet WHERE id = ?";
            return parent::pdoQuery($sql , $data);
        }
    }

?>