<!DOCTYPE html>


<html>
    <head>
        <meta charset="UTF-8">
        <title>TP04</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="tp04_css.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">

            <!-- ===================================================== -->
            <!-- Barre de menu -->
            <!-- ===================================================== -->           

            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Web 04</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"> <a href="#exo1">Exercice 1</a></li>
                    <li class="active"> <a href="#">Exercice 2</a></li>
                    <li class="active"> <a href="#">Exercice 3</a></li>
                </ul>
            </nav> 

            
            <!-- ===================================================== -->
            <!-- Exo2 : Panel -->
            <!-- ===================================================== -->  

            <?php
            $nom = "Durand";
            $prenom = "Pascal";
            $age = 32;
            $diplome = true;
            ?>

            <a name="exo2"/>

            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Exercice 2</h3>
                </div>
                <div class="panel-body">
                    <ul class="list-group">
                        <li class="list-group-item">Nom = <?php echo $nom ?></li>
                        <li class="list-group-item">Prénom = <?php echo $prenom ?></li>
                        <li class="list-group-item">Age = <?php echo $age ?></li>
                        <li class="list-group-item">Diplome = <?php echo $diplome ?></li>
                    </ul>             
                </div>
            </div> 

            <!-- ===================================================== -->
            <!-- Exo3 : Panel -->
            <!-- ===================================================== -->  
            <a name="exo3"/>

            <?php
            $capitalesAfrique = array("Alger", "Bamako", "Conakry", "Cotonou", "Dakar",
                "Freetown", "Kampala", "Lomé", "Nairobi", "Yamoussoukro");

            $capitalesAfrique[] = "Maputo";
            ?>

            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Exercice 3 : tableau des capitales d'afrique</h3>
                </div>
                <div class="panel-body">
                    <h3>print_r</h3>
                    <pre>
                        <?php
                        print_r($capitalesAfrique)
                        ?>
                    </pre>


                    <h3>foreach </h3>
                    <ul class="list-group">
                        <?php
                        foreach ($capitalesAfrique as $element) {
                            print ("<li class = 'list-group-item'>$element</li>");
                        }
                        ?>
                    </ul>             
                </div>

                <h3>Accès aux données</h3>
                <ul class="list-group">
                    <li class="list-group-item">3ème élément = <?php echo $capitalesAfrique[2]; ?></li>
                    <li class="list-group-item">Nombre d'élements = <?php echo count($capitalesAfrique); ?></li>

                    <?php sort($capitalesAfrique); ?>

                    <li class="list-group-item">Tableau trié = <?php echo implode(", ", $capitalesAfrique) ?></li>                   
                </ul>
            </div> 


            <!-- ===================================================== -->
            <!-- Exo4 : Panel -->
            <!-- ===================================================== -->  
            <a name="exo4"/>

            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Exercice 4 : fonctions</h3>
                </div>

                <div class="panel-body">


                    <?php

                    function badge_danger($label, $compteur) {
                        return ("<button class='btn btn-danger'>$label<span class='badge text-success'>$compteur</span></button>");
                    }

                    print (badge_danger("Web ", 6));
                    print ("<p/>");

                    foreach ($capitalesAfrique as $element) {
                        print (badge_danger($element . " ", strlen($element)));
                    }

                    function badge($categorie, $label, $compteur) {


                    //    Primary, Cecondary, success, Danger, Warning, Info, Light, Dark


                        return ("<button class='btn btn-" . $categorie . "'>$label<span class='badge text-success'>$compteur</span></button>");
                    }

                    print ("<p/>");
                    print (badge("success", "Tests ", 12));
                    print (badge("Info", "Web ", 12));
                    ?>



                </div>
            </div>
        </div>

    </body>
</html>
