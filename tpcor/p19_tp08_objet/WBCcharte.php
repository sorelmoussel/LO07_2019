<?php

// ================================================================
// -----> LO07-2019 : PHP Object
// ================================================================

class WBCcharte {

  static function html_css1() {
    $resultat = "  <style type='text/css'>"; 
    $resultat .= "   h1 { color: navy; }\n";
    $resultat .= "  </style>";
    return $resultat;
  }

  static function html_head($titre) {
    $resultat = "<html>\n";
    $resultat .= " <head>\n";
    $resultat .= "  <title>$titre</title>\n";
    $resultat .= self::html_css1();
    $resultat .= " </head>\n";
    return $resultat;
  }

  static function html_foot() {
    $resultat = " <hr/>\n";
    $resultat .= " </body>\n";
    $resultat .= "</html>\n";
    return $resultat;
  }

}

