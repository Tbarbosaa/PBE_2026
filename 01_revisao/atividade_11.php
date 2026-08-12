<?php

$numeros = [10, 15, 20, 25, 22, 12, 33, 53, 2, 70];
$maior = $numeros [0];

foreach ( $numeros as $num){
     echo "Números: ". $num;
     echo "<br>";
     if ($num > $maior){
        $maior = $num;
     }
    }

echo "O maior número da lista é:  ". $maior;
?>