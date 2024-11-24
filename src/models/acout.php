<?php 
    namespace models;

use commons\baseModel;

    class acout extends baseModel{

        //lấy user theo id
        public function findUserId($data){
            $sql = "SELECT * FROM `users` WHERE id = ?";
            return parent::pdoQuery($sql, $data);

        }

        //Đăng nhập
        public function logIn($data){
            $sql = "SELECT * FROM users WHERE so_dien_thoai = :so_dien_thoai AND mat_khau = :mat_khau";
            
            return parent::pdoQuery($sql, $data);
        }


        //Đăng ký
        public function signIn($data){

            //$sql = "INSERT INTO users (id, ten_user, mat_khau, email, so_dien_thoai, vai_tro, thoi_gian_tao) VALUES ('', 'Tùng Dươngggdg', '1234567899', 'duongdtpa0309134@gmail.com', '031234456789', 'client', CURRENT_TIMESTAMP)";
        
            $colums = [];
            foreach($data as $key => $value){
                $colums[] = ":$key";
            }
          
            $sql = "INSERT INTO users (id, " . implode(',', array_keys($data)) . ", vai_tro, thoi_gian_tao) VALUES
                    ('', " .implode(',', $colums). ", 'client', CURRENT_TIMESTAMP)";

            parent::pdoQueryAll($sql,$data);
        }


        //lọc tài khoản đã có email, phone
        public function findAcout($data){
            $sql = "SELECT COUNT(1) AS sl FROM users WHERE so_dien_thoai = ? OR email = ?";
            return parent::pdoQuery($sql, $data);
        }

        //lấy tài khoản với id
        public function finUserId($data){
            $sql = "SELECT * FROM users WHERE id = ?";
            
            return parent::pdoQuery($sql, $data);
        }

        //cập nhật tài khoản
        public function updateUser($data){
            $columns = [];
            foreach($data as $key => $value){
                if($key != "id"){
                    $columns[] = "$key = :$key";
                }
            }
            $sql = "UPDATE users SET ".implode(',',$columns)." WHERE id = :id";
            return parent::pdoQuery($sql,$data);

        }
    }

?>