<?php


    $create_livre="
    CREATE TABLE IF NOT EXISTS LIVRE (
      id int(11) NOT NULL,
      pseudo varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
      message longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
      date_reception TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
      PRIMARY KEY  (id)
    ) ENGINE=InnoDB";

?>
