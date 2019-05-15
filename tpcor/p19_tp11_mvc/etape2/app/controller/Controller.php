<?php

require_once 'ModelVin.php';

class ControllerVin2 {
    
    public static function accueil() {
        require ('viewAccueil.php');
    }

    public static function readAll() {
        $results = ModelVin::readAll();
        require ('viewVinList.php');
    }

    // Affiche un vin particulier (id)
    public static function read() {
        require ('viewVinIDForm.php');      
    }
    
    // Affiche un vin particulier (id)
    public static function idFormAction() {
        $vin_id = $_GET['id'];
        $results = ModelVin::read($vin_id);
        require 'ViewVinList.php';
    }
    
    // Affiche le formulaire de creation d'un vin
    public static function create() {
        require ('viewVinForm.php'); 
    }

    // Ajout des données d'un nouveau vin et affiche un message de confirmation
    public static function created() {
        // ajouter une validation des informations du formulaire
        $results = ModelVin::insert ($_GET['id'], $_GET['cru'], $_GET['annee'], $_GET['degre']);
        require 'ViewVinCreated.php';
    }
   
    // Ajout des données d'un nouveau vin et affiche un message de confirmation    
    public static function delete() {
        require ('viewVinIDForm.php');  
    }
}
?>


