<?php
session_start();

// on v�rifie la pr�sence d'une variable de session
if (!isset ($_SESSION['login'])) {
  header ('Location: authentification_form.php');
  exit();
}
?>
