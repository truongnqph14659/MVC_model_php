<?php

namespace App\BaseModel;

use PDO;

class baseModel
{
    var $table = "";
    function __construct()
    {
        $this->conn = new PDO("mysql:root=127.0.0.1;dbname=web16304_php1;charset=utf8", "root", "");
    }
    static function all()
    {
        $model = new static;
        $sql = "select * from " . $model->table;
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    static function destroy($id)
    {
        $cate_model =  new static;
        $sql = "DELETE from " . $cate_model->table . " where id ='$id'";
        $stmt = $cate_model->conn->prepare($sql);
        $stmt->execute();
    }
    static function where($a, $b, $c)
    {
        $model =  new static;
        $model->query_Builder = "SELECT * FROM  $model->table WHERE $a $b '$c'";
        return $model;
    }
    function get()
    {
        $stmt = $this->conn->prepare($this->query_Builder);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
