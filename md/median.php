<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        echo ("<h3>affectation </h3>");

        $res = 2 + 3 / 4;
        print $res;
        echo ("<h3>affectation</h3>");

        $a = 6;
        $b = 15;
        $c = $a;
        $a = $b;
        $b = $c;
        print "$a $b";

        echo ("<h3>calcul </h3>");

        $a = "3*7";
        print $a;


        echo ("<h3>fonction global</h3>");

        $a = 10;
        $b = 20;

        function addition() {
            $res = $a + $b + 4;
            return $res;
        }

        $c = addition();
        print ($c);

        echo ("<h3>fonction résursive</h3>");

        function g($valeur) {
            if (0 == $valeur) {
                return 2;
            } else {
                return (3 + g($valeur - 1));
            }
        }
        print (g(4));
        
        
        
        ?>


    </body>
</html>
