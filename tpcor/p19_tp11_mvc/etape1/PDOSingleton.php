<?php

class S_PDO extends PDO {

    private static $_instance;

    // Constructeur : héritage public obligatoire par héritage de PDO
    public function __construct() {   
    }

    //Singleton
    public static function getInstance() {
        if (!isset(self::$_instance)) {
            try {
                self::$_instance = new PDO(SQL_DSN, SQL_USERNAME, SQL_PASSWORD, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            } catch (PDOException $e) {
                echo '<strong>' . $e->getMessage() . '</strong>';
            }
        }
        return self::$_instance;
    }
     
}




/*

 * class GestionPages_Interface
 
{
    private $bdd;
     
    public function __construct()
    {
        $this->bdd = S_PDO::getInstance();
    }
     
    public function getListPagesCategorie($idCategorie)
    {
        
        $bdd = $this->bdd;
         
        try
        {  
            $rq_getListePages = $bdd->query('SELECT *
                                            FROM page
                                            WHERE idCategorie = '.$idCategorie.';');
            $data_getListePages = $rq_getListePages->fetch();
        }
        catch (Exception $e)
        {
            echo 'Erreur SQL: '.$e->getMessage();
        }
         
        return($data_getListePages);
    }
 
?>      
}
 class GestionPages_Interface
{
    private $bdd;
     
    public function __construct()
    {
        $this->bdd = S_PDO::getInstance();
    }
     
    public function getListPagesCategorie($idCategorie)
    {
   
        $bdd = $this->bdd;
        if(!is_object($bdd))echo"$bdd N EST PAS UN OBJET";{
                    var_dump($bdd);
                    exit();
                }

        try
        {  
                         
                    $rq_getListePages = $bdd->query('SELECT *
                                            FROM page
                                            WHERE idCategorie ='.$idCategorie.'');
                    if(!is_object($rq_getListePages))echo"$rq_getListePages N EST PAS UN OBJET";{
                    var_dump($rq_getListePages);
                    exit();
                    }                                                                   
                    $this->data_getListePages = $rq_getListePages->fetch();
                    if(!is_object($this->data_getListePages))echo"$this->data_getListePages N EST PAS UN OBJET";{
                    var_dump($this->data_getListePages);
                    exit();
                    }
        }
        catch (Exception $e)
        {
            echo 'Erreur SQL: '.$e->getMessage();
        }
         
        return($this->data_getListePages);
    }
 
}

 */