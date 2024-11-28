<?php 
    namespace models;

    use commons\baseModel;

    class Product extends baseModel{

        
        public function index($data){
            $sql = "SELECT 
                    SP.id AS id_SP, 
                    SP.ma_san_pham,
                    SP.ten_san_pham,
                    SP.gia_san_pham, 
                    SP.khuyen_mai, 
                    SP.luot_xem,
                    SP.so_luong,
                    SP.ngay_them,
                    HA.hinh_anh_1, 
                    HA.hinh_anh_2, 
                    DMSM.id_danh_muc,
                    DMSM.ten_danh_muc AS ten_danh_muc_small,
                    (select dm.ten_danh_muc from danh_muc dm where dm.id = DMSM.id_danh_muc) as ten_danh_muc
                    
                FROM 
                    san_pham AS SP 
                JOIN 
                    hinh_anh AS HA ON SP.id = HA.id_san_pham 
                JOIN 
                    danh_muc_small AS DMSM ON SP.id_DM_small = DMSM.id";
            return parent::pdoQueryAll($sql , $data);
        }

        public function allProduct($data){
            $sql = "SELECT * FROM san_pham";
            return parent::pdoQueryAll($sql , $data);

        }

        public function productNew($data)
        {
            $sql = "SELECT 
                    sp.id,
                    sp.ten_san_pham,
                    sp.gia_san_pham,
                    ha.hinh_anh_1,
                    ha.hinh_anh_2

                    FROM san_pham AS sp
                    JOIN hinh_anh AS ha ON sp.id = ha.id_san_pham
                    ORDER BY ngay_them DESC LIMIT 8;";
            return parent::pdoQueryAll($sql, $data);
        }
            

        public function findPrice($data){
            $sql= "SELECT 
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
                    WHERE gia_san_pham BETWEEN 
                        ? - 1000000 + ((khuyen_mai)/100 * gia_san_pham) 
                        AND 
                        ? + 1000000 + ((khuyen_mai)/100 * gia_san_pham)
                    ";
            return parent::pdoQueryAll($sql, $data);
        }

        public function findProductCategorySM($data){
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
                    WHERE SP.id_DM_small = ?";
            return parent::pdoQueryAll($sql, $data);
        }


        public function finproductNewLimit($data){
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
                ORDER BY sp.ngay_them DESC  
                    
                LIMIT 4";
            return parent::pdoQueryAll($sql , $data);
        }

        public function createProduct($data){
            $colums = [];
            foreach ($data as $key => $value){
                $colums[] = ":$key";
            }
            $sql ="INSERT INTO san_pham(".implode(',',array_keys($data)).") VALUES (".implode(',',$colums).")";
            return parent::pdoUpdateParam($sql, $data);
        }

        public function delete($data){
            $sql = "DELETE FROM san_pham WHERE id = ?";
            parent::pdoQuery($sql , $data);
        }

        public function finProductId($data){
            $sql = "SELECT * FROM san_pham WHERE id = ?";
            return parent::pdoQuery($sql , $data);
            
        }

        public function update($data){
            $columns = [];
            foreach($data as $key => $value){
                if($key != "id"){
                    $columns[] = "$key = :$key";
                }
            }
            $sql = "UPDATE san_pham SET ".implode(',',$columns)." WHERE id = :id";
            
            parent::pdoQuery($sql,$data);

        }

    }

?>