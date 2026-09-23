<?php

$nome = $_POST ['nome'];
$plano = $_POST ['plano'];
$novo = TRUE;
 $total_mensalidade = 0;

function Planos ($plano,$total_mensalidade){
    if ($plano == "plus"){
        $total_mensalidade = 220;
    }
    elseif ($plano == "premium"){
        $total_mensalidade = 160;
    }
    else{
        $total_mensalidade = 90;
    }
    return $total_mensalidade;
}

function Alunonovos($novo, $total_mensalidade){
    if ($novo == TRUE){
        $desconto = $total_mensalidade * (15/100);
        $total_mensalidade_desconto = $total_mensalidade - $desconto;
    }
    return $total_mensalidade_desconto;
}

require_once "view_relatorio.php";
$resultado =  Planos ($plano,$total_mensalidade);
$resultado_aluno =  Alunonovos ($novo, $total_mensalidade);
?>