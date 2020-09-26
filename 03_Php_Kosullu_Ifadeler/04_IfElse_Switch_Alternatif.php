<?php


            $sayi = 4;
            switch ($sayi):
                case 4:
                    echo "sayi değeri 4 dür.";
                    break;
                case 5:
                    echo "sayi değeri 5 dir.";
                    break;
                default:
                    echo "sayi değeri bilinmiyor.";
                    break;
            endswitch;

            echo "<br>";

            $a = 5;
            if ($a == 5) :
                echo "a değeri 5 tir.";
            elseif ($a == 6) :
                echo "a değeri 6 dır. ";
            else :
                echo "a değeri bilinmiyor";
            endif;
            echo "<br><br><br>"
?>


<?php
    if ($a == 5) {
?>
        <b>a değeri 5 değerine eşittir.</b>
<?php
    }
?>
<br><br>


<?php if($a == 5) :?>
        <i>
            <b>a değişkeni 5 değerine eşittir.</b>
        </i>
<?php endif ?> 