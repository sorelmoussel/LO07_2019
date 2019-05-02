<?php

class DatabaseSingleton {

    private $dsn = 'mysql:dbname=LO07_2019;host=localhost;charset=utf8';
    private $username = 'root';
    private $password = 'root';
    public static $instance = null;

    public static function getInstance() {
        echo ("DatabaseSingleton : getInstance : debut : self::$instance");
        if (is_null(self::$instance)) {
            echo ("new DatabaseSingleton est null");
            $ds = new DatabaseSingleton();
        } else {
            echo ("new DatabaseSingleton n'est pas null");
        }
        echo (self::$instance);
        return self::$instance;
    }

    public function __construct() {
        try {
            $options = array();
            self::$instance = new PDO($this->dsn, $this->username, $this->password, $options);
            var_dump(self::$instance);
            print ("Construction d'une instance de DatabaseSingleton");
        } catch (PDOException $Exception) {
            // Note The Typecast To An Integer!
            throw new MyDatabaseException($Exception->getMessage(), (int) $Exception->getCode());
        }
    }
   
}