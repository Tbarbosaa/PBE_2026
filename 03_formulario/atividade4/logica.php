<?php

$nome = $_POST ['nome'];
$nota1 = $_POST ['primeiranota'];
$nota2 = $_POST ['segundanota'];
$nota3 = $_POST ['terceiranota'];

$media = ($nota1 + $nota2 + $nota3)/3;

if ($media > 10){
    $media = 10;
}
require_once "view_relatorio.php";

?>