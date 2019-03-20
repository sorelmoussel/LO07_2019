<?php

// bibliotheque de fonctions
//echo ("je suis bibio soutenance");



function listeJourLabel() {
    $res = array("lundi", "mardi", "mercredi", "jeudi", "vendredi");
    return $res;
}



function listeJourIndice() {
    $res = range(1, 31);
    return $res;
}


function listeMois() {
    $res = array("janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "décembre");
    return $res;
}



function listeSeance() {
    $heure = array("08", "09", "10", "11", "14", "15", "16", "17");
    $minute = array("h00", "h20", "h40");
    $res = array();
    foreach ($heure as $h) {
        foreach ($minute as $m) {
            $res[] = $h . $m;
        }
    }
    return $res;
}
 
echo ("<!-- fin du fichier tp06_biblio_soutenance.php -->");
1;


?>