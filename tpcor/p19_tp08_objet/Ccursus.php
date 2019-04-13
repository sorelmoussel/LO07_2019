<?php

class Cursus {
    private $listeModules;

    function __construct() {
        $this->listeModules = array();
    }

    function addModule($module) {
        echo ("addmodule : $module");
        if (isset($module)) {
            $this->listeModules[$module->getSigle()] = $module;
        }
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
    }
    
}

?>
