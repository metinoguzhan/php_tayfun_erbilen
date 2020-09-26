<?php 

    for ($i=1; $i <= 10; $i++) { 
        echo $i.'<br>';
    }

    for ($i=10; $i > 0; $i--) { 
        echo $i ."<br>";
    }

    $arr = ["udemy","prototurk","93academy","erbilen.net"];
    for ($i=0; $i < count($arr); $i++) { 
        echo $arr[$i]."<br>";
    }

    for ($i=(count($arr)-1); $i >= 0 ; $i--) { 
        echo $arr[$i]."<br>";
    }

    for ($i=0; $i < 10; $i++)
        echo "$i<br>";
    print("döngü bitti.");


    for ($i=0; $i < 10; $i++) :
        echo $i.'<br>';
    endfor;

    echo "break komutu kullanımı : <br>";
    for ($i=0; $i < 10; $i++) { 
        if ($i==5)
            break;
        echo $i.'<br>';
    }

    echo "continue komutu kullanımı : <br>";
    for ($i=0; $i < 10; $i++) { 
        if ($i==5)
            continue;
        echo $i.'<br>';
    }
?>