<?php

    function SelectionSort(array &$vettore, bool $per_valore=false) {
        if($per_valore) {
            $copia = $vettore;
            ordinaRiferimento($copia);

            return $copia;
        } else {
            ordinaRiferimento($vettore);
        }
    }

    function ordinaRiferimento(array &$a) {
        for($i=0;$i<count($a)-1;$i++) {
            $min = $i;

            for($j=$i+1;$j<count($a);$j++) {
                if($a[$j] < $a[$min]) {
                    $min = $j;
                }
            }

            if($min != $i) {
                $temp = $a[$i];
                $a[$i] = $a[$min];
                $a[$min] = $temp;
            }
        }
    }

?>