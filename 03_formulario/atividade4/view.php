<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Atividade 4</title>
    </head>
    <body>
        <h2 sytle = "text-align: center">Calcular Notas </h2>
        <form action = "logica.php" method = "POST">
        <label for = ""> Nome Aluno: </label>
        <input type = "text" name = "nome">
        <br><br>
        <label for = ""> Primeira nota: </label>
        <input type = "number" name = "primeiranota" step = "0.01">
        <br><br>
        <label for = ""> Segunda nota: </label>
        <input type = "number" name = "segundanota" step = "0.01">
        <br><br>
        <label for = ""> Terceira nota: </label>
        <input type = "number" name = "terceiranota" step = "0.01">
        <br><br>
        <button type = "submit"> Calcular Média </button>
        <br><br>
        <button type = "reset"> Limpar </button>
        </form>
    </body>
</html>