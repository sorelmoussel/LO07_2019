<?php

$retour = F_RECUP_REQUEST('LIVRE_PSEUDO','PSEUDO');
$tab_erreur[]=$retour[0];
$LIVRE_PSEUDO=$retour[1];
$retour = F_RECUP_REQUEST('LIVRE_MSG','MESSAGE');
$tab_erreur[]=$retour[0];
$LIVRE_MSG=$retour[1];

$res_enr_livre="";
if (!in_array(true,$tab_erreur)){
    $bd=connect_bdd($serveur, $utilisateur, $mot_de_passe);
    if ($bd){
        $LIVRE_ID=table_max_id($bd,'LIVRE','ID');
        if (!($LIVRE_ID)){
            $res_enr_livre.="<p>Message non insere...</p>";
        }else{
            $req_insert="insert into LIVRE (id,pseudo,message) VALUES (".$LIVRE_ID.",'".$LIVRE_PSEUDO."','".nl2br(addslashes($LIVRE_MSG))."')";
            if (!(execute_requete($bd,$req_insert))){
               $res_enr_livre.="<p>".$req_insert." : non executee</p>";
            }else
                $res_enr_livre.="<p>Message insere...</p>";
        }
    }
}
$res_enr_livre.="";

?>