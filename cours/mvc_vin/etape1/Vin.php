<?php

class Vin {

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

    public static function viewAllVins() {
        include ('fragmentDatabaseConfig.php');
        echo('<table class = "table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope = "col">id</th>
                    <th scope = "col">cru</th>
                    <th scope = "col">année</th>
                    <th scope = "col">degré</th>
                </tr>
            </thead>
            <tbody>');
        try {

            $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $query = "select * from vin";
            $statement = $database->prepare($query);
            $statement->execute();
            $liste_vins = $statement->fetchAll(PDO::FETCH_CLASS, "Vin");
            foreach ($liste_vins as $v) {
                $v->viewVin();
            }
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
        }
        echo ('</tbody></table>');
    }

}
