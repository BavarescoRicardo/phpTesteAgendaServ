<?php

class Database {

    private $host   = "localhost";
    private $user   = "root";
    private $pwd    = "";
    private $dbName = "teste";

    protected function connect() {
        $dsn = 'mysql:dbname='.$this->dbName.';host='.$this->host;
        $pdo = new PDO($dsn, $this->user, $this->pwd,array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
  )); 
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}
 