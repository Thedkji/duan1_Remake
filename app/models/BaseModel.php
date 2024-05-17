<?php

namespace App\models;
use Attribute;
use PDO;

class BaseModel
{
    function getPDO()
    {
        try {
            $connect = new PDO("mysql:host=" . DBHOST . ";dbname=" . DBNAME . ";charset=" . DBCHARSET . "", DBUSER, DBPASS);

            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connect;
        } catch (\Throwable $e) {
            echo "Connect Failed: " . $e->getMessage();
        }
    }

    function getAllData($sql)
    {
        try {
            $connect = $this->getPDO();
            $stmt = $connect->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (\PDOException $e) {
            echo "Lỗi truy vấn : " . $e->getMessage();
        }
    }

    function getOneData($sql)
    {
        try {
            $connect = $this->getPDO();
            $stmt = $connect->prepare($sql);
            $stmt->execute();
            return $stmt->fetch();
        } catch (\PDOException $e) {
            echo "Lỗi truy vấn : " . $e->getMessage();
        }
    }

}
