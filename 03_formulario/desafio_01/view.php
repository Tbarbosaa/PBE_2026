<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Desafio Salário</title>
    </head>
    <body>
        <h2 sytle = "text-align: center">Calcular Salário </h2>
        <form action = "logica.php" method = "POST">
            <label for = ""> Nome Funcionário: </label>
            <input type = "text" name = "nome">
            <br><br>
            <label for = ""> Salário Bruto: </label>
            <input type = "number" name = "salariobruto">
            <br><br>
            <label for = ""> Horas extras: </label>
            <input type = "number" name = "horas">
            <br><br>
            <label for = ""> Benefícios: </label>
            <input type = "number" name = "beneficio">
            <br><br>
            <label for = ""> Descontos </label>
            <input type = "number" name = "descontos">
            <br><br>
            <button type = "submit"> Enviar </button>
            <button type = "reset"> Limpar </button>
        </form>
    </body>
</html>