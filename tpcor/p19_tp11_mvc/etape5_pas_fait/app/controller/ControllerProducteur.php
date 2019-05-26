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
        
        // passage du non de la méthode cible pour le champ action du formulaire
        // Solution 1 : producteurReadActionSelect
        // Solution 2 : producteurReadActionSeVins
        
        $target = $params['target']; 
        
        $vue = $root . '/app/view/producteur/viewProducteurIdForm.php';
        require ($vue);
    }

    // Affiche un producteur particulier (id)
    public static function producteurReadActionSelect($params) {
        include 'config.php';
        if (DEBUG)
            echo ("<li>ControllerProducteur:producteurReadActionSelect</li>");
        $id = $_GET['id'];
        $results = ModelProducteur::read($id);
        $vue = $root . '/app/view/producteur/viewProducteurList.php';
        require ($vue);
    }

    public static function producteurReadActionVins($params) {
        include 'config.php';
        if ($DEBUG)
            echo ("ControllerProducteur:producteurReadActionVins()");
        $id = $_GET['id'];
        $results = ModelProducteur::readRecoltes($id);
        $vue = $root . '/app/view/producteur/viewProducteurVins.php';
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

}
?>


