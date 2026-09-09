<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 1</title>
</head>
<body>
    <h2 sytle = "text-align: center">Cadastro de Usuários </h2>
    <form action = "logica.php" method = "POST">
        <label for = ""> Nome: </label>
        <input type = "text" name = "nome">
        <br>
        <label for = ""> Email : </label>
        <input type = "text" name = "email">
        <br>
        <label for = ""> Senha : </label>
        <input type = "password" name = "senha">
        <br><br>
        <button type = "submit"> Enviar</button>
        <button type = "reset"> Limpar </button>
    </form>
</body>
</html>