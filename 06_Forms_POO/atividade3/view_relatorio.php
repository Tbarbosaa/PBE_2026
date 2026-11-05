<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Holerite - Resultado</title>
    </head>
    <body>
        <h2>Holerite</h2>
        <p>Funcionário: <?= ($funcionario->getNome()) ?></p>
        <p>Cargo: <?= ($funcionario->getCargo()) ?></p>
        <table border = 1>
            <tr>
                <th>Descrição</th>
                 <th>Proventos</th>
                <th>Descontos</th>
            </tr>
            <tr>
                <td>Salário base</td>
                <td>R$ <?= number_format($funcionario->getSalarioBase(), 2, ',', '.') ?></td>
                <td>-</td>
            </tr>
            <tr>
                <td>Horas extras (<?= $funcionario->getHorasExtras() ?>h)</td>
                <td>R$ <?= number_format($funcionario->calcularHorasExtras(), 2, ',', '.') ?></td>
                <td>-</td>
            </tr>
            <tr>
                <td>INSS (<?= $funcionario->calcularPercentualINSS() ?>%)</td>
                <td>-</td>
                <td>R$ <?= $funcionario->calcularINSS() ?></td>
            </tr>
            <tr>
                <td>Vale-transporte (<?= $funcionario->getValeTransporte() ?>)</td>
                <td>-</td>
                <td>R$ <?= $funcionario->calcularValeTransporte()?></td>
            </tr>
        </table>
        <br>
        <h3>Salário Bruto: R$ <?= number_format($funcionario->calcularSalarioBruto(), 2, ',', '.') ?></h3>
        <h2>Salário Líquido: R$ <?= number_format($funcionario->calcularSalarioLiquido(), 2, ',', '.') ?></h2>
        <br>
        <a href="view.php">Gerar outro holerite</a>
    </body>
</html>