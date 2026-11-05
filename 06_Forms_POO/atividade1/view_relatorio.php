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
        <p> Preco:  <?= $produto1->getPreco()?> </p>
        <p> Total de valor em estoque :  <?= number_format ($produto1->calcularTotal (), 2, ",", ".") ?> </p>
        <p> Valor do desconto  :  <?= number_format($produto1->calcularDesconto (), 2, ",", ".") ?> </p>
        <p> Valor com  desconto  :  <?= number_format($produto1->calcularTotalcomDesconto (), 2, ",", ".") ?> </p>
        <p> Situação do estoque  :  <?= $produto1->verificarEstoque () ?> </p>
        <?php if ($qtd > 10): ?>
            <p> <b> Você ganhou um desconto de 10% </b> </p>        
        <?php else: ?>
           <p>  <b> Você não recebeu nenhum tipo de desconto </b> </p>
        <?php endif ?>
        <a href = "view.php"> Cadastar outro
    </body>
</html>