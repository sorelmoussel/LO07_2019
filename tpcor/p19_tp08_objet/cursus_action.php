<?php

require_once 'WBcharte.php';
require_once 'Cmodule.php';
require_once 'Ccursus.php';
require_once 'Ccursus2.php';

$module = new Module($_GET["sigle"], $_GET["categorie"], $_GET["label"], $_GET["effectif"]);
//$module = new Module ("lo09", "Construction d'applications réparties", "TM", 24);

if ($module->valide()) {
    $module->pageOK();
    
    // pas de persistance
    // $cursus = new Cursus();    
    
    // persistance 
    $cursus = new Cursus2();
    
    
    $cursus->addModule($module);
    
    echo ("<h3>Visualisation des modules</h3>");
   
    $cursus->affiche();

} else {
    $module->pageKO();
}

?>
