<!DOCTYPE html>
<?php
include ('../p19_tp06/tp06_biblio_formulaire_bt.php');
$titre = "tp07_transmission_page1";
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrap.css" rel="stylesheet"/>
        <link href="tp07_css.css" rel="stylesheet" type="text/css"/>
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
            form_begin("", "get", "tp07_transmission_page2.php");
            form_input_hidden("ville", "Troyes");
            form_input_hidden("effectif", "3000");
            form_input_submit("UTT");            
            form_end();  
            echo ("<br/><p/>");
            
            form_begin("", "get", "tp07_transmission_page2.php");
            form_input_hidden("ville", "Compiègne");
            form_input_hidden("effectif", "3200");
            form_input_submit("UTC");            
            form_end();  
            echo ("<br/><p/>");


            form_begin("", "get", "tp07_transmission_page2.php");
            form_input_hidden("ville", "Belfort");
            form_input_hidden("effectif", "3100");
            form_input_submit("UTBM");            
            form_end();  
            echo ("<br/><p/>");            
            
            ?>
        </div>

    </body>
</html>
