<?php

function verification1 ($login, $password) {
  $resultat = TRUE;
  if ($login != 'boss') $resultat = FALSE;
  if ($password != '2313') $resultat = FALSE;
  return $resultat;
}

// initialisation de la session
session_start();

// des infos sont reçus
if (isset($_POST['login']) && isset ($_POST['password'])) {
  // récupération des données
  $login = $_POST['login'];
  $password = $_POST['password'];

  // test de la validiter des infos
  if (verification1 ($login, $password)) {
    // ok pour l'utilisateur courant
    // changement de l'identifiant de session
    session_regenerate_id();
    $_SESSION['login'] = $login;
    $message = "Vous êtes identifié";
  }
  else {
    // pas ok pour cet user
    $message = "Erreur de login : <a href='authentification_form.php'>Retour</a>";
  }
}
else {
  // l'un des champ n'est pas rempli ...
  $message = "Login ou password non défini : <a href='authentification_form.php'>Retour</a>";
}
?>
<html>
  <head>
    <title>Authentification - validation</title>
  </head>
  <body>
    <p>
      <?php echo ($message); ?>
    </p>
  </body>
</html>

