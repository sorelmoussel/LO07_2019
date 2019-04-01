<?php

require_once 'WBCcharte.php';
require_once 'Cmodule.php';

$module = new Cmodule();
$module->setSigle($_GET["sigle"]);
$module->setCategorie($_GET["cat"]);
$module->setLabel($_GET["label"]);
$module->setEffectif($_GET["effectif"]);

if ($module->valide()) {
  $module->pageOK();
  echo ($module->sauveTXT() . "<br />\n");
  echo ($module->sauveBDR("module") . "<br />\n");
  $module->pageFoot();
} else {
  $module->pageKO();
}
?>