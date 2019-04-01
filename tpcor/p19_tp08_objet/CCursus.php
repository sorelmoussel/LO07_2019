<?php

class Cursus {

    private $sigle;
    private $listeModules;

    const DATA = 'tp08_cursus';

    function setSigle($valeur) {
        $this->sigle = $valeur;
    }

    function getSigle() {
        return $this->sigle;
    }

    function __construct($sigle) {
        $this->sigle = $sigle;
        $this->listeModules = array();

        // Existe il des modules dans la variable de session 'tp08_cursus' ?
        session_start();
        $base = $_SESSION [DATA];
        if ($base) {
            echo("construct : recuperation de la base");
            print_r($base);
            $this->listeModules = $base;
        }
    }

    function addModule($module) {
        $this->listeModules[$module->getSigle()] = $module;

        // persistance 
        $_SESSION[DATA] = $this->listeModules;
        echo("addModule : persistance ");
        print_r($base);
    }

    function __tostring() {
        $resultat = "";
        foreach ($this->listeModules as $key => $value) {
            $resultat .= "$key" . " : = : " . $value . "<br/>";
        }
        return $resultat;
    }

}

?>
