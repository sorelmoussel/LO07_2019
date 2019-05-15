<?php

require_once 'SModel.php';

class ModelVin {
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
        printf("<tr><td>%d</td><td>%s</td><td>%d</td><td>%.00f</td></tr>", 
        $this->getId(), $this->getCru(), $this->getAnnee(), $this->getDegre());
    }

    // retourne une liste d'objets Vin
    public static function readAll() {
        try {
            $database = SModel::getInstance();
            $query = "select * from vin";
            $statement = $database->prepare($query);
            $statement->execute();
            $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelVin");
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }

    // retourne une liste des id
    public static function readAllId() {
        try {
            $database = SModel::getInstance();
            $query = "select id from vin";       
            $statement = $database->prepare($query);
            $statement->execute();
            $results = array();
            while ($tuple = $statement->fetch()) {
                $results[] = $tuple[0];
            }
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }

    // retourne le vin de l'id fourni
    public static function read($id) {
        try {
            $database = SModel::getInstance();
            $query = "select * from vin where id = :id";
            $statement = $database->prepare($query);
            $statement->execute([
                'id' => $id
            ]);
            $list_vins = $statement->fetchAll(PDO::FETCH_CLASS, "ModelVin");
            return $list_vins;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }

    // retourne un formulaire pour creer un vin
    public static function insert($id, $cru, $annee, $degre) {
        try {
            $database = SModel::getInstance();
            $query = "insert into vin value (:id, :cru, :annee, :degre)";
            $statement = $database->prepare($query);
            $statement->execute([
                'id' => $id,
                'cru' => $cru,
                'annee' => $annee,
                'degre' => $degre
            ]);
            return TRUE;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return FALSE;
        }
    }
}
