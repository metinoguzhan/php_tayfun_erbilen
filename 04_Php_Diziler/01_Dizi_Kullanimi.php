<?php


    $kimlik = array(
        "Metin",
        "Oğuzhan",
        34,
        "Bilgisayar Mühendisi"
    );

    print_r($kimlik);
    echo "<br>";

    $kimlik = array(
        'ad' => "Metin",
        'soyad' => "Oğuzhan",
        'meslek' => "Bilgisayar Mühendisi",
        'yas' => 34
    );

    print_r($kimlik);
    echo "<br>";
    echo $kimlik['ad']."<br>";
    echo $kimlik['soyad']."<br>";
    echo $kimlik['meslek']."<br>";
    echo $kimlik['yas']."<br>";



    $kimlik2 = [
        'ad' => "Emre",
        'soyad' => "Yaşar",
        'meslek' => "Tekniker",
        'yas' => 33    
    ];
    
    print_r($kimlik2);
    echo "<br>";
    $sayilar = [1,2,3,4];
    print_r($sayilar);

?>  