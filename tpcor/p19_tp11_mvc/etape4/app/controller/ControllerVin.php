<?php

include_once 'config.php';
require_once ($root . "/app/model/ModelVin.php");
require_once ($root . "/app/model/ModelProducteur.php");

class ControllerVin {

    public static function accueil() {
        include 'config.php';
        echo ("<li>accueil : BUG = $DEBUG</li>");
        if ($DEBUG) {
            echo ("<li>Controller:accueil() avec DEBUG</li>");
        }
        include 'config.php';
        $vue = $root . '/app/view/viewAccueil.php';
        require ($vue);
    }

    public static function vinReadAll() {
        echo ("Controller:readAll()");
        $results = ModelVin::vinReadAll();
        include 'config.php';
        $vue = $root . '/app/view/vin/viewVinList.php';
        echo ("readAll:vue = $vue\n");
        require ($vue);
    }

    // Affiche un vin particulier (id)
    public static function vinRead() {
        include 'config.php';
        if ($DEBUG)
            echo ("<li>Controller:vinRead()</li>");
        $results = ModelVin::readAllId();
        $vue = $root . '/app/view/vin/viewVinIdForm.php';
        require ($vue);
    }

    // Affiche un vin particulier (id)
    public static function vinIdFormAction() {
        include 'config.php';
        if (DEBUG)
            echo ("<li>Controller:vinIdFormAction</li>");
        $vin_id = $_GET['id'];
        $results = ModelVin::read($vin_id);

        $vue = $root . '/app/view/vin/viewVinList.php';
        require ($vue);
    }

    // Affiche le formulaire de creation d'un vin
    public static function vinCreate() {
        include 'config.php';
        $vue = $root . '/app/view/vin/viewVinForm.php';
        require ($vue);
    }

    // Ajout des données d'un nouveau vin et affiche un message de confirmation
    public static function vinCreated() {
        // ajouter une validation des informations du formulaire
        $results = ModelVin::insert($_GET['id'], $_GET['cru'], $_GET['annee'], $_GET['degre']);
        include 'config.php';
        $vue = $root . "/app/view/vin/viewVinCreated.php";
        require ($vue);
    }

    // Ajout des données d'un nouveau vin et affiche un message de confirmation    
    public static function delete() {
        include 'config.php';
        $vue = $root . '/app/view/vin/viewVinIDForm.php';
        require ($vue);
    }

    public static function producteurReadAll() {
        include 'config.php';
        if ($DEBUG)
            echo ("Controller:producteurReadAll()");
        $results = ModelProducteur::readAll();
        $vue = $root . '/app/view/producteur/viewProducteurList.php';
        require ($vue);
    }

    // Affiche un producteur particulier (id) parmi la liste des id

    public static function producteurRead() {
        include 'config.php';
        if ($DEBUG)
            echo ("<li>Controller:producteurRead()</li>");
        $results = ModelProducteur::readAllId();
        $vue = $root . '/app/view/producteur/viewProducteurIdForm.php';
        require ($vue);
    }

    // Affiche un producteur particulier (id)
    public static function producteurIdFormAction() {
        include 'config.php';
        if (DEBUG)
            echo ("<li>Controller:producteurIdFormAction</li>");
        $id = $_GET['id'];
        $results = ModelProducteur::read($id);
        $vue = $root . '/app/view/producteur/viewProducteurList.php';
        require ($vue);
    }

    // Affiche le formulaire de creation d'un producteur
    public static function producteurCreate() {
        include 'config.php';
        $vue = $root . '/app/view/producteur/viewProducteurForm.php';
        require ($vue);
    }

    // Ajout des données d'un nouveau vin et affiche un message de confirmation
    public static function producteurCreated() {
        // TODO : ajouter une validation des informations du formulaire
        $results = ModelProducteur::insert($_GET['id'], $_GET['nom'], $_GET['prenom'], $_GET['region']);
        include 'config.php';
        $vue = $root . "/app/view/producteur/viewProducteurCreated.php";
        require ($vue);
    }

    public static function producteurReadVins() {
        include 'config.php';
        if ($DEBUG) echo ("Controller:producteurReadVins()");
        echo ("Q1");
        $results = ModelProducteur::readRecoltes();
        $vue = $root . '/app/view/producteur/viewProducteurVins.php';
        require ($vue);
    }

}
?>


 