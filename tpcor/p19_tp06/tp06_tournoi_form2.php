<!DOCTYPE html>
<?php
include ('tp06_biblio_formulaire_bt.php');
$titre = "tp06_tournoi_form2.php";
$nombre_joueurs = $_GET['nbejoueur'];
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
            form_begin("lo07", "get", "tp06_tournoi_action.php");

            for ($indice = 1; $indice <= $nombre_joueurs; $indice++) {

                echo ("<div class='panel panel-success'>");
                echo (" <div class='panel-heading'>");
                echo ("   <h3 class='panel-title'>");
                echo ("Joueur " . $indice);
                echo ("   </h3>");
                echo (" </div>");
                $name = "nom_" . $indice;
                form_input_text("nom", $name, 20, "");
                $name = "prenom_" . $indice;
                form_input_text("prenom", $name, 20, "");
                $name = "email_" . $indice;
                form_input_text("email", $name, 20, "");
                echo ("</div>");
            }
            form_input_reset("effacer");
            form_input_submit("envoyer");
            form_end();
            ?>
        </div>
    </body>
</html>