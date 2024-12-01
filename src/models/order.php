<?php 
    namespace models;

    use commons\baseModel;

    class donHang extends baseModel{

    
        public function insertDonHang($data){
            
            $sql = "INSERT INTO don_hang(id_user, tong_tien, trang_thai, thoi_gian, ghi_chu, id_thanh_toan, id_dia_chi)
                    VALUES (:id_user, :tong_tien, 1, now(), :ghi_chu, :id_thanh_toan ,:id_dia_chi)";
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

        public function countStatusOrder($data){
            $sql = "SELECT 
                            dh.trang_thai AS id_tt,
                            COUNT(*) AS total,
                            (SELECT trang_thai FROM trang_thai_dh WHERE id = dh.trang_thai) AS ten_trang_thai
                        FROM don_hang AS dh
                        GROUP BY dh.trang_thai;";
            return parent::pdoQueryAll($sql, $data);
        }

        public function ordersManage($data){
            $sql = "SELECT 
                        dh.id,
                        dh.thoi_gian,
                        dh.tong_tien,
                        dh.ghi_chu,
                        dh.trang_thai AS id_tt,
                        dh.id_thanh_toan AS id_pt,
                        (SELECT ten_user FROM users WHERE id = dh.id_user) AS ten_user,
                        (SELECT trang_thai FROM trang_thai_dh WHERE dh.trang_thai = id) AS trang_thai,
                        (SELECT phuong_thuc FROM pt_thanh_toan WHERE id = dh.id_thanh_toan) AS phuong_thuc,
                        (SELECT COUNT(*) FROM chi_tiet_dh WHERE id_don_hang = dh.id ) AS so_san_pham
                    FROM don_hang as dh";
            return parent::pdoQueryAll($sql, $data);

        }


        public function detailOrderProduct($data){
            $sql = "SELECT 
                        sp.ten_san_pham,
                        (sp.gia_san_pham-(sp.gia_san_pham*(sp.khuyen_mai/100))) AS gia_san_pham,
                        ctdh.sl_san_pham,
                        ((sp.gia_san_pham-(sp.gia_san_pham*(sp.khuyen_mai/100)))*ctdh.sl_san_pham) AS tong,
                        (SELECT hinh_anh_1 FROM hinh_anh WHERE sp.id = id_san_pham) AS hinh_anh,
                        (SELECT ten_danh_muc FROM danh_muc_small WHERE sp.id_DM_small = id) AS ten_DM_small
                    FROM san_pham AS sp 
                    JOIN chi_tiet_dh as ctdh ON sp.id = ctdh.id_san_pham
                    JOIN don_hang AS dh ON dh.id = ctdh.id_don_hang
                    WHERE  dh.id = ?";

            return parent::pdoQueryAll($sql, $data);
        }

        public function detailOrderAdress($data){
            $sql = "SELECT 
                        dh.id as id_dh,
                        dh.thoi_gian,
                        dh.ghi_chu,
                        dh.tong_tien,
                        dh.trang_thai,
                        dc.*
                    FROM don_hang as dh
                    JOIN dia_chi as dc ON dh.id_dia_chi = dc.id
                    WHERE dh.id = ?";
            return parent::pdoQuery($sql, $data);
        }

        public function trangThai($data){
            $sql = "SELECT * FROM trang_thai_dh";
            return parent::pdoQueryAll($sql, $data);
        }

        public function updateOrder($data){
            $sql = "UPDATE don_hang SET trang_thai = ? WHERE don_hang.id = ?";
            parent::pdoQuery($sql , $data);
        }

        public function deleteOrder($data){
            $sql = "DELETE FROM don_hang WHERE id = ?";
            parent::pdoQuery($sql , $data);

        }

        public function deleteOrderDetail($data){
            $sql = "DELETE FROM chi_tiet_dh WHERE id_don_hang = ?";
            parent::pdoQueryAll($sql,$data);
        }
    }

?>