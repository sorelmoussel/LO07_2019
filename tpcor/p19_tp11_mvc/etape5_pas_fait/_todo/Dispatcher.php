<?php

class Dispatcher {

    private static $request; // hashtable

    public function __construct($query_string) {
        // récupération de l'action passée dans l'URL
        echo ("<li>Routeur:contruct:url = $query_string</li>");
        $explode_url = explode('/', $query_string);
        $explode_url = array_slice($explode_url, 2); // on supprime le debut

        $request['controller'] = $explode_url[0];
        $request['action'] = $explode_url[1];
        $request['params'] = array_slice($explode_url, 2); // on supprime les 2 premiers
        echo ("<pre>");
        print_r($request);
        $this->request = $request;
    }

    public static function getRequest() {
                if (!isset(self::$request)) {
            try {
                self::$request = new PDO($dsn, $username, $password, $options);
            } catch (PDOException $e) {
                printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            }
        }
        return self::$_instance;
        return $this->request;
    }

}



/*

include_once ("config.php");

echo ("<li>page router.php</li>");

require_once ($root . '/app/controller/Controller.php');
include_once ($root . '/app/view/fragment/fragmentHeader.php');

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



// appel de la méthode statique $action de ControllerVin2
Controller::$action();

include ($root . '/app/view/fragment/fragmentFooter.html');



