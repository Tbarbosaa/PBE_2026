<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Atividade 5</title>
    </head>
    <body>
        <h2 sytle = "text-align: center">Calcular IMC </h2>
        <form action = "logica.php" method = "POST">
        <label for = ""> Nome : </label>
        <input type = "text" name = "nome">
        <br><br>
        <label for = ""> Peso em KG: </label>
        <input type = "number" name = "peso" step = "0.1">
        <br><br>
        <label for = ""> Altura em metros: </label>
        <input type = "number" name = "altura" step = "0.01">
        <br><br>
        <button type = "submit"> Calcular Média </button>
        <br><br>
        <button type = "reset"> Limpar </button>
        </form>
    </body>
</html>