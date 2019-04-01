<?php
// initialisation de la session
session_start();

function validation($login, $password) {
    $resultat = FALSE;
    if (($login == "pierre") and ( $password == "avion")) {
        $resultat = TRUE;
    }
    if (($login == "paul") and ( $password == "bateau")) {
        $resultat = TRUE;
    }
    if (($login == "jacques") and ( $password == "voiture")) {
        $resultat = TRUE;
    }
    return $resultat;
}

// des infos sont reçues
if (isset($_POST['login']) && isset($_POST['password'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    // test de la validiter des infos
    if (validation($login, $password)) {
        // ok pour l'utilisateur courant
        // changement de l'identifiant de session
        //session_regenerate_id();

        $_SESSION['login'] = $login;
        $expiration = time() + 30;
        $_SESSION['expiration'] = $expiration;
        $message = "Vous êtes identifié avec " . $_SESSION['login'] . " jusqu à " . $_SESSION['expiration'];
    } else {
        // pas ok pour cet user
        $message = "Erreur de login : <a href='authentification_form.html'>Retour</a>";
    }
} else {
    // l'un des champ n'est pas rempli ...
    $message = "Login ou password non défini : <a href='authentification_form.php'>Retour</a>";
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrap.css" rel="stylesheet"/>
        <link href="tp07_css.css" rel="stylesheet" type="text/css"/>
        <title>Authentification - validation</title>
    </head>
    <body>   
        <p>
            <?php echo ($message); ?>
        </p>
    </body>
</html>

