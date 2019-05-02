<?php

/*
  Marc Lemercier
  29 avril 2019
 */

require_once 'Vin.php';


// ------------------------------------------------------------------
echo ("<h2>définition des parametres de la connexion</h2>");
// ------------------------------------------------------------------

$dsn = 'mysql:dbname=LO07_2019;host=localhost;charset=utf8';
$username = 'root';
$password = 'root';

$options = array();
$database = new PDO($dsn, $username, $password, $options);

// ------------------------------------------------------------------
echo ("<h2>Exécuter une requete</h2>");
// ------------------------------------------------------------------

$query = "select * from vin";
$statement = $database->query($query);
echo ("<ul>");
echo("<li>A</li>");
//while ($tuple = $statement->fetch()) {
//    printf("<li>vin(%d, %s, %d, %.2f)</li>\n", $tuple['id'], $tuple['cru'], $tuple['annee'], $tuple['degre']);  
//}
echo ("</ul>");


// ------------------------------------------------------------------
echo ("<h2>Ecrire des données dans la table</h2>");
// ------------------------------------------------------------------

$query = "insert into vin values (1001, 'Champagne de Troyes', 2019, 11.45)";
// $nombreTuple = $database->exec($query);
printf("Nombre de tuples ajoutés = %d<p/>\n", $nombreTuple);


// ------------------------------------------------------------------
echo ("<h2>Requete parametrée</h2>");
// ------------------------------------------------------------------

echo ("<h3>Parametre par position ?</h3>");
$query = "select * from vin where annee = ?";
$statement = $database->prepare($query);

$statement->execute([1980]);
echo ("<ul>");
while ($tuple = $statement->fetch()) {
    printf("<li>vin(%d, %s, %d, %.2f)</li>\n", $tuple['id'], $tuple['cru'], $tuple['annee'], $tuple['degre']);
}
echo ("</ul>");

// -------------------
echo ("<h3>Parametre nommés :</h3>");
$query = "select * from vin where annee = :an and degre = :dg";
$statement = $database->prepare($query);

$statement->execute([
  'an' => 1980,
  'dg' => 10.00
]);
echo ("<ul>");
while ($tuple = $statement->fetch()) {
    printf("<li>vin(%d, %s, %d, %.2f)</li>\n", $tuple['id'], $tuple['cru'], $tuple['annee'], $tuple['degre']);
}
echo ("</ul>");

// ------------------------------------------------------------------
echo ("<h2>Gestion des erreurs</h2>");
// ------------------------------------------------------------------

$database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
try {
    $query = "select * from vinSSS";
    $statement = $database->query($query);
    echo ("<ul>");
    while ($tuple = $statement->fetch()) {
        printf("<li>vin(%d, %s, %d, %.2f)</li>\n", $tuple['id'], $tuple['cru'], $tuple['annee'], $tuple['degre']);
    }
    echo ("</ul>");
} catch (PDOException $e) {
    printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
}


// ------------------------------------------------------------------
echo ("<h2>Gestion des transactions</h2>");
// ------------------------------------------------------------------

try {
    $database->beginTransaction();
    $query = "insert into vin values (2000, 'Champagne de Troyes', 2019, 11.45)";
    $nombreTuple = $database->exec($query);
    printf("Nombre de tuples ajoutés = %d<p/>\n", $nombreTuple);

    $nombreTuple = $database->exec($query);
    printf("Nombre de tuples ajoutés = %d<p/>\n", $nombreTuple);
    $database->commit();
} catch (PDOException $e) {
    echo ("Transaction avec erreur<p/>");
    printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
    $database->rollBack();
}

$query = "select * from vin";
$statement = $database->query($query);
echo ("<ul>");
while ($tuple = $statement->fetch()) {
    printf("<li>vin(%d, %s, %d, %.2f)</li>\n", $tuple['id'], $tuple['cru'], $tuple['annee'], $tuple['degre']);
}
echo ("</ul>");

// pas de tuple avec 2000 dans la table des vins .....

// ------------------------------------------------------------------
echo ("<h2>Exécuter une requete resultat est un objet Vin </h2>");
// ------------------------------------------------------------------

try {
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = "select * from vin where annee = 2019";
    $statement = $database->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_CLASS, "Vin");
    print ("<pre>");
    print_r($result);
    print ("</pre>");
} catch (PDOException $e) {
    printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
}


// ===========================================================================================

echo ("Fin \n");
