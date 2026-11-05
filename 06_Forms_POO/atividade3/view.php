<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagamento</title>
</head>
<body>
    <h1>Gerar Holerite</h1>
    <form action="logica.php" method="POST">
        <label>Nome do Funcionário:</label><br>
        <input type="text" name="nome">
        <br><br>
        <label>Cargo:</label><br>
        <select name="cargo">
            <option value="">Selecione</option>
            <option value="auxiliar">Auxiliar</option>
            <option value="técnico">Técnico</option>
            <option value="analista">Analista</option>
        </select>
        <br><br>
            <label> Horas Extras no Mês :</label><br>
            <input type="number" name="horas_extras" min="0">
            <br><br>
            <label>Utiliza o Vale-Transporte?</label><br>
            <input type="radio" name="vale_transporte" value="sim">
            <label> Sim </label>
            <input type="radio" name="vale_transporte" value="não">
            <label> Não </label>
            <br><br>
            <button type="submit"> Gerar Holerite  </button>
    </form>
</body>
</html>