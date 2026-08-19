<?php


function Calculartotal ($preco, $qtd,$desconto){
    $soma = ($preco * $qtd);
    $precofinal = $soma - ($soma *($desconto/100));
    return $precofinal;

}




$resultado = Calculartotal(10,5,10);
echo "Macarrão:  ". $resultado." reais";
echo "<br>";
$resultado = Calculartotal(30,7,15);
echo "Celular:  ". $resultado. " reais";
?>