<!DOCTYPE html>
<?php
$titre = "tp05_analyse_formulaire2.php";
?>


<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo ($titre) ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrap.css" rel="stylesheet"/>
        <link href="tp05_css.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>

        <div class="container">
            <?php
            function cartouche($name) {
                $panel = "<div class='panel panel-danger'>";
                $panel .= "  <div class='panel-heading'>";
                $panel .= "    <h3 class='panel-title'>SuperGlobale " . $name . "</h3>";
                $panel .= "  </div>";
                $panel .= "  <div class='panel-body'>Liste des paramètres reçus</div>";
                $panel .= "</div>";
                return $panel;
            }
            
            $superglobales = array("GET" => $_GET, "POST" => $_POST);
            
            foreach ($superglobales as $label => $globale) {
                if ($globale) {

                    echo (cartouche($label));

                    echo ("<table class = 'table table-striped table-bordered'>");
                    echo ("<thead>");
                    echo ("<tr><th scope = 'col'>name</th><th scope = 'col'>valeur(s)</th></tr>");
                    echo ("</thead>");

                    echo ("<tbody>");
                    foreach ($globale as $cle => $valeur) {
                        echo ("<tr><td>$cle</td><td>$valeur</td</tr>");
                    }
                    echo ("</tbody>");
                    echo ("</table>");
                }
            }
            ?>

        </div>

    </body>
</html>
