<?php

require_once "../model/ModelVin.php";

class Controller {

    public static function accueil() {
        echo ("Controller:accueil()");
        include 'config.php';
        $vue = $root . '/app/view/viewAccueil.php';
        require ($vue);
    }

    public static function readAll() {
        echo ("Controller:readAll()");
        $results = ModelVin::readAll();
        include 'config.php';
        $vue = $root . '/app/view//vin/viewVinList.php';
        echo ("readAll:vue = $vue\n");
        require ($vue);
    }

    // Affiche un vin particulier (id)
    public static function read() {
        include 'config.php';
        $results = ModelVin::readAllId();
        $vue = $root . '/app/view/vin/viewVinIDForm.php';
        require ($vue);
    }

    // Affiche un vin particulier (id)
    public static function idFormAction() {
        $vin_id = $_GET['id'];
        $results = ModelVin::read($vin_id);
        include 'config.php';
        $vue = $root . '/app/view/vin/ViewVinList.php';
        require ($vue);
    }

    // Affiche le formulaire de creation d'un vin
    public static function create() {
        include 'config.php';
        $vue = $root . '/app/view/vin/viewVinForm.php';
        require ($vue);
    }

    // Ajout des données d'un nouveau vin et affiche un message de confirmation
    public static function created() {
        // ajouter une validation des informations du formulaire
        $results = ModelVin::insert($_GET['id'], $_GET['cru'], $_GET['annee'], $_GET['degre']);
        include 'config.php';
        $vue = $root . '/app/view/vin/ViewVinCreated.php';
        require ($vue);
    }

    // Ajout des données d'un nouveau vin et affiche un message de confirmation    
    public static function delete() {
        include 'config.php';
        $vue = $root . '/app/view/vin/viewVinIDForm.php';
        require ($vue);
    }

}
?>


