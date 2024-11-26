<?php 
    namespace models;

    use commons\baseModel;

    class donHang extends baseModel{

    
        public function insertDonHang($data){
            
            $sql = "INSERT INTO don_hang(id_user, tong_tien, trang_thai, thoi_gian, ghi_chu, id_thanh_toan)
                    VALUES (:id_user, :tong_tien, 1, now(), :ghi_chu, :id_thanh_toan )";
            return parent::pdoUpdateParam($sql , $data);
          

        }
        
        public function allDonHang($data){
            $sql = "SELECT * FROM don_hang  WHERE id_user = ?";
            return parent::pdoQueryAll($sql, $data);
        }

      
        //câu lệnh insert chi tiết đơn hàng
        public function insertDetailOrder($data){
           
            $sql = "INSERT INTO `chi_tiet_dh` (`id_don_hang`, `id_san_pham`, `sl_san_pham`)
                    VALUES (:id_don_hang, :id_san_pham, :sl_san_pham)";
            parent::pdoQuery($sql, $data);
             
        }
    }

?>