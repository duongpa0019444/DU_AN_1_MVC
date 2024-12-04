<?php 
    namespace models;

    use commons\baseModel;

    class checkOut extends baseModel{

        //kiểm tra thông tin giỏ hàng của người dùng
        public function check($data){
            $sql = "SELECT
                        gh.id,
                        gh.id_user,
                        sp.id AS id_san_pham,
                        sp.ten_san_pham,
                        (sp.gia_san_pham - (sp.khuyen_mai / 100 * sp.gia_san_pham)) AS gia_san_pham,
                        gh.so_luong,
                        ((sp.gia_san_pham - (sp.khuyen_mai / 100 * sp.gia_san_pham)) * gh.so_luong) AS tong_phu
                    FROM gio_hang AS gh
                    JOIN san_pham AS sp ON sp.id = gh.id_san_pham
                    WHERE gh.id_user = ?";
            return parent::pdoQueryAll($sql , $data);
        }


        //Thêm thông tin địa chỉ vào cơ sở dữ liệu
        public function insertDiachi($data){
            $column = [];
            foreach($data as $key => $value){
                $column[] = ":$key";
            }
            $sql = "INSERT INTO dia_chi(".implode(',', array_keys($data)).") VALUES (".implode(',', $column).")";
            return parent::pdoUpdateParam($sql , $data);
        }
        
    }

?>