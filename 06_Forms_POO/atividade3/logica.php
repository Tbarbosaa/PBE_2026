<?php
require_once 'Funcionario.php';

$nome = $_POST['nome'];
$cargo = $_POST['cargo'];
$horasExtras = $_POST['horas_extras'];
$valeTransporte = $_POST['vale_transporte'];

$funcionario = new Funcionario($nome, $cargo, $horasExtras, $valeTransporte);


require_once 'view_relatorio.php';

?>