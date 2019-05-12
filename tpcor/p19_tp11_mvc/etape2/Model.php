<?php

class Model extends PDO {
    private $database;

    // Constructeur : héritage public obligatoire par héritage de PDO
    public function __construct() {
        $dsn = 'mysql:dbname=LO07_2019;host=localhost;charset=utf8';
        $username = 'root';
        $password = 'root';
        $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        echo ("Model:constructeur");
        try {
            $this->database = new PDO($dsn, $username, $password, $options);
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
        }
    }
}
