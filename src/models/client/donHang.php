<?php 
    namespace models\client;

    use commons\baseModel;

    class donHang extends baseModel{

    
        public function insertDonHang($data){
            
            $sql = "INSERT INTO don_hang(id, id_user, tong_tien, trang_thai, thoi_gian, ghi_chu, id_thanh_toan)
                    VALUES ('', :id_user, :tong_tien, 1, now(), :ghi_chu, :id_thanh_toan )";
            parent::pdoQuery($sql , $data);
        }
        
    }

?>