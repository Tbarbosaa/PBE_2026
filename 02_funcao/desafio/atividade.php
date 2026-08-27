<?php

require_once "funcao.php";

 $resultado = calcularPedido ("Mouse",150,30, 10, 25);
 echo "Produto: ". $resultado ["nome"]. "<br>";
 echo "Preço unitário: ". $resultado ["preco"]. "<br>";
 echo "Quantidade : ". $resultado ["qtd"]. "<br>";
 echo "Subtotal : ". $resultado ["subtotal"]. "<br>";
 echo "Valor do desconto : ". $resultado ["valordesconto"]. "<br>";
 echo  "Valor do imposto : ". $resultado ["valorimposto"]. "<br>";
 echo "Valor final : ". $resultado ["precofinal"]. "<br>";
 echo "Valor unitário final : ". $resultado ["valorunifinal"]. "<br>";

?>