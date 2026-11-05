<?php

require_once "produto.php";

$nome = $_POST ['nome'];
$qtd = $_POST['qtd'];
$preco = $_POST ['preco'];

$produto1 = new Produto ($nome, $qtd, $preco);

require_once "view_relatorio.php";

?>