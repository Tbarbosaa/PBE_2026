<?php
// Exibe os erros no navegador
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Verifica se o formulário foi enviado pelo método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 1. Recebe os dados informados no formulário HTML
    $nome             = $_POST['nome'] ?? '';
    $email            = $_POST['email'] ?? '';
    $senha            = $_POST['senha'] ?? '';
    $telefone         = $_POST['telefone'] ?? '';
    $data_nascimento  = $_POST['data_nascimento'] ?? '';
    $genero           = $_POST['genero'] ?? '';
    $objetivo         = $_POST['objetivo'] ?? '';
    $nivel_experiencia= $_POST['nivel_experiencia'] ?? '';
    $frequencia       = $_POST['frequencia'] ?? '';

    // 2. Validação simples: verifica se os campos obrigatórios estão preenchidos
    if (empty($nome) || empty($email) || empty($senha)) {
        echo "<h3 style='color: red;'>Por favor, preencha todos os campos obrigatórios (Nome, E-mail e Senha)!</h3>";
        echo "<a href='javascript:history.back()'>Voltar ao formulário</a>";
        exit;
    }

    // 3. Inclui a visualização dos dados que está no outro arquivo
    include 'view_relatorio.php';

} else {
    // Caso alguém tente acessar o arquivo cadastro.php diretamente pela URL sem enviar o formulário
    header("Location: index.html");
    exit;
}
?>