<?php
include 'fragmentDatabaseConfig.php';
include 'fragmentHeader.html';
include 'fragmentFooter.html';
require_once 'Vin.php';
?>
<body>
    <div class="container">

        <!-- ===================================================== -->
        <!-- Barre de menu -->
        <!-- ===================================================== -->   

        <?php include 'fragmentMenuVin.html'; ?>

        <!-- ===================================================== -->
        <!-- Jumbotrom -->
        <!-- ===================================================== -->

        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">LireVins 1</h3>
            </div>
        </div> 
        <div class="jumbotron">
            <h1>La cave de l'Utt </h1>
            <p>C'est la meilleure cave de la région ....</p>
        </div>
        <p/>

        <table class = "table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope = "col">id</th>
                    <th scope = "col">cru</th>
                    <th scope = "col">année</th>
                    <th scope = "col">degré</th>
                </tr>
            </thead>
            <tbody>
                <?php
                try {
                    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $query = "select * from vin";
                    $statement = $database->prepare($query);
                    $statement->execute();
                    $liste_vins = $statement->fetchAll(PDO::FETCH_CLASS, "Vin");
                    
                    foreach ($liste_vins as $v) {
                        printf("<tr><td>%d</td><td>%s</td><td>%d</td><td>%.00f</td></tr>", $v->getId(), $v->getCru(), $v->getAnnee(), $v->getDegre());
                    }
                    
                } catch (PDOException $e) {
                    printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
                }
                ?>
            </tbody>
        </table>
    </div>
    <?php include 'fragmentFooter.html';
    ?>
