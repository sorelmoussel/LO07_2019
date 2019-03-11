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
                    <li class="active"> <a href="#exo2">Exercice 2</a></li>
                    <li class="active"> <a href="#exo3">Exercice 3</a></li>
                    <li class="active"> <a href="#exo4">Exercice 4</a></li>
                    <li class="active"> <a href="#exo5">Exercice 5</a></li>
                </ul>
            </nav> 


            <!-- ===================================================== -->
            <!-- Exo1 : Panel -->
            <!-- ===================================================== -->  

            <a name="exo1"/>

            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Exercice 1 : validation de la configuration div-isi</h3>
                </div>

                <div class="panel-body">
                    <?php echo ("Bonjour à tous"); ?>          
                </div>
            </div>     


            <!-- ===================================================== -->
            <!-- Exo2 : Panel -->
            <!-- ===================================================== -->  

            <?php
            $nom = "Durand";
            $prenom = "Pascal";
            $age = 32;
            $ingenieur = true;
            ?>

            <a name="exo2"/>

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Exercice 2</h3>
                </div>
                <div class="panel-body">
                    <ul class="list-group">
                        <li class="list-group-item">Nom = <?php echo $nom ?></li>
                        <li class="list-group-item">Prénom = <?php echo $prenom ?></li>
                        <li class="list-group-item">Age = <?php echo $age ?></li>
                        <li class="list-group-item">Ingénieur = <?php echo $ingenieur ?></li>
                    </ul>             
                </div>
            </div> 

            <!-- ===================================================== -->
            <!-- Exo3 : Tableau  -->
            <!-- ===================================================== -->  
            <a name="exo3"/>

            <?php
            $capitalesAfrique = array("Alger", "Bamako", "Conakry", "Cotonou", "Dakar",
                "Freetown", "Kampala", "Lomé", "Nairobi", "Yamoussoukro");

            $capitalesAfrique[] = "Maputo";
            unset($capitalesAfrique['4']);
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
                            print ("<li class = 'list-group-item list-group-item-light'>$element</li>");
                        }
                        ?>
                    </ul>    

                    <h3>Implode </h3>
                    <ul class="list-group">
                        <?php
                        $message = implode(", ", $capitalesAfrique);
                        print ("<li class = 'list-group-item list-group-item-warning'>$message</li>");
                        ?>
                    </ul>    

                    <h3>Accès aux données</h3>
                    <ul class="list-group">
                        <li class="list-group-item">Nombre d'élements = <?php echo count($capitalesAfrique); ?></li>
                        <?php sort($capitalesAfrique); ?>
                        <li class="list-group-item list-group-item-danger">Tableau trié = <?php echo implode(", ", $capitalesAfrique) ?></li>                   
                    </ul>
                </div>

            </div> 

            <!-- ===================================================== -->
            <!-- Exo4 : tableau associatif -->
            <!-- ===================================================== -->  

            <a name="exo4"/>

            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Exercice 4 : tableau associatif ou table de hachage</h3>
                </div>

                <?php
                $hashCapitales = array("France" => "Paris",
                    "Italie" => "Rome",
                    "Belgique" => "Bruxelles",
                    "Espagne" => "Madrid",
                    "Allemagne" => "Berlin",
                    "Portugal" => "Lisbonne");
                ?> 

                <div class="panel-body">

                    <h3>Allemagne ? </h3>
                    <ul class="list-group">
                        <?php
                        $resultat = $hashCapitales['Allemagne'];
                        print ("<li class = 'list-group-item list-group-item-warning'>$resultat</li>");
                        ?>
                    </ul>    

                    <?php $hashCapitales["France"] = "Troyes"; ?> 

                    <h3>print_r</h3>
                    <pre>
                        <?php
                        print_r($hashCapitales)
                        ?>
                    </pre>


                    <h3>foreach </h3>
                    <ul class="list-group">
                        <?php
                        foreach ($hashCapitales as $pays => $captitale) {
                            print ("<li class = 'list-group-item list-group-item-light'>$pays ==> $captitale</li>");
                        }
                        ?>
                    </ul>  


                    <h3>Accès aux données</h3>
                    <ul class="list-group">
                        <li class="list-group-item">
                            Liste des clés = 
                            <?php
                            $liste_cles = array_keys($hashCapitales);
                            print ("<pre>");
                            print_r($liste_cles);
                            print ("</pre>");
                            ?>
                        </li>
                        <li class="list-group-item">
                            Liste des valeurs = 
                            <?php
                            $liste_valeurs = array_values($hashCapitales);
                            print ("<pre>");
                            print_r($liste_valeurs);
                            print ("</pre>");
                            ?>             
                    </ul>
                </div>
            </div>     



            <!-- ===================================================== -->
            <!-- Exo4 : Panel -->
            <!-- ===================================================== -->  
            <a name="exo5"/>

            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Exercice 5 : fonctions</h3>
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
                        print (" ");
                    }
                    ?>

                </div>
            </div>
        </div>

    </body>
</html>
