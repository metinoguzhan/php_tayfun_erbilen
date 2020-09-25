<?php

    /**
     *           ATAMA OPERATORLERI
     *   = değer atama
     *  += artırarak değer atama
     *  -= azaltarak değer atama
     *  /= bölerek değer atama
     *  *= çarparak değer atama
     *  %= modunu alarak değer atama 
     *  . birleştirme operatörü
     *  .= birleştirerek değer atama
     * 
     */


    $a = 5;
    echo $a."<br>";
    $a += 5;
    echo $a."<br>";
    $a -= 5;
    echo $a."<br>";
    $a *= 5;
    echo $a."<br>";
    $a /= 5;
    echo $a."<br>";
    $a %= 2;
    echo $a."<br>";


    $ad = "Metin";
    $soyad = "Oguzhan";

    echo $ad.$soyad;
    echo "<br>";
    echo "$ad $soyad";
    echo "<br>";
    echo "Metin"."34";
    echo "<br><br><br>";

    echo "Metin" . "Oğuzhan" . 24 . $ad . "Metin" . $soyad;
    echo "<br><br><br>";

    $ad .= "  Oğuzhan 35";
    echo "$ad";

    echo "<br><br><br>";

    $ad = "Metin";
    $ad .= " "."Oğuzhan";
    echo $ad;
?>