<?php 


    /**
     * 
     *              MANTIKSAL OPERATORLER
     *      && => Ve Operatoru 
     *      || => Veya Operatoru
     *      ! => Değil Operatoru
     * 
     */

    $a = 5;
    $b = 10;

    $result = ($a == $b) && ($a + $b == 15);
    echo $result;
    echo "<br>";
    $result = ($a == $b) || ($a + $b == 15);
    echo $result;
    echo "<br>";
    $result = !($a == $b);
    echo $result;
    echo "<br>";
?> 