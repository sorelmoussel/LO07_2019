<?php

$retour = F_RECUP_REQUEST('AVION_LABEL','LABEL');
$tab_erreur[]=$retour[0];
$AVION_LABEL=$retour[1];
$retour = F_RECUP_REQUEST('AVION_ANNEE','ANNEE');
$tab_erreur[]=$retour[0];
$AVION_ANNEE=$retour[1];
$retour = F_RECUP_REQUEST('AVION_NB_PASSAGER','Nb. passager(s)');
$tab_erreur[]=$retour[0];
$AVION_NB_PASSAGER=$retour[1];

$res_enr_avion="";
if (!in_array(true,$tab_erreur)){
    $bd=connect_bdd($serveur, $utilisateur, $mot_de_passe);
    if ($bd){
        $AVION_ID=table_max_id($bd,'AVION','ID');
        if (!($AVION_ID)){
            $res_enr_avion.="<p>Avion non insere...</p>";
        }else{
            $req_insert="insert into AVION (id,label,annee,passager) VALUES (".$AVION_ID.",'".$AVION_LABEL."',".$AVION_ANNEE.",".$AVION_NB_PASSAGER.")";
            if (!(execute_requete($bd,$req_insert))){
               $res_enr_avion.="<p>".$req_insert." : non executee</p>";
            }else
                $res_enr_avion.="<p>Avion insere...</p>";
        }
    }
}
$res_enr_avion.="";

?>