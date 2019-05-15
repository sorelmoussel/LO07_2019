<?php
include 'fragmentHeader.html';
?>
<body>
    <div class="container">

        <?php include 'fragmentMenuVin.html'; ?>

        <!-- ===================================================== -->
        <!-- Jumbotrom -->
        <!-- ===================================================== -->

        <div class="panel panel-success">
            <div class="panel-heading">
         <h3 class="panel-title">Modèle Vue Contrôleur</h3>
            </div>
        </div> 
        <div class="jumbotron">
            <h1>La cave de l'Utt </h1>
            <p>C'est la meilleure cave de la région ....</p>
        </div>

        <!-- ===================================================== -->
        <!-- ===================================================== -->

        <?php
        if ($results) {
            echo ("<h2>Le nouveau vin a été ajouté </h2>");
            echo ("<h3>id = " . $_GET['id'] . "</h3>");
        } else {
            echo ("<h2>Problème d'insertion du Vin</h2>");
            echo ("<h3>id = " . $_GET['id'] . "</h3>");
        }
        include ('fragmentFooter.html');
        ?>

        
        