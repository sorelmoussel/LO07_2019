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
                <h3 class="panel-title">TD PHP et MySQL</h3>
            </div>
        </div> 
        <div class="jumbotron">
            <h1>La cave de l'Utt </h1>
            <p>C'est la meilleure cave de la région ....</p>
        </div>

        <!-- ===================================================== -->
        <!-- ===================================================== -->

        <h2>Le nouveau vin a été ajouté </h2>
        <h3><?php echo ($_GET['id']); ?> </h3>
        
      
    <?php include 'fragmentFooter.html'; ?>