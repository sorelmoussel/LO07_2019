<?php

include_once 'config.php';
require_once ($root . "/app/model/ModelVin.php");
//require_once ($root . "/app/model/ModelProducteur.php");

class ControllerVin {

    public static function accueil($params) {
        include 'config.php';
        echo ("<li>accueil : BUG = $DEBUG</li>");
        if ($DEBUG) {
            echo ("<li>ControllerVin:accueil() avec DEBUG</li>");
        }
        include 'config.php';
        $vue = $root . '/app/view/viewAccueil.php';
        require ($vue);
    }

    public static function vinReadAll($params) {
        echo ("ControllerVin:readAll()");
        $results = ModelVin::vinReadAll();
        include 'config.php';
        $vue = $root . '/app/view/vin/viewVinList.php';
        echo ("readAll:vue = $vue\n");
        require ($vue);
    }

    // Affiche un vin particulier (id)
    public static function vinRead($params) {
        include 'config.php';
        if ($DEBUG)
            echo ("<li>ControllerVin:vinRead()</li>");
        $results = ModelVin::readAllId();
        
        // passage du non de la méthode cible pour le champ action du formulaire
        // Solution 1 : vinReadActionSelect
        // Solution 2 : vinReadActionDelete
        
        $target = $params['target']; 
        
        $vue = $root . '/app/view/vin/viewVinIdForm.php';
        require ($vue);
    }
    
        // Methode pour le traitement apres vinRead dans le cas d'une selection sur un ID
    public static function vinReadActionSelect($params) {
        include 'config.php';
        if (DEBUG)
            echo ("<li>ControllerVin:vinIdFormAction</li>");
        $vin_id = $_GET['id'];
        $results = ModelVin::read($vin_id);
        $vue = $root . '/app/view/vin/viewVinList.php';
        require ($vue);
    }
    
            // Methode pour le traitement apres vinRead dans le cas d'une suppression sur un ID
    public static function vinReadActionDelete($params) {
        include 'config.php';
        if (DEBUG)
            echo ("<li>ControllerVin:vinReadActionDelete</li>");
        $vin_id = $_GET['id'];
        $results = ModelVin::delete($vin_id);
        $vue = $root . '/app/view/vin/viewVinList.php';
        require ($vue);
    }

    // Affiche le formulaire de creation d'un vin
    public static function vinCreate($params) {
        include 'config.php';
        $vue = $root . '/app/view/vin/viewVinForm.php';
        require ($vue);
    }

    // Ajout des données d'un nouveau vin et affiche un message de confirmation
    public static function vinCreated($params) {
        // ajouter une validation des informations du formulaire
        $results = ModelVin::insert($_GET['id'], $_GET['cru'], $_GET['annee'], $_GET['degre']);
        include 'config.php';
        $vue = $root . "/app/view/vin/viewVinCreated.php";
        require ($vue);
    }



}
?>


 