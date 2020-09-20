<?php

    /*
        Değişkenler;
            $ işareti ile tanımlanırlar.
            Harf veya _ karakteri ile başlarlar.
            Sayı ile başlayamazlar.
            Türkçe karakterler içerebilir ama KULLANILMAMALIDIR.
            case sensitive (Büyük-Küçük) harfe duyarlıdırlar.

        Atama Operatoru (=)
    */

    $isim = "Metin";
    $soyisim = "Oğuzhan";
    echo $isim." ".$soyisim."<br/>";

    $metin = "metin";
    $Metin = "Metin";
    $metiN = "MetiN";

    echo $metin."<br>";
    echo $Metin."<br>";
    echo $metiN."<br>";

?>