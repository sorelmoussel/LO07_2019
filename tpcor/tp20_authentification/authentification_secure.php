<?php

session_start();

// on verifie la presence d'une variable de session


if (!isset($_SESSION['expiration'])) {
    header('Location: authentification_form.html');
    exit();
}

if (isset($_SESSION['expiration'])) {
    $exp = $_SESSION["expiration"];
    if (time() < $exp) { 
        header('Location: authentification_form.html');
        exit();
    }
}
?>
