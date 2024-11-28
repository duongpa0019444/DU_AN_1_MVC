<?php

namespace models;

use commons\baseModel;

class image extends baseModel{
    public function create($data){
        $colums = [];
        foreach ($data as $key => $value){
            $colums[] = ":$key";
        }
        $sql ="INSERT INTO hinh_anh(".implode(',',array_keys($data)).") VALUES (".implode(',',$colums).")";
        return parent::pdoQuery($sql, $data);
    }
}
