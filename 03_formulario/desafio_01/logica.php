<?php

$nome = $_POST ['nome'];
$salariobruto = $_POST ['salariobruto'];
$hora_extra = $_POST ['horas'];
$beneficio = $_POST ['beneficio'];
$descontos = $_POST ['descontos'];

$valor_hora = $salariobruto / 160;
$valor_hora_extra = $valor_hora * 1.5;
$total_horas_extra = $valor_hora_extra * $hora_extra;

$salariobruto_total = $salariobruto + $beneficio + $total_horas_extra;

if ($salariobruto_total >= 5000){
    $imposto = 10;
    $valor_imposto = $salariobruto_total * ($imposto/100);
    $salariobruto_total_imposto = $salariobruto_total - $valor_imposto;
}

elseif ($salariobruto_total >= 3000){
    $imposto = 5;
    $valor_imposto = $salariobruto_total * ($imposto/100);
    $salariobruto_total_imposto = $salariobruto_total - $valor_imposto;
}

else {
    echo "Isento de Imposto de renda!";
}

$salario_liquido = $salariobruto_total_imposto - $descontos ;

if ($salario_liquido >= 4000){
    $status = "Bem remunerado";
}

else {
    $status = "Médio";
}

echo "Nome do Funcionário: ". $nome;
echo "<br>";
echo "Salário Bruto: ". $salariobruto;
echo "<br>";
echo "Salário Bruto com Beneficios e Horas extras: ". $salariobruto_total;
echo "<br>";
echo "Descontos: ". $descontos;
echo "<br>";
echo "Imposto : ". $valor_imposto;
echo "<br>";
echo "Salário liquido: ". $salario_liquido;
echo "<br>";
echo "Status: ". $status;

?>
