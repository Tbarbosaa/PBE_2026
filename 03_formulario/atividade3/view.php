<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 3</title>
</head>
<body>
    <h2 sytle = "text-align: center">Calculadora </h2>
    <form action = "logica.php" method = "POST">
        <label for = ""> Primeiro  Numero: </label>
        <input type = "number" name = "primeironumero">
        <br><br>
        <label for = ""> Segundo  Numero: </label>
        <input type = "number" name = "segundonumero">
        <br><br>
        <select name = "operacao">
            <option value = "+"> Soma (+)</option>
            <option value = "-"> Subtração (-)</option>
            <option value = "x"> Multiplicação (x)</option>
            <option value = "/"> Divisão (/)</option>
        </select>
        <button type = "submit"> Enviar</button>
        <button type = "reset"> Limpar </button>
    </form>
</body>
</html>