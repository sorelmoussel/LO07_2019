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

        <!-- ===================================================== -->
        <!-- ===================================================== -->

        <?php
        $query = "select distinct annee from vin order by annee";
        $statement = $database->query($query);
        $liste_annee = array();
        while ($tuple = $statement->fetch()) {
            $liste_annee[] = $tuple[0];
        }
        ?>


        <form role="form" method='get' action='page_selection_annee_action.php'>
            <div class="form-group">
                <label for="an">année : </label>
                <select class="form-control" id="an" name='annee'>
                    <?php
                    foreach ($liste_annee as $key => $an) {
                        echo ("<option>$an</option>");
                    }
                    ?>
                </select>
            </div>
            <p/>
            <button class="btn btn-primary" type="submit">Submit form</button>
        </form>
        <p/>
    </div>

    <?php include 'fragmentFooter.html'; ?>