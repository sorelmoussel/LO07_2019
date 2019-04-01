<?php

// ================================================================
// -----> LO07-2019 : PHP Object
// ================================================================

require_once 'WBcharte.php';
require_once 'WBinterface.php';


class Module implements WBinterface {

    private $sigle;
    private $label;
    private $categorie;
    private $effectif;

    function setSigle($valeur) {
        $this->sigle = $valeur;
    }

    function getSigle() {
        return $this->sigle;
    }

    function setLabel($valeur) {
        $this->label = $valeur;
    }

    function getLabel() {
        return $this->label;
    }

    function setCategorie($valeur) {
        $this->categorie = $valeur;
    }

    function getCategorie() {
        return $this->categorie;
    }

    function setEffectif($valeur) {
        $this->effectif = $valeur;
    }

    function getEffectif() {
        return $this->effectif;
    }

    /*
      function __construct() {
      $sigle = "?";
      $label = "?";
      $categorie = "?";
      $effectif = "?";
      }
     */

    function __construct($sigle, $label, $cat, $effectif) {
        echo "<!-- classe module : construct($sigle,$label,$cat,$effectif) -->\n";
        $this->setSigle($sigle);
        $this->setLabel($label);
        $this->setCategorie($cat);
        $this->setEffectif($effectif);
    }

    function __destruct() {
        echo "<!-- classe module : destruct($this->sigle,$this->label,$this->categorie,$this->effectif) -->\n";
    }

    function __tostring() {
// tableau ....
        $resultat = "<table border='1' cellspacing='5' cellpadding='5'>\n";
        $resultat .= "<th>" . $this->getSigle() . "</th>\n";
        $resultat .= "<td>" . $this->getLabel() . "</td>\n";
        $resultat .= "<td>" . $this->getCategorie() . "</td>\n";
        $resultat .= "<td>" . $this->getEffectif() . "</td>\n";
        return $resultat;
    }

// ================================================================
// -----> Les méthodes de l'interface WBInterface
// ================================================================

    function valide() {
        // vrai ssi il existe des étudiants !
        return $this->effectif >= 0;
    }

    public function pageKO() {
        echo WBcharte::html_head_bootstrap("Les WebBean Modules");
        echo ("<h2>Votre formulaire n'est pas correct</h2>");
        foreach ($this->listeErreurs as $key => $value) {
            echo ("$key => $value <br />\n");
        }
    }
        
    public function pageFoot() {
       echo WBcharte::html_foot_bootstrap();
    }
    

    public function pageOK() {
        echo WBcharte::html_head_bootstrap("Les WebBean Modules");
        echo ("<h2>Votre formulaire est correct</h2>");
        foreach ($_GET as $key => $value) {
            echo ("$key => $value <br />\n");
        }
    }

    public function sauveTXT() {
        $resultat = $this->getSigle() . ";";
        $resultat .= $this->getCategorie() . ";";
        $resultat .= $this->getLabel() . ";";
        $resultat .= $this->getEffectif() . ";";
        return $resultat;
    }

    public function sauveXML($file) {
        return "xml";
    }

    public function sauveBDR($table) {
        $resultat = "insert into " . $table . " values (";
        $resultat .= "'" . $this->getSigle() . "',";
        $resultat .= "'" . $this->getCategorie() . "',";
        $resultat .= "'" . $this->getLabel() . "',";
        $resultat .= "" . $this->getEffectif() . ")";
        return $resultat;
    }

}
