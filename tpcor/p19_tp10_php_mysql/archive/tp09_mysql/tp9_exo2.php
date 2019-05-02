<?php
include("../lib/biblio_form_dyn.php");
include("../lib/biblio_exploitation.php");
include("../include/config.php");
include("../lib/bibli_bdd.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <link rel="stylesheet" href="../feuille_css/css_formulaire.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="../feuille_css/css_tableau.css" type="text/css" media="screen" />

    <title>TP9 - exo2</title>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859">
  </head>
  <body>
        <?php
        include("tp9_addAvion_airbus.php");
        ?>
        <?php
        include("tp9_formAvion_airbus.php");
        echo $res_enr_avion;
        ?>
        <p>Liste des avions repertories ...</p>
        <?php
        include("tp9_getAvion_airbus.php");
        ?>
    </body>
</html>
