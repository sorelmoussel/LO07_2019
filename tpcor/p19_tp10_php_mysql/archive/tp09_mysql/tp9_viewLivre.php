<?php

$bd=connect_bdd($serveur, $utilisateur, $mot_de_passe);

if ($bd){
    //affichage des données de la table avion
    $select_1 ="
    select
        date_reception,pseudo,message
    from
        LIVRE
    order by date_reception asc,pseudo asc";
    $tab_res = execute_select_ss_view($bd,$select_1);
    if(!($tab_res)){
        echo "<p>Impossible d'afficher le livre d'or...";
    }else{
        echo "<div id=\"livre_d_or\">";
        $i=0;
        foreach($tab_res as $un_res){
            $i++;
            echo "<div id=\"msg_".$i."\" class=\"msg\">";
            echo "<div class=\"msg_entete\">Re&ccedil;u le ".date('d/m/Y',strtotime($un_res['date_reception']))." &agrave; ".date('H:i:s',strtotime($un_res['date_reception']))." - edite par ".$un_res['pseudo']."</div>";
            echo "<div class=\"msg_contenu\">".$un_res['message']."</div>";
            echo "</div>";
        }
        echo "</div>";
    }


}

// Deconnexion
$bd=null;


?>
