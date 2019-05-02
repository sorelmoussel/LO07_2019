-- =====================================================================
-- ===== mardi 3 mai 2016
-- ===== Correction TP09 sur la base des avions
-- =====================================================================


-- =====================================================================
-- ===== Exo1 : creation de tables
-- =====================================================================

-- 1) 

$create_avion="
CREATE TABLE IF NOT EXISTS AVION (
      id int(11) NOT NULL,
      label varchar(45) NOT NULL,
      annee int(4) NOT NULL,
      passager int(10) NOT NULL,
      PRIMARY KEY  (id)
) ENGINE=InnoDB";

-- 2) utilisation de phpMyAdmin pour créer la table
--fait;

-- 3) : insertion via l outil wev
insert into AVION (id,label,annee,passager) VALUES (0,"A350",2013,350);

-- 4) fichier pour les insertions

insert into AVION (id,label,annee,passager) VALUES (1,"A300",1973,280);
insert into AVION (id,label,annee,passager) VALUES (2,"A310",1976,200);
insert into AVION (id,label,annee,passager) VALUES (3,"A320",1986,160);
insert into AVION (id,label,annee,passager) VALUES (4,"A330",1993,340);
insert into AVION (id,label,annee,passager) VALUES (5,"A340",1993,380);
insert into AVION (id,label,annee,passager) VALUES (6,"A380",2006,555);


-- 5) Drop 
DROP TABLE AVION;

-- =====================================================================
-- ===== Exo2 : quelques requetes
-- =====================================================================

-- Rédigez un script PHP (database.php) contenant les constantes de connexion à votre base sur dev-isi.utt.fr.

-- Rédigez un script PHP (tp09_exo2_airbus_getAvions.php) capable de présenter la liste des avions dans une table HTML.

<?php

$bd=connect_bdd($serveur, $utilisateur, $mot_de_passe);

if ($bd){
    //affichage des données de la table avion
    $select_1 ="select annee,label,passager from AVION order by annee asc,label asc";
    for($i=1;$i<2;$i++)
        $res = execute_select($bd,${'select_'.$i},false);
}

// Deconnexion
$bd=null

-- Rédigez un script PHP (tp09_exo2_airbus_add_form_action.php) disposant d'un formulaire et capable d'ajouter un avion dans la table.

form_begin("F_AIRBUS","F_AIRBUS");
echo "
<fieldset>
<legend> Enregistrer un nouvel avion... </legend>";
form_input_text("Label :","AVION_LABEL","AVION_LABEL",'40');
form_input_text("Annee :","AVION_ANNEE","AVION_ANNEE",'40');
form_input_text("Nb. passager(s) :","AVION_NB_PASSAGER","AVION_NB_PASSAGER",'40');
echo"
</fieldset>
";
form_submit("AVION_SUBMIT","AVION_SUBMIT","Envoyer");
form_reset("AVION_RESET","AVION_RESET","Annuler");
form_end();

-- =====================================================================
-- ===== Exo3 : livres d'or en PDO
-- =====================================================================


-- 1) create libre

    $create_livre="
    CREATE TABLE IF NOT EXISTS LIVRE (
      id int(11) NOT NULL,
      pseudo varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
      message longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
      date_reception TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
      PRIMARY KEY  (id)
    ) ENGINE=InnoDB";


-- 2) formulaire


form_begin("F_LIVRE","F_LIVRE");
echo "
<fieldset>
<legend> Enregistrer un nouvel message ... </legend>";
form_input_text("Pseudo :","LIVRE_PSEUDO","LIVRE_PSEUDO",'40');
form_textarea("Message :","LIVRE_MSG","LIVRE_MSG");
echo"
</fieldset>
";
form_submit("LIVRE_SUBMIT","LIVRE_SUBMIT","Envoyer");
form_reset("LIVRE_RESET","LIVRE_RESET","Annuler");
form_end();

-- 3) ajout d'une entrée dans le libre


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


-- 4) view sur le livre d'or

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







