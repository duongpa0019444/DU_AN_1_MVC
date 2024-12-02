<?php

namespace models;

use commons\baseModel;

class home extends baseModel
{
    public function getAllProduct()
    {
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
WHERE 
    SP.khuyen_mai > 0
    ";
        return parent::pdoQueryAll($sql, []);
    }

    public function getAllProducts()
    {
        $sql = "SELECT 
    SP.id AS id_SP, 
    SP.ten_san_pham, 
    SP.gia_san_pham, 
    SP.ngay_them, 
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
ORDER BY 
    SP.ngay_them DESC
LIMIT 10
    ";
        return parent::pdoQueryAll($sql, []);
    }

    public function getAllCate()
    {
        $sql = "SELECT 
        DM.id,
        DM.hinh_anh,
    DM.ten_danh_muc,
    COUNT(SP.id) AS total_san_pham
FROM 
    san_pham AS SP
JOIN 
    danh_muc_small AS DMS ON SP.id_DM_small = DMS.id
JOIN 
    danh_muc AS DM ON DMS.id_danh_muc = DM.id
GROUP BY 
    DM.id, DM.ten_danh_muc
ORDER BY 
    DM.ten_danh_muc;";
        return parent::pdoQueryAll($sql, []);
    }

    public function getAllBlog()
    {
        $sql = "SELECT * FROM bai_viet";
        return parent::pdoQueryAll($sql, []);
    }

    public function getAllProd()
    {
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
    WHERE 
        SP.khuyen_mai > 0
        ";
        return parent::pdoQueryAll($sql, []);
    }
}
