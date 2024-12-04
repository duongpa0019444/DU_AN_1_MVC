<?php

namespace models;

use commons\baseModel;

class image extends baseModel{

    // Lấy tất cả hình ảnh của sản phẩm theo id_san_pham
    public function select($data){
        $sql = "SELECT * FROM hinh_anh WHERE id_san_pham = ?";
        return parent::pdoQuery($sql, $data);
    }

    // Tạo mới hình ảnh cho sản phẩm
    public function create($data){
        // Tạo mảng cột từ các khóa của mảng dữ liệu
        $colums = [];
        foreach ($data as $key => $value){
            $colums[] = ":$key"; // Chuyển đổi thành cú pháp chuẩn cho SQL
        }

        // Chèn dữ liệu vào bảng hinh_anh
        $sql ="INSERT INTO hinh_anh(".implode(',',array_keys($data)).") VALUES (".implode(',',$colums).")";
        return parent::pdoQuery($sql, $data);
    }

    // Xóa hình ảnh của sản phẩm theo id_san_pham
    public function delete($data){
        $sql = "DELETE FROM hinh_anh WHERE id_san_pham = ?";
        return parent::pdoQuery($sql, $data);
    }

}
