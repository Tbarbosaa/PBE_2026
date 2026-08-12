<?php

$produtos = [
    ["Nome" => "Computador", "Quantidade" => 10],
    ["Nome" => "Celular", "Quantidade" => 7],
    ["Nome" => "Mouse", "Quantidade" => 0],
    ["Nome" => "Pen drive", "Quantidade" => 12],
    ["Nome" => "Headset", "Quantidade" => 0]
];

$qtd_cadastro = 0;
$qtd_semestoque = 0;

foreach ($produtos as $produto){

    $qtd_cadastro = $qtd_cadastro + 1;
    echo "Produto: ". $produto ["Nome"]. "<br>";
    
    if ($produto ["Quantidade"] <= 0){
        echo $produto ["Quantidade"]." Sem estoque". "<br>";
        $qtd_semestoque = $qtd_semestoque + 1;

    }
    else {
        
        echo "Disponíveis no estoque: ". $produto ["Quantidade"]. "<br>";
    }
    echo "-----------------<br>";
}

echo "Produtos sem estoque: ". $qtd_semestoque. "<br>";
echo "Produtos cadastrados : ". $qtd_cadastro;

?>