<?php

include 'config.php';
require ($root . '/app/controller/Controller.php');

include ($root . '/app/view/fragment/fragmentHeader.html');

// récupération de l'action passée dans l'URL
$query_string = $_SERVER['QUERY_STRING'];

// fonction parse_str permet de construire une table de hachage (clé + valeur)
parse_str($query_string, $param);

// $action contient le nom de la méthode statique recherchée
$action = $param["action"];

switch ($action) {
    case "accueil" :
    case "readAll" :
    case "read" :
    case "idFormAction" :
    case "create" :
    case "created" :
        break;

    default:
        $action = "accueil";
}

echo ("Router:action = $action");

// appel de la méthode statique $action de ControllerVin2
Controller::$action();

include ($root . '/app/view/fragment/fragmentFooter.html');