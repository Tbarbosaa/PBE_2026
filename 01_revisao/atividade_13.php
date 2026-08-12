<?php

$clietes= [
    "Nome" => "Tobias",
    "CPF" => "442432413412",
    "Telefone" => "199191919",
    "Endereço" => " Andreazza"
];

foreach ($clietes as $cliete => $informacao){
    echo $cliete, ": ". $informacao;
    echo "<br>";
}



?>