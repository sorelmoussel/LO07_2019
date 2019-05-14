<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


require_once 'ControllerVin2.php';

// récupération de l'action passée dans l'URL
$query_string = $_SERVER['QUERY_STRING'];

// fonction parse_str permet de construire une table de hachage (clé + valeur)
parse_str($query_string, $param);

// $action contient le nom de la méthode statique recherchée
$action = $param["action"];

// appel de la méthode statique $action de ControllerVin2
echo ("Router: action = $action");
ControllerVin2::$action();





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

// appel de la méthode statique $action de ControllerVin2
echo ("Router: action = $action");
ControllerVin2::$action();


