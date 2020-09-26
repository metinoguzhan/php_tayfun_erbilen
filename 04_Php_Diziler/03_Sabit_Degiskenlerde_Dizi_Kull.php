<?php 

    define('UYE',[
        'isim' => "Metin",
        'soyisim' => "Oğuzhan",
        'sporlar' => [
            'Yüzme','Koşu','Atıcılık'
        ]
    ]);

    define('MEMBER',array(
        "Emre","Yaşar"
    ));
    
    print_r(UYE);
    echo "<br>";
    print_r(MEMBER);
    echo "<br>";
    echo(MEMBER[1]);
    echo "<br>";
    echo(UYE['sporlar'][1]);
    echo "<br>";
?>