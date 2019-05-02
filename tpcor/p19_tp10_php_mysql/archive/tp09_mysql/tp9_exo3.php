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

    <title>TP9 - exo3</title>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859">
  </head>
  <body>
        <?php
        include("tp9_addLivre.php");
        ?>
        <?php
        include("tp9_formLivre.php");
        echo $res_enr_livre;
        ?>
    </body>
</html>
