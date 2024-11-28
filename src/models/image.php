<?php

namespace models;

use commons\baseModel;

class image extends baseModel{

    public function select($data){
        $sql = "SELECT * FROM hinh_anh WHERE id_san_pham = ?";
        return parent::pdoQuery($sql, $data);
        
    }
    public function create($data){
        $colums = [];
        foreach ($data as $key => $value){
            $colums[] = ":$key";
        }
        $sql ="INSERT INTO hinh_anh(".implode(',',array_keys($data)).") VALUES (".implode(',',$colums).")";
        return parent::pdoQuery($sql, $data);
    }

    public function delete($data){
        $sql = "DELETE FROM hinh_anh WHERE id_san_pham = ?";
        return parent::pdoQuery($sql, $data);

    }


}
