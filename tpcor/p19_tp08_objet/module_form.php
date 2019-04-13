<!DOCTYPE html>
<?php
include ('../p19_tp06/tp06_biblio_formulaire_bt.php');
$titre = "tp08_module_form.php";
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrap.css" rel="stylesheet"/>
        <link href="tp08_css.css" rel="stylesheet" type="text/css"/>
        <title> <?php echo ($titre); ?></title>
    </head>
    <body>
        <div class="container">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo ($titre); ?></h3>
                </div>
            </div> 
            <?php         
            // form_begin("", "get", "../p19_tp07/analyse_superglobales.php");
            form_begin("", "get", "module_action.php");            
            form_input_text("Sigle", "sigle", 30, "LO07");
            form_input_text("Label", "label", 30, "Web");   
            $categorie = array ("CS", "TM", "EC", "ME", "CT");
            form_select("Catégorie", "categorie", "", 4, $categorie);  
            form_input_text("Effectif", "effectif", 10, "87");
            form_input_submit("Envoyer");            
            form_end();                    
            ?>
        </div>
    </body>
</html>
