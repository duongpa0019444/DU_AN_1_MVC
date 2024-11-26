<?php 
    namespace commons;

use Exception;
use PDO;

    class baseModel {
        public $conn;
        public $db_host = DB_HOST;
        public $db_name = DB_NAME;

        public function __construct()
        {
            try {
                $this->conn = new PDO("mysql:host=$this->db_host;dbname=$this->db_name;charset=utf8", DB_USER, DB_PASS);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
                $this->conn->exec("SET NAMES utf8");
            } catch (Exception $e) {
                echo "Connect fail: " .$e->getMessage();
            }
        }

        public function pdoQueryAll($sql, $param) {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($param);
            return $stmt->fetchAll();
        }

        public function pdoQuery($sql, $param) {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($param);
            return $stmt->fetch();
        }

        public function pdoUpdate($sql) {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
        }

        public function pdoUpdateParam($sql, $param) {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($param);
            return $this->conn->lastInsertId();
        }
    }
?>