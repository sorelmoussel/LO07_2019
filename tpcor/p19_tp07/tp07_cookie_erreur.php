<!DOCTYPE html>
<?php
$titre = "tp07_cookie_erreur";
$datelimite = time() + 60 * 60;
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo ($titre); ?></title>
    </head>
    <body>
        <?php
        setcookie("utt", "Troyes", $datelimite);
        ?>
    </body>
</html>
