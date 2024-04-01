<?php 
    $i=0;
    echo"La suite aleatoire composée de deux nombres pair suivis d’un nombre impair est la suivante : <br>";
    while($i!=3){
        $num=rand(0,100);
        if($i<2 and $num%2==0){
            echo"--> {$num}<br>";
            $i++;
        }
        else if($i==2 and $num%2!=0){
            echo"--> {$num}<br>";
            $i++;
        }
    }
?>