<?php

require_once 'WBcharte.php';
require_once 'Cmodule.php';
require_once 'Ccursus.php';

const DATA = 'tp08_cursus';
session_start();

$module = new Module($_GET["sigle"], $_GET["categorie"], $_GET["label"], $_GET["effectif"]);
//$module = new Module ("lo09", "Construction d'applications réparties", "TM", 24);

if ($module->valide()) {
    $module->pageOK();
    echo ($module->sauveTXT() . "<br />\n");
    echo ($module->sauveBDR("module") . "<br />\n");

    // persistance 

    $cursus = new Cursus();
    $cursus->addModule($module);

    //print ($module);
    // visualisation de cursus à partir de $_SESSION

    $data = $_SESSION[DATA];
    echo("tp08_cursus_action : visualisation des modules du cursus");
    if ($data) {
        print($data);
    }
} else {
    $module->pageKO();
}

echo ("<pre>");
print_r($_SESSION);
echo ("</pre>");

$module->pageFoot();
?>