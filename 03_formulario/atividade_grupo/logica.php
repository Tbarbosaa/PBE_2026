<?php

$nome = $_POST ['nome'];
$plano = $_POST ['plano'];
$altura = $_POST ['altura'];
$peso = $_POST ['peso'];
$total_mensalidade = 0;

function Planos ($plano,$total_mensalidade){
    if ($plano == 'plus'){
        $total_mensalidade == 220;
        return $total_mensalidade = 220 ;
    }
    elseif ($plano == 'premium'){
        $total_mensalidade == 160;
        return $total_mensalidade = 160;
    }
    else{
        $total_mensalidade == 90;
        return $total_mensalidade = 90;
    }
    
}

function Imc($altura, $peso){
    $imc = ($altura * $altura)/ $peso;
    return $imc;
}

$resultado =  Planos ($plano,$total_mensalidade);
$resultado_imc = Imc ($altura,$peso);

require_once "view_relatorio.php";
?>