<!-- ===== viewProducteurList BEGIN ===== -->  
<!-- ===== schema = id, nom, prenom, region ===== -->  

<body>
    <div class="container">


        <?php
        include '../../controller/config.php';
        include ($root . '/app/view/fragment/fragmentMenuCave.html');
        $current_file_name = basename($_SERVER['PHP_SELF']);
        ?>

        <!-- Jumbotrom -->
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo ($current_file_name) ?></h3>
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
                    <th scope = "col">nom</th>
                    <th scope = "col">prenom</th>
                    <th scope = "col">region</th>
                </tr>
            </thead
            <tbody>
                <?php
                // La liste des vins est dans une variable $results             
                foreach ($results as $prod) {
                    printf("<tr><td>%d</td><td>%s</td><td>%s</td><td>%s</td></tr>", $prod->getId(), $prod->getNom(), $prod->getPrenom(), $prod->getRegion());
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- ===== viewVinList END ===== -->  
