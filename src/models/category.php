<?php

namespace models;

use commons\baseModel;

class Category extends baseModel
{


    public function allCategory($data)
    {
        $sql = "SELECT * FROM danh_muc";
        return parent::pdoQueryAll($sql, $data);
    }

    public function allCategorySmall($data)
    {
        $sql = "SELECT * FROM danh_muc_small";
        return parent::pdoQueryAll($sql, $data);
    }

    //Hàm hiển thi danh mục 
    public function allCateAdmin()
    {
        $sql = "SELECT 
    COUNT(danh_muc_small.id) as soLuongDMSM  , 
    danh_muc.ten_danh_muc,
    danh_muc.hinh_anh,
    danh_muc.id     
FROM 
    danh_muc
LEFT JOIN 
   	danh_muc_small
ON 
    danh_muc.id = danh_muc_small.id_danh_muc
GROUP BY 
    danh_muc.ten_danh_muc;";
        return parent::pdoQueryAll($sql, []);
    }

    //Hàm thêm danh mục
    public function createCate($param)
    {
        $sql = "INSERT INTO danh_muc (ten_danh_muc, hinh_anh) VALUES (:ten_danh_muc, :hinh_anh);";
        parent::pdoQuery($sql, $param);
    }

    //Hàm xoá danh mục
    public function deleteCate($param)
    {
        $sql = "DELETE FROM danh_muc WHERE id = :id";
        parent::pdoQuery($sql, $param);
    }

    //Hàm sửa danh mục
    public function update($param)
    {
        if (isset($_POST['hinh_anh'])) {
            $sql = "UPDATE danh_muc SET ten_danh_muc = :ten_danh_muc, hinh_anh = :hinh_anh WHERE id = :id";
            parent::pdoQuery($sql, $param);
        } else {
            $sql = "UPDATE danh_muc SET ten_danh_muc = :ten_danh_muc WHERE id = :id";
            parent::pdoQuery($sql, $param);
        }
    }

    public function getNameCate($id)
    {
        $sql = "SELECT ten_danh_muc FROM danh_muc WHERE id = ?";
        return parent::pdoQuery($sql, [$id]);
    }



    //Hàm hiển danh mục small
    public function allCateAdminSmall($id)
    {
        $sql = "SELECT 
                    danh_muc_small.ten_danh_muc AS tenDMSM, 
                    danh_muc_small.id as idDMSM,
                    danh_muc.ten_danh_muc AS tenDM,
                    COUNT(san_pham.id) AS soLuongSP
                FROM danh_muc
                JOIN danh_muc_small ON danh_muc.id = danh_muc_small.id_danh_muc
                LEFT JOIN san_pham ON danh_muc_small.id = san_pham.id_DM_small
                WHERE danh_muc.id = ?
                GROUP BY danh_muc_small.ten_danh_muc, danh_muc.ten_danh_muc
                ORDER BY danh_muc_small.ten_danh_muc ASC;
                ";
        return parent::pdoQueryAll($sql, [$id]);
    }

    //Hàm thêm danh mục small
    public function createCateSmall($param)
    {
        $sql = "INSERT INTO danh_muc_small (ten_danh_muc, id_danh_muc) VALUES (:ten_danh_muc, :id_danh_muc);";
        parent::pdoQuery($sql, $param);
    }

    //Hàm xoá danh mục small
    public function deleteCateSmall($param)
    {
        $sql = "DELETE FROM danh_muc_small WHERE id = ?";
        parent::pdoQuery($sql, $param);
    }
}
