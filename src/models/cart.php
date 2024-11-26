<?php 
    namespace models;

    use commons\baseModel;
use PDO;

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


        public function create($data){
            $sql = "INSERT INTO gio_hang(id, id_user, id_san_pham ,so_luong) 
                    VALUES ('',? ,? ,?)";
            
            return parent::pdoQueryAll($sql,$data );
        }
        
        public function deleteCartUser($data){
            $sql = "DELETE FROM gio_hang WHERE id_user = ?";
            parent::pdoQueryAll($sql,$data);
        }

        public function findCartUserId($data){
            $sql = "SELECT * FROM gio_hang WHERE id_user = ? AND id_san_pham = ?";
            return parent::pdoQuery($sql , $data);
        }

        public function updateSL($data){
            $sql = "UPDATE gio_hang SET so_luong = so_luong + 1 
                    WHERE id_user = ? AND id_san_pham = ?";
            parent::pdoQuery($sql , $data);
            
        }   

        public function tongProductCart($data){
            $sql = "SELECT COUNT(so_luong) AS tong_product FROM gio_hang WHERE id_user = ?";
            return parent::pdoQuery($sql , $data);

        }

        public function deleteProductCart($data){
            $sql = "DELETE FROM gio_hang WHERE id_san_pham = ? AND id_user = ?";
            return parent::pdoQuery($sql , $data);
            
        }
    }

?>