<?php

/**
 * 
 *                  KARŞILAŞTIRMA OPERATORLERI
 * == Eşittir
 * != Eşit Değildir.
 * > büyüktür.
 * < küçüktür.
 * >= büyük yada eşitse.
 * <= küçük yada eşitse.
 * === denkse
 * !== denk değilse
 * 
 * 
 */

    $a = 5;
    $b = 6;

    echo $a == $b;  //Ekrana hiç bir şey yazamaz çünkü false...
    echo "<br>";
    echo $a != $b;
    echo "<br>";
    echo $a > $b;
    echo "<br>";
    echo $a < $b;
    echo "<br>";
    echo $a >= $b;
    echo "<br>";
    echo $a <= $b;
    echo "<br>";

    echo "Denk mi ?<br>";
    $sayi1 = 5;
    $sayi2 = "5";

    echo $sayi1 === $sayi2;
    echo $sayi1 !== $sayi2;

?>