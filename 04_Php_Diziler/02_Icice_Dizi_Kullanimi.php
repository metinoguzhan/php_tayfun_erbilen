<?php

        $kategoriler = [
            'Siteler' => [
                'E-Ticaret' => [
                    "Sahibinden", 
                    "N11", 
                    "Trendyol", 
                    "Hepsiburada"
                ],
                'Egitim' => [
                    "Udemy", 
                    "Prototurk", 
                    "93 academy"
                ],
            ],
        ];

        print_r($kategoriler);
        echo "<br><br>";

        echo $kategoriler['Siteler']['E-Ticaret'][3];
?>