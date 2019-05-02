<?php
include 'Database.php';
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
                $query = "select * from vin";
                $statement = $database->query($query);
                while ($tuple = $statement->fetch()) {
                    printf("<tr><td>%d</td><td>%s</td><td>%d</td><td>%.2f</td></tr>\n", $tuple['id'], $tuple['cru'], $tuple['annee'], $tuple['degre']);
                }
                echo ("</tbody></table>");
                ?>

                </div>

    <?php include 'fragmentFooter.html'; ?>