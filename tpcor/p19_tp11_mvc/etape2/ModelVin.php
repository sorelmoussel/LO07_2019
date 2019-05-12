<?php

class ModelVin extends Model {
    private $id, $cru, $annee, $degre;
    
    // pas possible d'avoir 2 constructeurs
    public function __construct($id = NULL, $cru = NULL, $annee = NULL, $degre = NULL) {
        // valeurs nulles si pas de passage de parametres
        if (!is_null($id)) {
            $this->id = $id;
            $this->cru = $cru;
            $this->annee = $annee;
            $this->degre = $degre;
        }
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

    // liste de méthodes pour générer du HTML .....

    public function viewVin() {
        printf("<tr><td>%d</td><td>%s</td><td>%d</td><td>%.00f</td></tr>", $this->getId(), $this->getCru(), $this->getAnnee(), $this->getDegre());
    }

    
    // retourne une liste d'objets Vin
    public static function readAll() {
        try {
            $query = "select * from vin";
            $statement = $this->database->prepare($query);
            $statement->execute();
            $liste_vins = $statement->fetchAll(PDO::FETCH_CLASS, "Vin");
            return $liste_vins;

        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }
}
