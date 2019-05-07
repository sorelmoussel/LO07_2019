<?php

namespace cours\namespaces\vin\classes;

class Vin {
    private $id, $cru, $annee, $degre;
   
   function __construct($id, $cru, $annee, $degre) {
        $this->id = $id;
        $this->cru = $cru;
        $this->annee = $annee;
        $this->degre = $degre;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setCru($cru) {
        $this->cru = $cru;
    }

    function setAnnee($annee) {
        $this->annee = $annee;
    }

    function setDegre($degre) {
        $this->degre = $degre;
    }

    function getId() {
        return $this->id;
    }

    function getCru() {
        return $this->cru;
    }

    function getAnnee() {
        return $this->annee;
    }

    function getDegre() {
        return $this->degre;
    }

    public function __toString() {
        return $this->id;
    }
    
    public function affifche() {
        echo (__toString());
    }
}
