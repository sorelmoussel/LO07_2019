<?php

class programme {

  private $sigle;
  private $listeModules;

  function setSigle($valeur) {
    $this->sigle = $valeur;
  }

  function getSigle() {
    return $this->sigle;
  }

  function __construct($sigle) {
    $this->sigle = $sigle;
    $this->listeModules = array();
  }

  function addModule($module) {
    $this->listeModules[$module->getSigle()] = $module;
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
