<!DOCTYPE html>
<?php
include ('tp06_biblio_formulaire_bt.php');
$titre = "tp06_tournoi_form1.php";
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
            form_begin("lo07", "get", "tp06_tournoi_form2.php");
            form_select("nombre de joueurs", "nbejoueur", "", 1, range(2, 5));
            form_input_reset("effacer");
            form_input_submit("envoyer");
            form_end();
            ?>
        </div>

    </body>
</html>