<?php

include_once ("config.php");
echo ("<li>page router.php</li>");
require_once ($root . '/app/controller/Controller.php');
include ($root . '/app/view/fragment/fragmentHeader.php');

// récupération de l'action passée dans l'URL
$query_string = $_SERVER['QUERY_STRING'];
echo ("query_string = $query_string  ");

// fonction parse_str permet de construire une table de hachage (clé + valeur)
parse_str($query_string, $param);

// $action contient le nom de la méthode statique recherchée
$action = $param["action"];

switch ($action) {
    case "accueil" :
    case "vinReadAll" :
    case "vinRead" :
    case "vinIdFormAction" :
    case "vinCreate" :
    case "vinCreated" :
    //case "producteurReadAll" :
        break;

    default:
        $action = "accueil";
}

echo ("<br/><p/></br/>");
echo ("RouterSorel :action = $action");
echo ("<ul>");

// appel de la méthode statique $action de ControllerVin2
Controller::$action();

include ($root . '/app/view/fragment/fragmentFooter.html');

