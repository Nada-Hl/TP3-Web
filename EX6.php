<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="EX6.php" method="POST">
        <h1>Solution équations du deuxième dégrée</h1>
        <label>L'équation du deuxième dégrée s'écrit sous la forme : ax<sup>2</sup>+bx+c<br></label><br>
        <label>Entrer le premier élément <big>a</big> : <br></label>
        <input type="text" name="a" /><br>
        <label>Entrer le deusxiéme élément <big>b</big> : <br></label>
        <input type="text" name="b" /><br>
        <label>Entrer le troisiéme élément <big>c</big> : <br></label>
        <input type="text" name="c" /><br><br>
        <input type="submit" name="submit" value="Solution"/>
    </form>
</body>
</html>

<?php 
    if(isset($_POST["submit"])){
        $a=filter_input(INPUT_POST,"a",FILTER_VALIDATE_FLOAT);
        $b=filter_input(INPUT_POST,"b",FILTER_VALIDATE_FLOAT);
        $c=filter_input(INPUT_POST,"c",FILTER_VALIDATE_FLOAT);
        if(empty($a) AND empty($b) AND empty($c)){
            echo" <font color=red>Un Erreur lors de la saisie des informations";
        }
        else{
            echo"<br>Votre équation est la suivante : {$a}x<sup>2</sup>+{$b}x+{$c}<br><br>";
            if ($a==0 and $b==0 and $c==0)
                echo"La solution de L'équation est l'ensemble C puisque (a=0 et b=0 et c=0)";
            else if ($a==0 and $b==0){
                echo"L'équation n'a pas de solution d'ou sa solution est l'ensemble <font color=red> vide <font color=black>puisque (a=0 et b=0 et c!=0)";
            }
            else if($a==0){
                echo"Le premier element de l'équation est nul <font color=red>(a=0)<font color=black> alors l'équation admet une seule solution qui est : <br>";
                $solution=(-$c)/$b;
                echo"x<sub>1</sub> = {$solution}<br>";
            }
            else {
                $delta=pow($b,2)-(4*$a*$c);
                echo"La valeur du descriminant est la suivante <font color=green>delta = {$delta}<font color=black><br>";
                if($delta==0){
                    echo"L'équation admet une seule solution puisque delta est <font color=red>nul<font color=black><br>";
                    $solution=(-$b)/(2*$a);
                    echo"x<sub>1</sub> = {$solution}";
                }
                else if($delta>0){
                    echo"L'équation admet deux solutions réeles puisque delta est <font color=red>positif<font color=black><br>";
                    $solution1=((-$b)-sqrt($delta))/(2*$a);
                    $solution2=((-$b)+sqrt($delta))/(2*$a);
                    echo"x<sub>1</sub> = {$solution1}<br>";
                    echo"x<sub>2</sub> = {$solution2}<br>";
                }
                else{
                    echo"L'équation admet deux solutions imaginaires puisque delta est <font color=red>negatif<font color=black><br>";
                    $solution1_r=(-$b)/(2*$a);
                    $solution1_i=(-sqrt(abs($delta)))/(2*$a);
                    $solution2_i=(sqrt(abs($delta)))/(2*$a);
                    $bb=-$b;
                    $a2=2*$a;
                    $deltaa=-$delta;
                    echo"x<sub>1</sub> = ({$bb}-√{$deltaa})/{$a2} = {$solution1_r} + {$solution1_i}i<br>";
                    echo"x<sub>2</sub> = ({$bb}+√{$deltaa})/{$a2} = {$solution1_r} + {$solution2_i}i<br>";

                }
            }

        }
    }

?>
