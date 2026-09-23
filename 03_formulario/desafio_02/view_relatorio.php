<!DOCTYPE html>
<html lang="pt_br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Relatório</title>
    </head>
    <body>
        <h1 style = "text-align: center"> Resumo de Compras</h1>
        <p> <b> Cliente: </b> <?= $nome ?> </p>
        
        <table border = "1" width = "100%">
            <tr>
                <th> Produto </th>
                <th> Preço </th>
                <th> Quantidade </th>
                <th> Subtotal </th>
            </tr>
        <?php foreach ($produtos as $produto): ?>
                <tr>
                    <td style = "text-align: center"> <?= $produto ['Nome']; ?> </td>
                    <td style = "text-align: center"> <?= $produto ['Preco'];?>  </td>
                    <td style = "text-align: center"> <?= $produto ['Qtd'];?>  </td>
                    <td style = "text-align: center"> <?= $produto ['Subtotal'];?>  </td>
                </tr>
           <?php  endforeach ?>
        </table>
        <br>  
        <p> <b> Total da compra : </b> <?= $total ?> </p>
        <p> <b> Obrigado pela sua compra </p> </b>

        <?php if ($total >= 500): ?>
            <h2> Você ganhou um desdonto </h2>
            <p> <b> Valor do desconto : </b> <?= $desconto ?> </p>
            <h2> Total final: <?= $total_final ?></h2>
        <?php endif ?>

    </body>
</html>