<?php
$titre = "tp07_cookie_pose";
$datelimite = time() + 60 * 60;
setcookie("utt", "Troyes", $datelimite);
setcookie("utseus", "Shanghai", $datelimite);
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $titre; ?></title>
    </head>
    <body>

        <div class="container">

            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Cookies ?</h3>
                </div>
            </div> 
            <div class="panel-body">
                <ul>
                    <li>Je pose le cookie utt</li>
                    <li>Je pose le cookie utseus</li> 
                </ul>
                <a href="analyse_superglobales.php">Analyse surperGlobales</a>
            </div>


            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title">Sessions ?</h3>
                </div>
            </div> 
            <div class="panel-body">
                <ul>
                    <li>Je pose une variable de session programme ISI</li>
                    <li>Je pose une variable de session liste des programmes de l'utt</li> 
                </ul>

                <?php
                $_SESSION["isi"] = "informatique et système d'information";
                $liste = array("ISI", "RT", "GI", "GM", "MTE");
                $_SESSION["liste"] = $liste;
                ?>

                <a href="analyse_superglobales.php">Analyse surperGlobales</a>
            </div>            





    </body>
</html>


