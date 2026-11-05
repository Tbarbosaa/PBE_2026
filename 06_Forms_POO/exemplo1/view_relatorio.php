<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Relatório de Form e POO</title>
    </head>
    <body>
        <h1> Produto Cadastrado </h1>
        <p> Nome: <?= $produto1->getNome()?> </p>
        <p> Quantidade: <?= $produto1->getQtd()?> </p>
        <p> Preco:  R$ <?= $produto1->getPreco()?>,00 </p>
        <p> Total de valo em estoque :  R$<?= $produto1->calcularTotal () ?>,00 </p>

        <a href = "view.php"> Cadastar outro
    </body>
</html>