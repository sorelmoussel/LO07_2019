<?php

$dsn = 'mysql:dbname=LO07_2019;host=localhost;charset=utf8';
$username = 'root';
$password = 'root';
$options = array();
$database = null;

try {
    $database = new PDO($dsn, $username, $password, $options);
} 
catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
}
