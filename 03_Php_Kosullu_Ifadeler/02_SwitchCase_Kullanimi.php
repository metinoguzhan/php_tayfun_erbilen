<?php


        $a = 7;
        switch ($a) {
            case 5:
                echo "a 5'e eşit";
                break;
            case 6:
                echo "a 6 ya eşit";
                break;
            case $a % 4 == 3:
                echo "a değerini 4' e bölünce kalan 3tur.";
                break;
            default:
                echo "bilinmeyen değer";
                break;
        }
?>