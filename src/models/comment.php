<?php

namespace models;

use commons\baseModel;

class Comment extends baseModel
{
    public function getAllComment($param = [])
    {
        $sql = "SELECT  users.ten_user as ten_user,
                        san_pham.ten_san_pham as ten_san_pham, 
                        danh_gia.id as id, 
                        danh_gia.so_sao as so_sao, 
                        danh_gia.noi_dung as noi_dung, 
                        danh_gia.thoi_gian as thoi_gian
                        FROM danh_gia 
        JOIN users ON danh_gia.id_user = users.id
        JOIN san_pham ON danh_gia.id_san_pham = san_pham.id";
        return parent::pdoQueryAll($sql,$param);
    }

    public function deleteComment($param = []) {
        $sql = "DELETE FROM danh_gia WHERE id = :id ";
        parent::pdoQuery($sql,$param);
    }

    public function indexComment($param = []) {
        $sql = "SELECT  users.ten_user as ten_user,
                        users.hinh_anh as hinh_anh,
                        danh_gia.id as id_danh_gia,
                        danh_gia.so_sao as so_sao, 
                        danh_gia.noi_dung as noi_dung, 
                        danh_gia.thoi_gian as thoi_gian
                        FROM danh_gia 
        JOIN users ON danh_gia.id_user = users.id
        JOIN san_pham ON danh_gia.id_san_pham = san_pham.id
        WHERE san_pham.id = :id 
        ORDER BY danh_gia.thoi_gian DESC ";
        return parent::pdoQueryAll($sql, $param);
    }

    public function soLuongComment($param = []) {
        $sql = "SELECT COUNT(id) as so_luong FROM danh_gia WHERE id_san_pham = :id";
        return $this->pdoQueryAll($sql, $param);
    }

    public function createComment($param){
        $sql = "INSERT INTO danh_gia (id_user, id_san_pham, so_sao, noi_dung, thoi_gian) 
                VALUES (:id_user, :id_san_pham, '5', :noi_dung , current_timestamp())";
        parent::pdoQueryAll($sql, $param);
    }


}
