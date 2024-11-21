<?php 
    namespace models\client;

    use commons\baseModel;

    class cart extends baseModel{

        
        public function findProductCartUsser($data){
            $sql = "SELECT
                        gh.id,
                        gh.id_user,
                        sp.id AS id_san_pham,
                        sp.ten_san_pham,
                        (sp.gia_san_pham - (sp.khuyen_mai / 100 * sp.gia_san_pham)) AS gia_san_pham,
                        ha.hinh_anh_1,
                        gh.so_luong,
                        ((sp.gia_san_pham - (sp.khuyen_mai / 100 * sp.gia_san_pham)) * gh.so_luong) AS tong_phu
                    FROM gio_hang AS gh
                    JOIN san_pham AS sp ON sp.id = gh.id_san_pham
                    JOIN hinh_anh AS ha ON sp.id = ha.id_san_pham
                    WHERE gh.id_user = ?";
            return parent::pdoQueryAll($sql , $data);
        }
        
    }

?>