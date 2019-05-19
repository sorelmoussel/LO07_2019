<?php

class DatabaseSingleton {

    const DSN = 'mysql:dbname=LO07_2019;host=localhost;charset=utf8';
    const USER = 'root';
    const PASSWORD = 'root';

    private $PDOInstance = null;
    private static $instance = null;

    private function __construct() {
        try {
            $this->PDOInstance = new PDO(self::DSN, self::USER, self::PASSWORD);
            $this->instance = new PDO(self::DSN, self::USER, self::PASSWORD);            
        } catch (PDOException $Exception) {
            throw new MyDatabaseException($Exception->getMessage(), (int) $Exception->getCode());
        }
    }

    public static function getInstance() {
        if (is_null(self::$instance)) {
            self::$instance = new DatabaseSingleton();
        }
        return self::$instance;
    }
    
    // ré-écriture des méthode de PDO avec possibilité d'ajouter des traces ....
    
    public function query($query) {
        return $this->PDOInstance->query($query);
    }
}
