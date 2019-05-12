<?php

require_once 'DatabaseSingleton.php';

$database = DatabaseSingleton::getInstance();
$query = 'SELECT * from vin';
$statement = $database->query($query);

echo ("<ul>\n");
while ($tuple = $statement->fetch()) {
    printf("<li>vin(%d, %s, %d, %.2f)</li>\n", $tuple['id'], $tuple['cru'], $tuple['annee'], $tuple['degre']);
}
echo ("</ul>\n");

