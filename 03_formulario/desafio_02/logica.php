<?php

$nome = $_POST ['nome'];

$nome_produto1 = $_POST ['nome_produto1'];
$preco_produto1 = $_POST ['preco_produto1'];
$qtd_produto1 = $_POST ['qtd_produto1'];

$nome_produto2 = $_POST ['nome_produto2'];
$preco_produto2 = $_POST ['preco_produto2'];
$qtd_produto2 = $_POST ['qtd_produto2'];

$nome_produto3 = $_POST ['nome_produto3'];
$preco_produto3 = $_POST ['preco_produto3'];
$qtd_produto3 = $_POST ['qtd_produto3'];

$subtotal_1 = $preco_produto1 * $qtd_produto1 ;
$subtotal_2 = $preco_produto2 * $qtd_produto2 ;
$subtotal_3 = $preco_produto3 * $qtd_produto3 ;
$total = $subtotal_1 + $subtotal_2 + $subtotal_3 ;

$produtos = [
    ["Nome" => $nome_produto1, "Preco" => $preco_produto1, "Qtd" => $qtd_produto1, "Subtotal" => $subtotal_1],
    ["Nome" => $nome_produto2, "Preco" => $preco_produto2, "Qtd" => $qtd_produto2, "Subtotal" => $subtotal_2],
    ["Nome" => $nome_produto3, "Preco" => $preco_produto3, "Qtd" => $qtd_produto3, "Subtotal" => $subtotal_3],
];

$desconto = 0;

if ($total >= 500){
    $desconto = $total * (10/100);
    $total_final = $total - $desconto;
}


require_once "view_relatorio.php";
?>