<?php
include 'fragmentDatabaseConfig.php';
include 'fragmentHeader.html';
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
                <h3 class="panel-title">TD PHP et MySQL</h3>
            </div>
        </div> 
        <div class="jumbotron">
            <h1>La cave de l'Utt </h1>
            <p>C'est la meilleure cave de la région ....</p>
        </div>


        <p/>

        <?php
        if (isset($_GET['annee'])) {
            $annee = $_GET['annee'];
        } else {
            $annee = 2019;
        }

        $query = "select * from vin where annee = ?";
        $statement = $database->prepare($query);
        $statement->execute([$annee]);

        include 'fragmentVinResultats.php';
        ?>

    </div>

    <?php include 'fragmentFooter.html'; ?>