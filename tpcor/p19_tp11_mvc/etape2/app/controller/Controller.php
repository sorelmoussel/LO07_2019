<?php

require_once '../model/ModelVin.php';

class Controller {
    
    public static function accueil() {
        require ('../view/viewAccueil.php');
    }

    public static function readAll() {
        echo ("Controller:readAll()");
        $results = ModelVin::readAll();
        require ('../view/vin/viewVinList.php');

    }

    // Affiche un vin particulier (id)
    public static function read() {
        require ('../view/vin/viewVinIDForm.php');      
    }
    
    // Affiche un vin particulier (id)
    public static function idFormAction() {
        $vin_id = $_GET['id'];
        $results = ModelVin::read($vin_id);
        require '../view/vin/ViewVinList.php';
    }
    
    // Affiche le formulaire de creation d'un vin
    public static function create() {
        require ('../view/vin/viewVinForm.php'); 
    }

    // Ajout des données d'un nouveau vin et affiche un message de confirmation
    public static function created() {
        // ajouter une validation des informations du formulaire
        $results = ModelVin::insert ($_GET['id'], $_GET['cru'], $_GET['annee'], $_GET['degre']);
        require '../view/vin/ViewVinCreated.php';
    }
   
    // Ajout des données d'un nouveau vin et affiche un message de confirmation    
    public static function delete() {
        require ('../view/vin/view/vin/viewVinIDForm.php');  
    }
}
?>


