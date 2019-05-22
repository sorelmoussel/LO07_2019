<?php

require_once 'SModel.php';

class ModelProducteur {

    private $id, $nom, $prenom, $region;

    // pas possible d'avoir 2 constructeurs
    public function __construct($id = NULL, $nom = NULL, $prenom = NULL, $region = NULL) {
        // valeurs nulles si pas de passage de parametres
        if (!is_null($id)) {
            $this->id = $id;
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->region = $region;
        }
    }

    function getId() {
        return $this->id;
    }

    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getRegion() {
        return $this->region;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    function setRegion($region) {
        $this->region = $region;
    }

    public function __toString() {
        return $this->id;
    }

    // liste de méthodes pour générer du HTML .....

    public function viewProducteur() {
        printf("<tr><td>%d</td><td>%s</td><td>%s</td><td>%s</td></tr>", $prod->getId(), $prod->getNom(), $prod->getPrenom(), $prod->getRegion());
    }

    // retourne une liste d'objets Producteur
    public static function readAll() {
        try {
            $database = SModel::getInstance();
            $query = "select * from producteur";
            $statement = $database->prepare($query);
            $statement->execute();
            $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelProducteur");
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
            $query = "select id from producteur";
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
            $query = "select * from producteur where id = :id";
            $statement = $database->prepare($query);
            $statement->execute([
              'id' => $id
            ]);
            $list = $statement->fetchAll(PDO::FETCH_CLASS, "ModelProducteur");
            return $list;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }

    // retourne un formulaire pour creer un vin
    public static function insert($id, $nom, $prenom, $region) {
        try {
            $database = SModel::getInstance();
            $query = "insert into producteur values (:id, :nom, :prenom, :region)";
            $statement = $database->prepare($query);
            $statement->execute([
              'id' => $id,
              'nom' => $nom,
              'prenom' => $prenom,
              'region' => $region
            ]);
            return TRUE;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return FALSE;
        }
    }
    
    
  
    public static function readRecoltes() {
        try {
            $database = SModel::getInstance();
              // pour faire rapide, je fixe l'id du producteur = 1 ! 
            $query = "select cru, region, annee, degre, quantite from producteur, recolte, vin where producteur.id = recolte.producteur_id and vin.id = recolte.vin_id and producteur.id = :id";
            echo ("<li>ModelProducteur:readRecoltes:query = $query</li>");
            $statement = $database->prepare($query);
            $statement->execute([
              'id' => 1
            ]);
            $list = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $list;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }
   
}
