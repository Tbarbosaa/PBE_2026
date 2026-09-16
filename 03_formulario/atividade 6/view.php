<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Atividade 5</title>
    </head>
    <body>
        <h2 sytle = "text-align: center">Compra de Ingressos</h2>
        <form action = "logica.php" method = "POST">
        <label for = ""> Nome : </label>
        <input type = "text" name = "nome">
        <br><br>
        <label for = ""> Filme : </label>
        <input type = "text" name = "filme">
        <br><br>
        <label for = ""> Quantidade de ingressos : </label>
        <input type = "number" name = "qtd_ingressos">
        <br><br>
        
        <input type = "radio" name = "tipo" value = "inteira">
        <label for = ""> Inteira </label>
        <br>
        <input type = "radio" name = "tipo" value = "meia">
        <label for = ""> Meia </label>
        <br><br>
        <button type = "submit"> Enviar </button>
        <br>
        <button type = "reset"> Limpar </button>
         </form>
    </body>
</html>