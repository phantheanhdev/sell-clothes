<?php

namespace App\Models;

use PDO;
use PDOException;

// session_start();
class BaseModel
{
    protected $conn;
    protected $sqlBuilder;
    public function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=localhost; dbname=sell_clothes; charset=utf8", "root", "");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            throw $e->getMessage();
        }
    }

    // function all(): lay ra toan bo du lieu cua bang
    public static function all()
    {
        // static: truy xuất đến đối tượng hiện tại
        // self: truy xuất đến class khai báo nó

        $model = new static;
        $model->sqlBuilder = "SELECT * FROM $model->tableName ";
        $stmt = $model->conn->prepare($model->sqlBuilder);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }
    // get data theo table sắp xếp theo thứ tự giảm dần
    public static function all_desc($id_name)
    {
        $model = new static;
        $model->sqlBuilder = "SELECT * FROM $model->tableName ORDER BY $id_name DESC";
        $stmt = $model->conn->prepare($model->sqlBuilder);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }


    //function insert: them du lieu 
    //params: $data la 1 mang du lieu co cau truc nhu sau
    //$data = [name=>'ngocbq', age=>40, address=>'ha noi', ...]
    public function insert($data = [])
    {
        $this->sqlBuilder = "INSERT INTO $this->tableName(";
        $colName = '';
        $params = '';
        foreach ($data as $key => $value) {
            $colName .= "`$key`, ";
            $params .= ":$key, ";
        }
        //xóa dấu ', ' ở bên phải chuối
        $colName = rtrim($colName, ', ');
        $params = rtrim($params, ', ');

        //nối vào chuỗi sql
        $this->sqlBuilder .= $colName . ") VALUES (" . $params . ")";

        $stmt = $this->conn->prepare($this->sqlBuilder);
        $stmt->execute($data);
    }

    // lay 1 dong
    public function one_line()
    {
        $model = new static;
        $model->sqlBuilder = "SELECT * FROM $model->tableName LIMIT 1";
        $stmt = $model->conn->prepare($model->sqlBuilder);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }

    // lấy dữ liệu theo điều kiện
    public static function get_data_by_condition(string $data)
    {
        $model = new static;
        $model->sqlBuilder = "SELECT * FROM $model->tableName WHERE $data";
        $stmt = $model->conn->prepare($model->sqlBuilder);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }

    // new product 8
    public static function new_produt_8()
    {
        $model = new static;
        $model->sqlBuilder = "SELECT * FROM $model->tableName ORDER BY pro_id DESC LIMIT 8";
        $stmt = $model->conn->prepare($model->sqlBuilder);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }
    //  8 sản phẩm được quan tâm nhiều nhất
    public static function products_of_interest_8()
    {
        $model = new static;
        $model->sqlBuilder = "SELECT * FROM $model->tableName ORDER BY pro_view DESC LIMIT 8";
        $stmt = $model->conn->prepare($model->sqlBuilder);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }

    public static function findOne($id_name, $id)
    {
        $model = new static;
        $model->sqlBuilder = "SELECT * FROM $model->tableName where $id_name='$id'";
        $stmt = $model->conn->prepare($model->sqlBuilder);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
        if ($result) {
            return $result[0];
        }
        return false;
    }

    //cập nhật dữ liệu
    public function update($id_name, $id, $data = [])
    {
        // colName::colName
        // where colName=:colName

        $this->sqlBuilder = "UPDATE $this->tableName SET ";
        foreach ($data as $colName => $value) {
            $this->sqlBuilder .= "`$colName`=:$colName, ";
        }
        $this->sqlBuilder = rtrim($this->sqlBuilder, ", ");
        $this->sqlBuilder .= " WHERE $id_name=:id";

        $data['id'] = $id;
        $stmt = $this->conn->prepare($this->sqlBuilder);
        $stmt->execute($data);
    }

    // xóa dữ liệu
    public function delete($id_name, $id)
    {
        $this->sqlBuilder = "DELETE FROM $this->tableName where $id_name = $id";
        $stmt = $this->conn->prepare($this->sqlBuilder);
        $stmt->execute();
    }

    public function where($colName, $condition, $value)
    {
        $model = new static;
        $model->sqlBuilder = "SELECT * FROM $this->tableName WHERE `$colName` $condition '$value' ";
        $stmt = $model->conn->prepare($model->sqlBuilder);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }

    public function andWhere($colName, $condition, $value)
    {
        $this->sqlBuilder .= " AND `$colName` $condition '$value' ";
        return $this;
    }

    public function orWhere($colName, $condition, $value)
    {
        $this->sqlBuilder .= " OR `$colName` $condition '$value' ";
        return $this;
    }

    public function get()
    {
        $stmt = $this->conn->prepare($this->sqlBuilder);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }
}
