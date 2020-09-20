<?php


    /**
     *                      SABIT DEGISKENLER
     * ilk değer verilir ve daha sonra asla değeri değiştirilemez.
     * define Fonksiyonu ile tanımlanır.
     * Türkçe karakter içerebilir.
     * Sayı ile başlayamaz.
     * Harf yada _ işareti ile başlayabilir.
     * Büyük küçük harfe duyarlıdır.
     * Object hariç tüm veri türlerini kapsar.
     * 
     */


     define("isimSoyisim","Metin Oğuzhan");
     echo isimSoyisim."<br>";  
     echo gettype(isimSoyisim)."<br>";
     
     define("yas",34);
     echo yas."<br>";
     echo gettype(yas)."<br>";

     
     define("cinsiyet",true);
     echo cinsiyet."<br>";
     echo gettype(cinsiyet)."<br>";


     define("liste",array(
        "isim" => "metin",
        "soyisim" => "oğuzhan",
     ));
     var_dump(liste);
     echo gettype(liste)."<br>";

     //yas değişkeni yukarıda tanımlandığı için hata verir yeniden değer ataması yapamayız.
     define("yas",111);
     echo yas;

?>