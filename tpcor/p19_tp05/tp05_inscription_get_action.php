<!DOCTYPE html>

<?php
$titre = "tp05_inscription_get_action.php";
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
        <h3><?php echo ($titre) ?></h3>


        <div class="container">

            <!-- ===================================================== -->
            <!-- Utilisation de tableaux -->
            <!-- ===================================================== -->

            <p/>
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title">Utilisation de tableaux</h3>
                </div>
                <div class="panel-body">Liste des paramètres reçus</div>
            </div> 


            <table class="table table-striped table-bordered">
                <thead>
                    <tr><th scope="col">name</th><th scope="col">valeur (s)</th></tr>
                </thead>
                <tbody>
                    <tr><td>nom</td><td><?php echo ($_GET['nom']) ?></td></tr>
                    <tr><td>prenom</td><td><?php echo ($_GET['prenom']) ?></td></tr>
                    <tr><td>email</td><td><?php echo ($_GET['email']) ?></td></tr>
                    <tr><td>date_naissance</td><td><?php echo ($_GET['date_naissance']) ?></td></tr>
                    <tr><td>sexe</td><td><?php echo ($_GET['sexe']) ?></td></tr>
                    <tr><td>origine</td><td><?php echo ($_GET['origine']) ?></td></tr>
                    <tr>
                        <td>ST07</td>
                        <td>
                            <?php
                            if (isset($_GET['ST07']))
                                echo "oui";
                            else
                                echo "non";
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>ST09</td>
                        <td>
                            <?php
                            if (isset($_GET['ST09']))
                                echo "oui";
                            else
                                echo "non";
                            ?>
                        </td>
                    </tr>         
                    <tr>
                        <td>ST10</td>
                        <td>
                            <?php
                            if (isset($_GET['ST10']))
                                echo "oui";
                            else
                                echo "non";
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>SE</td>
                        <td>
                            <?php
                            if (isset($_GET['SE']))
                                echo "oui";
                            else
                                echo "non";
                            ?>
                        </td>
                    </tr>

                    <tr>
                        <td>modules</td>
                        <td>
                            <?php
                            $listeModules = $_GET['modules'];
                            $resultat = implode(", ", $listeModules);
                            echo ($resultat);
                            ?>
                        </td>
                    </tr>
                    <tr><td>textarea</td><td><?php echo ($_GET['textarea']) ?></td></tr>
                </tbody>
            </table>
        </div>



    </body>
</html>
