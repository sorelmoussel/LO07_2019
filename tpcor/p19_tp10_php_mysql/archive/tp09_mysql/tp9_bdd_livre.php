<?php

include("drop_livre.php");
include("create_livre.php");
include("../include/config.php");
include("../lib/bibli_bdd.php");

$bd=connect_bdd($serveur, $utilisateur, $mot_de_passe);

if ($bd){
    //Execution des requetes de gestion des tables
    // Suppression de la table
    if (execute_requete($bd,$drop_livre))
        echo "<p>LIVRE : TABLE SUPPRIMEE</p>";
    //Creation des table
    if (execute_requete($bd,$create_livre))
        echo "<p>LIVRE : TABLE CREEE</p>";
}

// Deconnexion
$bd=null;


?>
