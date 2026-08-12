<?php

$idades = [ 10, 7, 19, 45, 22, 39, 3, 13];
$soma = 0;
$media = 0;
$qtd18 = 0;

foreach ($idades as $idade){
     echo "Idade: ". $idade;
     echo "<br>";
    $soma = $soma + $idade;
    if ($idade >= 18){
        $qtd18 = $qtd18 + 1 ;
    }

}

$media = $soma / count($idades);
echo "A média da sala é: ". $media."<br>";
echo "A quantidade de maiores de idade é: ". $qtd18;


?>