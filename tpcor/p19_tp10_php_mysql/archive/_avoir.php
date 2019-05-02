<?php

echo ("A");
$database = DatabaseSingleton::getInstance();
echo ("B");
try {
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = "select * from vin";
    $statement = $database->prepare($query);
    $statement->execute();
    $liste_vins = $statement->fetchAll(PDO::FETCH_CLASS, "Vin");

    var_dump($liste_vins);

    foreach ($liste_vins as $v) {
        printf("<tr><td>%d</td><td>%s</td><td>%d</td><td>%.00f</td></tr>", $v->getId(), $v->getCru(), $v->getAnnee(), $v->getDegre());
    }
} catch (PDOException $e) {
    printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
}

echo ("</tbody></table>");
?>
