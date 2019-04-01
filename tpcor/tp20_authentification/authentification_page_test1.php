<?php
include ('authentification_secure.php');
$titre = "authentification_page_test1.php";

session_start();
$date_courante = time();
$date_session = $_SESSION["expiration"];
$reste = $date_session - $date_courante;
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
        Bonjour à tous .....
        <ul>
            <?php
            echo ("<li>date_courante = $date_courante</li>");
            echo ("<li>date_session = $date_session</li>");
            echo ("<li>Reste = $reste secondes</li>");            
            ?>

        </ul>
    </body>
</html>
