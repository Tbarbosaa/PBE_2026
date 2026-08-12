<?php

$funcionarios = [
    ["Nome" => "Tobias", "Cargo" => "Conta peça", "salario" => 500],
    ["Nome" => "Lucas", "Cargo" => "Reciclador", "salario" => 800],
    ["Nome" => "Pedro", "Cargo" => "Mata galinha", "salario" => 1000],
    ["Nome" => "Enzo", "Cargo" => "Din do pai", "salario" => 2000],
    ["Nome" => "Caua", "Cargo" => "Chapeiro", "salario" => 700],
];

$salario_total = 0;
$qtd_funcio = 0;

foreach ($funcionarios as $funcionario){
    echo "Funcionário:  ". $funcionario ["Nome"]. "<br>" ."  Cargo: ". $funcionario ["Cargo"] . "<br>".
    " Salario: " . $funcionario ["salario"].  "<br>";
    echo "--------------------------------------------<br>";

    $salario_total = $salario_total + $funcionario ["salario"];
    $qtd_funcio = $qtd_funcio + 1 ;
    
}
 echo "O salário de todos os funcionários é:  ". $salario_total. "<br>";
 echo " A quantidade de funcionários é:  ". $qtd_funcio;






?>