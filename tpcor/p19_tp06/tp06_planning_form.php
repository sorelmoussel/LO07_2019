<!DOCTYPE html>
<?php
include ('tp06_biblio_formulaire_bt.php');
include ('tp06_biblio_planning.php');
$titre = "tp06_planning_form.php";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrap.css" rel="stylesheet"/>
        <link href="tp06_css.css" rel="stylesheet" type="text/css"/>
        <title><?php echo $titre; ?></title>
    </head>
    <body>
        <div class="container">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo $titre; ?></h3>
                </div>
            </div> 
            <?php
            form_begin("lo07", "get", "tp06_planning_action.php");
            form_select("JourLabel", "jourlabel", "", 5, listeJourLabel());
            form_select("JourIndice", "jourIndice", "", 5, listeJourIndice());
            form_select("Mois", "mois", "", 3, listeMois());
            form_select("Séance", "seance", "multiple", 6, listeSeance());
            form_input_reset("effacer");
            form_input_submit("envoyer");
            form_end();
            ?>
        </div>

    </body>
</html>

