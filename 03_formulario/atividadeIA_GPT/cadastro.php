<?php

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Recebe os dados do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $idade = $_POST["idade"];
    $objetivo = $_POST["objetivo"];
    $nivel = $_POST["nivel"];
    $frequencia = $_POST["frequencia"];

    // Verifica se os campos principais estão preenchidos
    if (
        empty($nome) ||
        empty($email) ||
        empty($senha) ||
        empty($idade) ||
        empty($objetivo) ||
        empty($nivel) ||
        empty($frequencia)
    ) {
        echo "Por favor, preencha todos os campos.";
        exit;
    }

    // Envia os dados para a página de relatório
    include "view_relatorio.php";

} else {

    echo "Acesso inválido.";
    exit;

}

?>