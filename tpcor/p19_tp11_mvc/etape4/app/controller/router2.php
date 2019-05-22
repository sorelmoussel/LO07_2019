<?php

include_once ("config.php");

if ($DEBUG) {
    echo ("<li>page router2.php</li>");
}

//require_once ($root . '/app/controller/Controller.php');

require_once ($root . '/app/controller/ControllerVin.php');
require_once ($root . '/app/controller/ControllerProducteur.php');

include_once ($root . '/app/view/fragment/fragmentHeader.php');

// récupération de l'action passée dans l'URL
$query_string = $_SERVER['QUERY_STRING'];
echo ("query_string = $query_string ");

// fonction parse_str permet de construire une table de hachage (clé + valeur)

parse_str($query_string, $request);

// Modification du routeur pour prendre en compte l'ensemble des parametres
// On recuperer les éléments du routage

$controller = $request['controller'];
$action = $request['action'];

unset($request['controller']);
unset($request['action']);
$params = $request;

if ($DEBUG) {
    echo ("<br/><p/></br/>Les élements du request</BR>");
    echo ("<ul>");
    echo ("<li>Router:controller = $controller</li>");
    echo ("<li>Router:action = $action</li>");
    echo ("<li>Router:params = </li>");
    print_r($params);
}

switch ($action) {
    case "accueil" :
    case "vinReadAll" :

    case "vinRead" :
    case "vinReadActionSelect" :
    case "vinReadActionDelete" :

    case "vinCreate" :
    case "vinCreated" :

    case "producteurReadAll" :
    case "producteurRead" :
    case "producteurIdFormAction" :
    case "producteurCreate" :
    case "producteurCreated" :
    case "producteurReadVins" :
        break;

    default:
        $action = "accueil";
}
if ($DEBUG) {
    echo ("<br/><p/></br/>");
    echo ("Router :action = $action");
    echo ("<ul>");
}

switch ($controller) {
    case "ControllerVin" :
        echo ("case controlleur : ControllerVin");
        ControllerVin::$action($params);
        break;

    case "ControllerProducteur" :
        echo ("case controlleur : ControllerProducteur");
        ControllerProducteur::$action($params);
        break;

    default:
        ControllerVin::accueil($params);
}

include ($root . '/app/view/fragment/fragmentFooter.html');



