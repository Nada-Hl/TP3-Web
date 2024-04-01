<?php 
    //EN UTILISANT LA BOUCLE WHILE
    echo"La solution de l'exercice en utilisant la boucle <big>while</big> : <br><hr>";
    $num=rand(100,999);
    echo"Le nombre générer aléatoirement constituer de trois chiffres est le suivant : {$num}<br>";
    $essaie=0;
    $exist=false;
    while(!$exist){
        $num2=rand(100,999);
        $essaie++;
        if($num2==$num) {
            echo"Le nombre {$num2} est générer aléatoirement une deuxieme fois apres {$essaie} tentatives<br>";
            $exist=true;
        }
    }

    echo"<br><br>";

    //EN UTILISANT LA BOUCLE FOR
    echo"La solution de l'exercice en utilisant la boucle <big>for</big> : <br><hr>";
    $num=rand(100,999);
    echo"Le nombre générer aléatoirement constituer de trois chiffres est le suivant : {$num}<br>";
    $num2=rand(100,999);
    for($i=1;$num!=$num2;$i++) $num2=rand(100,999);
    echo"Le nombre {$num2} est générer aléatoirement une deuxieme fois apres {$i} tentatives<br>";
    
?>