<?php

$produtos = [
    ["Nome" => "Computador", "Preço" => 190],
    ["Nome" => "Celular", "Preço" => 70],
    ["Nome" => "Mouse", "Preço" => 50],
    ["Nome" => "Pen drive", "Preço" => 120]
];

foreach ($produtos as $produto ){
    echo "Produto: ". $produto ["Nome"]. "<br>". "Preço: ". $produto ["Preço"]. "<br>";
    echo "-----------------<br>";

}

echo "Produtos abaixo de 100: "."<br>"; ;
foreach ($produtos as $produto){
    if ($produto ["Preço"] < 100){
        echo $produto ["Nome"]. "  o seu valor é de:  ".$produto ["Preço"];
        echo "<br>";
}
}



?>