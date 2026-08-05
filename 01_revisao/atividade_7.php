<?php

$soma = 0 ;
$qtd = 0 ;
$alunos = [
    "Tobias" => 8.5,
    "Lucas" => 6.7,
    "Enzo" => 9.6,
    "Cauã" => 7.5,
    "Pedro" => 8.0
];

foreach ($alunos as $aluno => $nota){
    echo "O aluno ". $aluno . " teve uma nota de ". $nota. "<br>";
    $soma = $soma + $nota;
    $qtd++;
}
$media = $soma / $qtd;
echo "A média da sala é ". $media."<br>";   
    
?>