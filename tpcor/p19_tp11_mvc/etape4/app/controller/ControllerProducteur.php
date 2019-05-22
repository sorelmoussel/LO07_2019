<?php
include_once 'config.php';
//require_once ($root . "/app/model/ModelVin.php");
require_once ($root . "/app/model/ModelProducteur.php");

class ControllerProducteur {

    public static function producteurReadAll($params) {
        include 'config.php';
        if ($DEBUG)
            echo ("ControllerProducteur:producteurReadAll()");
        $results = ModelProducteur::readAll();
        $vue = $root . '/app/view/producteur/viewProducteurList.php';
        require ($vue);
    }

    // Affiche un producteur particulier (id) parmi la liste des id

    public static function producteurRead($params) {
        include 'config.php';
        if ($DEBUG)
            echo ("<li>ControllerProducteur:producteurRead()</li>");
        $results = ModelProducteur::readAllId();
        $vue = $root . '/app/view/producteur/viewProducteurIdForm.php';
        require ($vue);
    }

    // Affiche un producteur particulier (id)
    public static function producteurIdFormAction($params) {
        include 'config.php';
        if (DEBUG)
            echo ("<li>ControllerProducteur:producteurIdFormAction</li>");
        $id = $_GET['id'];
        $results = ModelProducteur::read($id);
        $vue = $root . '/app/view/producteur/viewProducteurList.php';
        require ($vue);
    }

    // Affiche le formulaire de creation d'un producteur
    public static function producteurCreate($params) {
        include 'config.php';
        $vue = $root . '/app/view/producteur/viewProducteurForm.php';
        require ($vue);
    }

    // Ajout des données d'un nouveau vin et affiche un message de confirmation
    public static function producteurCreated($params) {
        // TODO : ajouter une validation des informations du formulaire
        $results = ModelProducteur::insert($_GET['id'], $_GET['nom'], $_GET['prenom'], $_GET['region']);
        include 'config.php';
        $vue = $root . "/app/view/producteur/viewProducteurCreated.php";
        require ($vue);
    }

    public static function producteurReadVins($params) {
        include 'config.php';
        if ($DEBUG) echo ("ControllerProducteur:producteurReadVins()");
        echo ("Q1");
        $results = ModelProducteur::readRecoltes();
        $vue = $root . '/app/view/producteur/viewProducteurVins.php';
        require ($vue);
    }

}
?>


 