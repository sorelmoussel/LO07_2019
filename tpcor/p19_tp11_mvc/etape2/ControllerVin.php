// ================================================================
// le controleur de nos rèves 
// controleur ne connait pas la base de données
// le controleur ne fait pratiquement pas de HTML

<?php
require_once 'ModelVin.php';
$liste_vins = ModelVin::readAll();
require 'ViewVinList.php';
?>


