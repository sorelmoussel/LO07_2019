<?php

require_once 'ModelVin.php';
$modelV = new ModelVin();
$liste_vins = $modelV->readAll();
require 'ViewVinList.php';
?>


