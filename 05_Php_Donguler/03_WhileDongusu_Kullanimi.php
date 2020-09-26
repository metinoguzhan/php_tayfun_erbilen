<?php 

    $i = 1;
    while ($i<=10) {
        echo $i . '<br>';
        $i++;
    }


    $i = 10;
    while ($i >= 1) {
        echo $i . '<br>';
        $i--;
    }

    $i = 1;
    while ($i<=10) :
        echo $i . '<br>';
        $i++;
    endwhile;


    $i = 10;
    while ($i >= 1) :
        echo $i . '<br>';
        $i--;
    endwhile;

?>