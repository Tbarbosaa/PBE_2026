<?php

$nome = $_POST ['nome'];
$filme = $_POST ['filme'];
$qtd_ingressos = $_POST ['qtd_ingressos'];
$tipo = $_POST ['tipo'];

if ($tipo == "inteira"){
    $total = $qtd_ingressos * 10;
}

else {
    $total = $qtd_ingressos * 5;
}

if ($qtd_ingressos >= 10){
    $desconto = $total * (10/100);
    $total = $total - $desconto ;
}
require_once "view_relatorio.php";
?>