<?php

function analisarNumero ($num){
    $dobro = $num * 2;
    $triplo = $num *3;
    $quadrado = $num * $num;
    if ($num >= 0){
        $situacao = "Positivo";
    }
    else {
        $situacao = "Negativo";
    }

    return [
        "Número" => $num,
        "Dobro" => $dobro,
        "Triplo" => $triplo,
        "Quadrado" => $quadrado,
        "Situação" => $situacao
    ];
}
$num = -10;
$exibir = analisarNumero ($num);
echo "O número é: ".$exibir["Número"];
echo "<br>";
echo "O dobro é: ".$exibir["Dobro"];
echo "<br>";
echo "O triplo é: ".$exibir["Triplo"];
echo "<br>";
echo "O quadrado do número é: ".$exibir["Quadrado"];
echo "<br>";
echo "Ele é ". $exibir["Situação"];
?>