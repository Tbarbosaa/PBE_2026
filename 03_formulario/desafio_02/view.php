<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Desafio 02</title>
    </head>
    <body>
        <h1> Carinho de compras </h1>
        <br><br>
        <h2> Dados do Cliente</h2> 
        <br>
        <form action = "logica.php" method = "POST">
        <label for = ""> Nome do Cliente : </label>
        <input type = "text" name = "nome">
        <br><br>
        <h2> Produto 1 </h2>
        <label for = ""> Nome do Produto : </label>
        <input type = "text" name = "nome_produto1">
        <br><br>
        <label for = ""> Preço : </label>
        <input type = "number" name = "preco_produto1">
        <br><br>
        <label for = ""> Quantidade : </label>
        <input type = "number" name = "qtd_produto1">
        <br><br>
        <h2> Produto 2 </h2>
        <label for = ""> Nome do Produto : </label>
        <input type = "text" name = "nome_produto2">
        <br><br>
        <label for = ""> Preço : </label>
        <input type = "number" name = "preco_produto2">
        <br><br>
        <label for = ""> Quantidade : </label>
        <input type = "number" name = "qtd_produto2">
        <br><br>
        <h2> Produto 3 </h2>
        <label for = ""> Nome do Produto : </label>
        <input type = "text" name = "nome_produto3">
        <br><br>
        <label for = ""> Preço : </label>
        <input type = "number" name = "preco_produto3">
        <br><br>
        <label for = ""> Quantidade : </label>
        <input type = "number" name = "qtd_produto3">
        <br><br>
        <button type = "submit"> Enviar </button>
        <button type = "reset"> Limpar </button>
         </form>
    </body>
</html>