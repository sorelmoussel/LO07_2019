<?php

class Cursus2 {

    private $listeModules;

    const DATA = "SESSION_cursus";

    function __construct() {
        //echo ("Cursus2 constructeur");
        session_start();

        $base = $_SESSION[DATA];
        if ($base) {
           // echo("construct : recuperation de la base");
            //print_r($base);
            $this->listeModules = $base;
        } else {
            //echo ("data sont vides");
            $this->listeModules = array();
        }
        echo ($this);
    }

    function addModule($module) {
        // echo ("addmodule : $module");
        $this->listeModules[$module->getSigle()] = $module;

        // persistance 
        $_SESSION[DATA] = $this->listeModules;
        // echo("addModule : persistance ");
        print_r($listeModules);
    }

    function __toString() {
        $resultat = "";
        foreach ($this->listeModules as $key => $value) {
            $resultat .= "$key" . " : = : " . $value . "<br/>";
        }
        return $resultat;
    }

    function affiche() {
        echo ($this);
        echo("<pre>");
        print_r($_SESSION);
        echo("</pre>");
    }

}

?>
