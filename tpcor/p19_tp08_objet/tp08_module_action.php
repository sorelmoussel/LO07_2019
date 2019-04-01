<?php

require_once 'WBcharte.php';
require_once 'Cmodule.php';

$module = new Module($_GET["sigle"], $_GET["categorie"], $_GET["label"], $_GET["effectif"]);

if ($module->valide()) {
    $module->pageOK();
    echo ($module->sauveTXT() . "<br />\n");
    echo ($module->sauveBDR("module") . "<br />\n");
} else {
    $module->pageKO();
}
$module->pageFoot();
?>