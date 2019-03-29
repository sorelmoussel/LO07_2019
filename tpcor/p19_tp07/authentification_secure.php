<?php
session_start();

// on vérifie la présence d'une variable de session
if (!isset ($_SESSION['login'])) {
  header ('Location: authentification_form.php');
  exit();
}
?>
