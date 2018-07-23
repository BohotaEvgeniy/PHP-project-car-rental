<?php

class connectDB
{
    private $link;

    public function __construct() {
        $this->connectDB();
    }

    private function connectDB() {

        if (isset($this->link)) {
            return $this->link;
        } else {
            $config = require_once 'config/DBconfig.php';
            $dsn = "mysql:host=" . DB_HOST  . ";dbname=" . DB_NAME;

            try {
                $this->link = new PDO($dsn,DB_LOGIN ,DB_PASS );
                $this->link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            } catch (PDOException $e) {
                echo 'Подключение не удалось: ' . $e->getMessage();
            }
        }

    }

    public function execute($sql) {
        $stmt = $this->link->prepare($sql);

        return $stmt->execute();
    }

    public function query($sql) {
        $stmt = $this->link->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($result === false) {
            return array();
        }
        return $result;
    }
    public function closeDB(){
        $this->link = null;
    }
//    /**************************************
//     * Работа с БД
//     **************************************/
//    private $mysqli;
//    private $res;
//    public function __construct()
//    {
//        $this->connect();
//    }
//    public function connect()
//    {
//        if (isset($this->mysqli))
//        {
//            var_dump($this->mysqli);
//            return $this->mysqli;
//        }
//        else
//        {
//            $config = require_once 'config/DBconfig.php';
//            $this->mysqli = new mysqli(DB_HOST,DB_LOGIN,DB_PASS,DB_NAME);
//        }
//    }
//    public function query($query)
//    {
//        if (empty($query))
//        {
//            return false;
//        }
//        else
//        {
//            return $this->res = $this->mysqli->query($query);
//        }
//    }
//    public function results()
//    {
//        $this->mysqli->error;
//        while ($res = $this->res->fetch_assoc()) {
//            $results[] = $res;
//        }
//        return $results;
//    }
//    public function result() {
//        return $this->res->fetch_assoc();
//    }
//    public function resId()
//    {
//        return $this->mysqli->insert_id;
//    }

}
