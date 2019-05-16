<?php

include '../view/fragment/fragmentHeader.html';
?>
<body>
    <div class="container">

        <?php include '../view/fragment/fragmentMenuVin.html'; ?>

        <!-- ===================================================== -->
        <!-- Jumbotrom -->
        <!-- ===================================================== -->

        <div class="panel panel-success">
            <div class="panel-heading">
fragmentHeader.html
            </div>
        </div> 
        <div class="jumbotron">
            <h1>La cave de l'Utt </h1>
            <p>C'est la meilleure cave de la région ....</p>
        </div>

        <!-- ===================================================== -->
        <!-- ===================================================== -->

        <?php
        $liste_id = ModelVin::readAllId();
        //print_r ($liste_id);
        ?>

        <form role="form" method='get' action='app/controller/router.php'>
            <div class="form-group">
                <input type="hidden" name='action' value='idFormAction'>
                <label for="id">id : </label> <select class="form-control" id='id' name='id' style="width: 100px">
                    <?php
                    foreach ($liste_id as $key => $id) {
                        echo ("<option>$id</option>");
                    }
                    ?>
                </select>
            </div>
            <p/>
            <button class="btn btn-primary" type="submit">Submit form</button>
        </form>
        <p/>
    </div>

    <?php include '../view/fragment/fragmentFooter.html'; ?>