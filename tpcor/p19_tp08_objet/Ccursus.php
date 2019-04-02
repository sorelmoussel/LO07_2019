<?php

class Cursus {
    private $listeModules;

    const DATA = 'tp08_cursus';

    function __construct() {
        session_start();
        $this->listeModules = array();

        // Existe il des modules dans la variable de session 'tp08_cursus' ?

        $base = $_SESSION[DATA];
        if ($base) {
            echo("construct : recuperation de la base");
            print_r($base);
            $this->listeModules = $base;
        }
        else {
            $module = new Module ("?", "??", "??", 0);
            addModule($module);
        }
        echo ($this);
    }

    function addModule($module) {
        echo ("addmodule : $module");
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
