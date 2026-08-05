<?php

$numeros = [5, 10, 15, 20, 25, 30];
$soma = 0;

foreach ($numeros as $num) {
    echo $num ."<br>";
    $soma = $soma + $num;

}
echo "A soma do vetor do é: ". $soma;

?>