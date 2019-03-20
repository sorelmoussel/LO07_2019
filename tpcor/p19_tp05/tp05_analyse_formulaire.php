<!DOCTYPE html>
<?php
$titre = "tp05_analyse_formulaire.php";
?>
 

<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo ($titre) ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrap.css" rel="stylesheet"/>
        <link href="tp05_css.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>

        <div class="container">

            <!-- ===================================================== -->
            <!-- GET -->
            <!-- ===================================================== -->

            <p/>
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title">SuperGlobale GET</h3>
                </div>
            </div> 

            <table class="table table-striped table-bordered">
                <thead>
                    <tr><th scope="col">name</th><th scope="col">valeur (s)</th></tr>
                </thead>
                <tbody>

                    <?php
                    foreach ($_GET as $cle => $valeur) {
                        echo ("<tr><td>$cle</td><td>$valeur</td</tr>");
                    }
                    ?> 

                </tbody>
            </table>

            <!-- ===================================================== -->
            <!-- POST -->
            <!-- ===================================================== -->


            <p/>
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title">SuperGlobale POST</h3>
                </div>
                <div class="panel-body">Liste des paramètres reçus</div>
            </div> 



            <table class="table table-striped table-bordered">
                <thead>
                    <tr><th scope="col">name</th><th scope="col">valeur (s)</th></tr>
                </thead>
                <tbody>

                    <?php
                    foreach ($_POST as $cle => $valeur) {
                        echo ("<tr><td>$cle</td><td>$valeur</td</tr>");
                    }
                    ?> 

                </tbody>
            </table>


        </div>

    </body>
</html>
