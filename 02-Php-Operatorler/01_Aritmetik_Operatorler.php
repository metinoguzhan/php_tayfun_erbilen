<?php

    /**
     * 
     *      ARITMETIK OPERATORLER
     * Toplama +
     * Çıkarma -
     * Çarpma *
     * Bölme /
     * Mod (Kalan) %
     * 
     *
     */

    $a = 10;
    $b = 5;
    echo $a + $b;
    echo "<br/>";
    echo $a - $b;
    echo "<br/>";
    echo $a / $b;
    echo "<br/>";
    echo $a * $b;
    echo "<br/>";
    echo 5 % 3;
    echo "<br/>";


    echo "\tMatematik İşlem Önceliği <br>";
    echo "5 + 2 * 5 * 2 / 5 = ";
    echo 5 + 2 * 5 * 2 / 5;
    echo "<br>";
    echo "(5 + 2) * 5 * 2 / 5 = ";
    echo (5 + 2) * 5 * 2 / 5;

    echo "<br>";
    echo "(5 + ((2 * 5) * 2)) / 5 = ";
    echo (5 + ((2 * 5) * 2)) / 5;

    echo "<br><br>";
    $a = 5;
    $b = 2;
    $c = 5;
    $d = 2;
    $e = 5;

    echo "($a + ($b * $c)) * ($d / $e) = ";
    echo ($a + ($b * $c)) * ($d / $e);
    
    


?>