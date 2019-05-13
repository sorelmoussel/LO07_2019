<?php


require_once 'ModelVin.php';
$results = ModelVin::readAll();
require 'viewVinList.php';







/*
require_once 'ModelVin.php';

$modelVin = new ModelVin();
$results = $modelVin->readAll();

require 'ViewVinList.php';

?>


