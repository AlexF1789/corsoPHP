<?php

    $a=1;
    $b=2;
    $c=1;

    if($a==0 && $b==0 && $c==0) {
        echo "l'equazione è indeterminata <br>";
    } else if($a==0 and $b==0) {
        echo "l'equazione è impossibile <br>"; 
    }else if($a==0){
        echo "l'equazione è di primo grado <br>x=".-$c/$b;
    }else if($b==0){
        if($a*$c>0)
            echo "l'equazione ha due soluzioni complesse";
        else{
            $x=(-$c/$a)**0.5;
            echo "le soluzioni sono <br>x=$x<br>x=".-$x;
        }
    }else if($c==0){
        $x=-$b/$a;
        echo "le soluzioni sono <br>x=0<br>x=$x";
    } else {

        // finita la gestione dei casi critici => gestiamo i casi
        // normali in cui i termini non sono uguali a zero

        $delta = $b**2 - 4*$a*$c;

        if($delta < 0) {
            echo "l'equazione ha due radici complesse<br>";
        } else if($delta == 0) {
            $x = -$b/(2*$a);
            echo "l'equazione ha una radice complessa e una radice x=$x<br>";
        } else {
            $x1 = (-$b - $delta**0.5)/(2*$a);
            $x2 = (-$b + $delta**0.5)/(2*$a);

            echo "l'equazione ha due radici reali<br>x1=$x1<br>x2=$x2";
        }

    }

?>