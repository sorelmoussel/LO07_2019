<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>page 1</title>
        <style>
            h1 { color: red; }
            h2 { color: blue; }
        </style>
    </head>
    <body>
        <?php
        echo ("<h1>PHP base</h1>");

// QQ===================================================
        echo ("<p/>::PHP1::Qu'affiche le script suivant ? ");
        $res = 2 + 3 / 4;
        print $res;
// QQ===================================================
        echo ("<p/>::PHP2::Qu'affiche le script suivant ? ");
        $res = 15;
        $Res = 10;
        $Res = $Res - 7;
        print $res;
// QQ===================================================
        echo ("<p/>::PHP3::Qu'affiche le script suivant ? ");
        $a = 6;
        $b = 15;
        $c = $a;
        $a = $b;
        $b = $c;
        print "$a $b";
// QQ===================================================
        echo ("<p/>::PHP4::Qu'affiche le script suivant ? ");
        $a = "3 * 7";
        print $a;
// QQ===================================================
        echo("<p/>::PHP5::Qu'affiche le script suivant ? ");
        $n = 0;
        for ($i = 0; $i < 5; $i++) {
            $n = $n + 1;
        }
        print $i;

// QQ===================================================
        echo("<p/>::PHP6::Qu'affiche le script suivant ? ");

        $resultat = "LO07";
        for ($i = 1; $i < 3; $i++) {
            $resultat = $resultat . "IF26";
        }
        print $resultat;


// ===================================================
        echo ("<h1>fonction </h1>");
// ===================================================
// QQ===================================================
        echo ("<p/>::FONCTION1::Qu'affiche le script suivant ? ");

        function diff($val1, $val2) {
            return $val2 - $val1;
        }

        $a = diff(3, -2);
        print $a;

// QQ===================================================
        echo ("<p/>::FONCTION2:: Qu'affiche le script suivant ? ");

        function carre($val) {
            return $val * $val;
        }

        function inc($val) {
            return $val + 1;
        }

        $a = carre(inc(3));
        print $a;


// QQ===================================================
        echo ("<p/>::FONCTION3::Qu'affiche le script suivant ? ");
        $a = 10;
        $b = 20;

        function addition() {
            $res = $a + $b + 4;
            return $res;
        }

        $c = addition();
        print ($c);

        // QQ===================================================
        echo ("<p/>::FONCTION4::Qu'affiche le script suivant ? ");
        $a = 10;
        $b = 20;

        function addition2() {
            global $a;
            $res = $a + $b + 4;
            return $res;
        }

        $c = addition2();
        print ($c);

// QQ===================================================
        echo ("<p/>::FONCTION5::Qu'affiche le script suivant ? ");
        $a = 10;
        $b = 20;

        function addition3() {
            global $a, $b;
            $res = $a + $b + 4;
            return $res;
        }

        $c = addition3();
        print ($c);



// QQ===================================================
        echo ("<p/>::FONCTION6::Qu'affiche le script suivant ? ");

        function func($a) {
            $a += 2;
            return $a;
        }

        $a = 5;
        $b = func($a);
        print "$a $b";

// QQ===================================================
        echo ("<p/>::FONCTION7::Qu'affiche le script suivant ? ");

        function g($valeur) {
            if (0 == $valeur) {
                return 2;
            } else {
                return (3 + g($valeur - 1));
            }
        }

        print (g(4));






// ===================================================
        echo ("<h1>PHP DATA </h1>");
// ===================================================
        // --------------------------------------------------------------------
// ----- PHP data
// --------------------------------------------------------------------
// QQ===================================================
        echo ("<p/>::DATA1::Quelles expressions peuvent afficher un tableau en PHP ?  ");

// QQ===================================================
        echo ("<p/>::DATA2::Quelle sera la sortie du code suivant ? ");
        $tab = array(10, 12, 0, "Web", 5.5);
        echo ($tab[3]);
        
        // web

// QQ===================================================
        echo ("<p/>::DATA3::Quelle sera la sortie du code suivant ? ");

        $tab = array(10, 12, 0, "Web", 5.5);
        $resultat = $tab[0];
        foreach ($tab as $element) {
            ($element > $resultat) ? $resultat = $element : 1;
        }
        echo ($resultat);
        
        // 12


// QQ===================================================
        echo ("<p/>::DATA4::Quelle sera la sortie du code suivant ? ");

        $tab = array('un' => 3, 'deux' => 2, 'trois' => 1);
        ksort($tab);
        $keys = array_keys($tab);
        print $keys[0];

        // deux


        ?>


    </body>
</html>
