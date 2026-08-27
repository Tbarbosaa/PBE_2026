<?php

function calcularPedido ($nome, $preco, $qtd, $desconto = 0 ,$imposto = 0){
    $subtotal = $preco * $qtd;
    $valor_desconto = $subtotal * ($desconto / 100);
    $valor_comdesconto = $subtotal - $valor_desconto;
    $valorimposto = $valor_comdesconto * ($imposto / 100);
    $valorfinal = $valor_comdesconto + $valorimposto;
    $valor_uni_final = $valorfinal / $qtd;

    return [
        "nome" => $nome,
        "preco" => $preco,
        "qtd" => $qtd,
        "subtotal" => $subtotal,
        "valordesconto" => $valor_desconto,
        "valorimposto" => $valorimposto,
        "precofinal" => $valorfinal,
        "valorunifinal" => $valor_uni_final
    ];
}




?>