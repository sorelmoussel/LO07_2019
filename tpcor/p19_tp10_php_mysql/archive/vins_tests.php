<?php

include ('database_config.php');

// $database est disponible maintenant

function vin_add ($id, $cru, $annee, $degre) {
    global $database;
    $requete = "insert into vin values ($id, '$cru', $annee, $degre)";
    echo ("vin_add : $requete");
    $resultat = mysqli_query($database, $requete);
    echo("Error description: " . mysqli_error($con));
    return $resultat;   
}


// ==================================================
// liste des appels 


$r = vin_add(1000, "forêt d ôthe", 2019, 12.5);
if ($r) {
    echo "insertion effectuée";
}
else {
    echo "problème d'insertion";
}








mysqli_close($database);