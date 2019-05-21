
<body>
    <div class="container">
        <?php
        include '../../controller/config.php';
        include ($root . '/app/view/fragment/fragmentMenuCave.html');
        ?>

        <!-- Jumbotrom -->
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">Modèle Vue Contrôleur</h3>
            </div>
        </div> 
        <div class="jumbotron">
            <h1>La cave de l'Utt </h1>
            <p>C'est la meilleure cave de la région ....</p>
        </div>  
        <!-- ===================================================== -->
        <form role="form" method='get' action='router.php'>
            <div class="form-group">
                <input type="hidden" name='action' value='vinCreated'>
                <label for="id">id : </label><input type="text" name='id'>           
                <label for="id">cru : </label><input type="text" name='cru'>                           
                <label for="id">annee : </label><input type="text" name='annee'>
                <label for="id">degre : </label><input type="text" name='degre'>                
            </div>
            <p/>
            <button class="btn btn-primary" type="submit">Submit form</button>
        </form>
        <p/>
    </div>






