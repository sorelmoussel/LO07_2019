<?php

$bd=connect_bdd($serveur, $utilisateur, $mot_de_passe);

if ($bd){
    //affichage des données de la table avion
    $select_1 ="
    select
        annee,label,passager
    from
        AVION
    order by annee asc,label asc";
    for($i=1;$i<2;$i++)
        $res = execute_select($bd,${'select_'.$i},false);
}

// Deconnexion
$bd=null;


?>
