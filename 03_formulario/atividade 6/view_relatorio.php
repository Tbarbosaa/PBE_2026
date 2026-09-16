<!DOCTYPE html>
<html lang="pt_br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Relatório</title>
    </head>
    <body>
        <h1 style = "text-align: center"> Compra de Ingressos</h1>
        <p> <b> Nome: </b> <?= $nome ?> </p>
        <p> <b> Filme: </b> <?= $filme ?> </p>
        <p> <b> Quantidade de Ingressos: </b> <?= $qtd_ingressos ?> </p>
        <p> <b> Tipo de Ingresso:  </b> <?= $tipo ?> </p>
        <p> <b> Valor total: </b> <?= $total ?> </p>

        <?php if ($qtd_ingressos >= 10): ?>
            <h2> Você recebeu um desconto de 10% </h2>

       <?php endif ?>
    </body>
</html>