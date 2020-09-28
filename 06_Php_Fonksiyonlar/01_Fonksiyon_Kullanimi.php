<?php 


        function test(){
            echo "Test<br>";
        }

        function test2(){
            return "Test 2";
        }

        //Test();

        $result = test2();
        //echo $result."<br>";


        function topla($sayi1,$sayi2){
            return $sayi1 + $sayi2;
        }

        $toplam = topla(5,8);
        //echo $toplam;

        function topla2($sayi1 = 2,$sayi2 = 10){
            return $sayi1 + $sayi2;
        }

        $result = topla2();
        //echo $result;

        /** 
         * global yada GLOBALS Kullanımı
        */
        $ad = "Metin";
        function adSoyad($soyad){
            //global $ad;
            return $GLOBALS['ad'].' '.$soyad;
        }

        //echo adSoyad("Oğuzhan");

        $yazi = "Metin Oguzhan Metin Oğuzhan";
        //echo substr($yazi,0,14)."...";

        function kisalt($str,$limit = 10){
            $karakterSayisi = strlen($str);
            if ($karakterSayisi>$limit) {
                $str = substr($str,0,$limit)."..";
            }
            return $str;
        }
        
        echo kisalt($yazi,4);
?>