<?php
$titre = "Pose de variables de sessions";
$datelimite = time() + 60 * 60;

session_start();

$_SESSION["ville"] = "Troyes2";
$liste = array ("lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi", "dimanche");
$_SESSION["semaine"] = $liste;


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $titre; ?></title>
    </head>
    <body>
        <h3><?php echo $titre; ?></h3>

        <ul>
            <li>ville : <?php echo $_SESSION["ville"]; ?></li>
            <li>Semaine : 
                <?php
                $listeJour =  $_SESSION["semaine"];
                echo (implode ("-+-", $listeJour));
                ?>
            </li> 

        </ul>
    </body>
</html>


