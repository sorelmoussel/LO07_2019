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
                <h3 class="panel-title">LireVins 3</h3>
            </div>
        </div> 
        <div class="jumbotron">
            <h1>La cave de l'Utt </h1>
            <p>C'est la meilleure cave de la région ....</p>
        </div>
        <p/>

        <?php
        Vin::viewAllVins();
        ?>


    </div>
    <?php include 'fragmentFooter.html';
    ?>
