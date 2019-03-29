<!DOCTYPE html>
<?php
$titre = "tp07_transmission_page2";
?>

<html>
    <head>
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
            $action = "analyse_superglobales.php?";
            foreach ($_GET as $key => $value) {
                $action .= "$key=$value&";
            }
            echo ("<a href='" . $action . "'>$action</a>");
            ?>

        </div>
    </body>
</html>


*