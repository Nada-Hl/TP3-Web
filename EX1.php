<?php
    echo"Les nombres d'Armstrong qui sont inférieurs à 1000 sont les suivants : <br>";
    for($i=0;$i<=1000;$i++){
        $num=(String)$i;
        $sum=0;
        for($j=0;$j<strlen($num);$j++) $sum+=pow($num[$j],3);
        if($sum==$i) echo" <li>{$i}</li>";
    }
?>