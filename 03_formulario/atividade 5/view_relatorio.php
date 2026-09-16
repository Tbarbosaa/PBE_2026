<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório</title>
</head>
<body>
    <h1 style = "text-align: center"> Resultado do IMC </h1>
    <p> <b> Nome: </b> <?= $nome ?> </p>
    <p> <b> Peso: </b> <?= $peso ?> </p>
    <p> <b> Altura: </b> <?= $altura ?> </p>
    <p> <b> Resultado do IMC: </b> <?= $imc ?> </p>

    <?php if ($imc >= 30): ?>
        <h2> Obesidade </h2>

    <?php elseif ($imc >= 25 || $imc <=29.9): ?>
        <h2> Sobrepeso </h2>

    <?php elseif ($imc >= 18.5 || $imc <=24.9): ?>
        <h2> Peso ideal</h2>

    <?php else: ?>
        <h2> Abaixo do Peso </h2>

    <?php endif ?>
    </body>
</html>