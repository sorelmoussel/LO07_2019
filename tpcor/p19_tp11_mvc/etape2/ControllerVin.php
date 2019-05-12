

<?php
echo ("A");
require_once 'ModelVin.php';
echo ("B");
$modelV = new ModelVin();
echo ("C");
$liste_vins = $modelV-->readAll();
echo ("D");
require 'ViewVinList.php';
echo ("E");
?>


