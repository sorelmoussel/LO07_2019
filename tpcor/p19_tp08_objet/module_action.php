<?php

require_once 'WBcharte.php';
require_once 'Cmodule.php';

$table = "modules";

$module = new Module($_GET["sigle"], $_GET["categorie"], $_GET["label"], $_GET["effectif"]);

if ($module->valide()) {
    $module->pageOK();
    echo ("<h3>SauveTXT</h3>");
    echo ($module->sauveTXT() . "<br />\n");

    echo ("<h3>createTable</h3>");    
    echo ($module->createTable($table) . "<br />\n");

    
    echo ("<h3>SauveBDR</h3>");    
    echo ($module->sauveBDR($table) . "<br />\n");
} else {
    $module->pageKO();
}
$module->pageFoot();
?>