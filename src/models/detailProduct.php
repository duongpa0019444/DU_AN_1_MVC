<?php 
    namespace models;
    use commons\baseModel;

    class detailProduct extends baseModel {
        public function getProduct($param = []) {
            $sql = "SELECT 
            SP.id AS id_SP, 
            SP.ten_san_pham, 
            SP.ma_san_pham, 
            SP.gia_san_pham, 
            SP.khuyen_mai, 
            SP.mo_ta,
            HA.hinh_anh_1, 
            HA.hinh_anh_2, 
            HA.hinh_anh_3, 
            HA.hinh_anh_4, 
            DMSM.id_danh_muc,
            (select dm.ten_danh_muc from danh_muc dm where dm.id = DMSM.id_danh_muc) as ten_danh_muc
            
        FROM 
            san_pham AS SP 
        JOIN 
            hinh_anh AS HA ON SP.id = HA.id_san_pham 
        JOIN 
            danh_muc_small AS DMSM ON SP.id_DM_small = DMSM.id
        WHERE SP.id = :id ;
       ";
                return parent::pdoQuery ($sql, $param);
        }

        public function getAllProduct($param = []) {
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
                danh_muc_small AS DMSM ON SP.id_DM_small = DMSM.id
            WHERE DMSM.id_danh_muc = (SELECT id FROM danh_muc WHERE ten_danh_muc = :ten_danh_muc)
            AND SP.id != :id
           ";
            return parent::pdoQueryAll ($sql, $param);
        }
    }
?>