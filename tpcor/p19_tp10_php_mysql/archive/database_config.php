<?php

echo "M1";

$user = 'root';
$password = 'root';
$db = 'LO07_2019';
$host = 'localhost';
$port = 8889;

$link = mysqli_init();
$database = mysqli_real_connect(
   $link,
   $host,
   $user,
   $password,
   $db,
   $port
);

var_dump ($database);

echo "M2";

?>


