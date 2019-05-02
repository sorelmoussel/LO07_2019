<?php

include("drop_avion.php");
include("create_avion.php");
include("insert_avion.sql");
include("../include/config.php");
include("../lib/bibli_bdd.php");

$bd=connect_bdd($serveur, $utilisateur, $mot_de_passe);

if ($bd){
    //Execution des requetes de gestion des tables
    // Suppression de la table
    if (execute_requete($bd,$drop_avion))
        echo "<p>AVION : TABLE SUPPRIMEE</p>";
    //Creation des table
    if (execute_requete($bd,$create_avion))
        echo "<p>AVION : TABLE CREEE</p>";
    //Insertion des données
    $res=execute_insert($bd,"../TP09/insert_table.sql");
}

// Deconnexion
$bd=null;


?>
