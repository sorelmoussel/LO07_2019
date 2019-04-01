<html>
 <head>
  <title>Classe module</title>
 </head>
</html>
<body>
  
<?php

echo ("Bonjour1");

require_once 'module.php';
require_once 'programme.php';

echo ("Bonjour2");


$lo07 = new module ("lo07", "Technologies du Web", "TM", 140);
echo $lo07;

$lo09 = new module ("lo09", "Construction d'applications réparties", "TM", 24);
echo $lo09;


echo ("Bonjour3");

$sit = new programme("sit");
$sit->addModule($lo07);
$sit->addModule($lo09);
echo $sit;

?>


</body>

