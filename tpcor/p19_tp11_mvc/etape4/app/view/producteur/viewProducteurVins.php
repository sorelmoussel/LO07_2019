<!-- ===== viewProducteurList BEGIN ===== -->  
<!-- ===== schema = id, nom, prenom, region ===== -->  

<body>
    <div class="container">
        <?php
        include '../../controller/config.php';
        include ($root . '/app/view/fragment/fragmentMenuCave.html');
        ?>

        <!-- Jumbotrom -->
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">viewProducteurVins</h3>
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
                    <th scope = "col">cru</th>
                    <th scope = "col">region</th>
                    <th scope = "col">annee</th>
                    <th scope = "col">degre</th>
                    <th scope = "col">quantite</th>
                </tr>
            </thead
            <tbody>
                <?php
                // La liste des vins est dans une variable $results  
                foreach ($results as $recolte) {
                    printf("<tr><td>%s</td><td>%s</td><td>%d</td><td>%.00f</td><td>%d</td></tr>", $recolte['cru'], $recolte['region'], $recolte['annee'], $recolte['degre'], $recolte['quantite']);
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- ===== viewVinList END ===== -->  
