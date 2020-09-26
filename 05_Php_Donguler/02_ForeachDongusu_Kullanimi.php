<?php 

    $sayilar = [1,2,3,4,5,6,7,8,9,10];
    foreach ($sayilar as $key => $value) {
        echo $key . '=>' .$value.'<br>';
    }



    $uyeDetay = [
        'ad' => "Metin",
        'soyad' => "Oğuzhan",
        'yas' => 34
    ];


    foreach ($uyeDetay as $key => $value) {
        echo $key . ' => ' . $value . '<br>';
    }


    foreach ($uyeDetay as $value) {
        echo $value . "<br>";
    }
?>