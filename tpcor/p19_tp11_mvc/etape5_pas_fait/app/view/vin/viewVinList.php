<!-- ===== viewVinList BEGIN ===== -->  

<body>
    <div class="container">


        <?php
        include '../../controller/config.php';
        include ($root . '/app/view/fragment/fragmentMenuCave.html');
        ?>

        <!-- Jumbotrom -->
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">viewVinList</h3>
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
                // La liste des vins est dans une variable $results             
                foreach ($results as $mv) {
                    printf("<tr><td>%d</td><td>%s</td><td>%d</td><td>%.00f</td></tr>", $mv->getId(), $mv->getCru(), $mv->getAnnee(), $mv->getDegre());
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- ===== viewVinList END ===== -->  
