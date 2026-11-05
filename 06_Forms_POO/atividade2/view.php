<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Atividade 2</title>
    </head>
    <body>
        <form action = "logica.php" method = "POST">
            <label for = ""> Nome do Aluno: </label>
            <input type = "text" name ="nome" required>
            <br>
            <label for = ""> Turma : </label>
            <select name = "turma" required>
                <option value = "1_ids"> 1º IDS </option>
                <option value = "2_ids"> 2º IDS </option>
                <option value = "3_ids"> 3º IDS </option>
            </select>
            <br>
            <label for = ""> Primeira Nota: </label>
            <input type = "number" name ="nota1" required>
            <br>
            <label for = ""> Segunda Nota: </label>
            <input type = "number" name ="nota2" required>
            <br>
            <label for = ""> Terceira Nota: </label>
            <input type = "number" name ="nota3" required>
            <br>
            <label for = ""> Faltas: </label>
            <input type = "number" name ="falta" min = "0" max = "80" required>
            <button type ="submit"> Gerar Média </button>
        </form>
    </body>
</html>