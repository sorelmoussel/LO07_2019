<html>
    <head>
        <title>Classe module</title>
    </head>
</html>
<body>

    <?php
    require_once 'Cmodule.php';
    require_once 'Ccursus.php';


    $lo07 = new module("lo07", "Technologies du Web", "TM", 140);
    echo $lo07;

    $lo09 = new module("lo09", "Construction d'applications réparties", "TM", 24);
    echo $lo09;


    echo ("Bonjour3");

    $sit = new Cursus();
    $sit->addModule($lo07);
    $sit->addModule($lo09);

    echo ("<pre>");
    print_r($sit);
    echo ("</pre>");
    ?>


</body>

