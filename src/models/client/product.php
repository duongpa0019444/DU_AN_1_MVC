<?php 
    namespace models\client;

    use commons\baseModel;

    class Product extends baseModel{

        
        public function index($data){
            $sql = "SELECT 
                    SP.id AS id_SP, 
                    SP.ten_san_pham, 
                    SP.gia_san_pham, 
                    SP.khuyen_mai, 
                    HA.hinh_anh_1, 
                    HA.hinh_anh_2, 
                    DMSM.id_danh_muc,
                    (select dm.ten_danh_muc from danh_muc dm where dm.id = DMSM.id_danh_muc) as ten_danh_muc
                    
                FROM 
                    san_pham AS SP 
                JOIN 
                    hinh_anh AS HA ON SP.id = HA.id_san_pham 
                JOIN 
                    danh_muc_small AS DMSM ON SP.id_DM_small = DMSM.id";
            return parent::pdoQueryAll($sql , $data);
        }

        public function allCategory($data){
            $sql = "SELECT * FROM danh_muc";
            return parent::pdoQueryAll($sql , $data);
        }

        public function allCategorySmall($data){
            $sql = "SELECT * FROM danh_muc_small WHERE id_danh_muc = ?";
            return parent::pdoQueryAll($sql , $data);
        }
        
    }

?>