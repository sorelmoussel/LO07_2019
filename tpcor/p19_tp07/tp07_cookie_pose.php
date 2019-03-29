<?php
$titre = "Pose de cookies";
$datelimite = time() + 60 * 60;
setcookie("organisation", "utt", $datelimite);
setcookie("module", "lo07", $datelimite);
setcookie("datelimite", $datelimite, $datelimite);
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
            <li>organisation : utt</li>
            <li>module : lo07</li> 
            <li><?php echo $datelimite; ?></li>
        </ul>
    </body>
</html>


