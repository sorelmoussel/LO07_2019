<?php


    $create_avion="
    CREATE TABLE IF NOT EXISTS AVION (
      id int(11) NOT NULL,
      label varchar(45) NOT NULL,
      annee int(4) NOT NULL,
      passager int(10) NOT NULL,
      PRIMARY KEY  (id)
    ) ENGINE=InnoDB";

?>
