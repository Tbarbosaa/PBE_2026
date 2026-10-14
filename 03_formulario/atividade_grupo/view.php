<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Desafio 02</title>       
    </head>
    <body style = "background-color: #0c2c53; color: white; font-family: Trebuchet MS">
        <div style="display: flex; justify-content: center;">
            <img width = "30%" style = "image-align: center" src= "https://mail.google.com/mail/u/0?ui=2&ik=8b44e12302&attid=0.1&permmsgid=msg-f:1877143867301855362&th=1a0cf466dad48082&view=fimg&fur=ip&permmsgid=msg-f:1877143867301855362&sz=s0-l75-ft&attbid=ANGjdJ8zwciGx2Q4LtXgGnU_cRCBLL7Xh3oZ7YaiHN-XTLZi7i87qrmVIbOfGnbVIfhlpLIlMOXx17FRnCbD2nVCoSURfc76uBszxIJfRrct1OSxaPmUoRSWOGzEEK4&disp=emb&realattid=ii_muedf0bd0&zw">       
        </div>
        <h1 style = "text-align: center"> Bem-vindo a GYM 10! </h1>
        <h2 style = "text-align: center"> Cadastro </h2>
        <br>
        <br>
        <form action = "logica.php" method = "POST" style = "text-align: center">
            <input type = "text" name = "nome" placeholder = "Seu nome" required>
            <br><br>
            <input type = "email" name = "email" placeholder = "Seu Email" required>
            <br><br>
            <input type = "text" name = "cpf" placeholder = "000.000.000-00" required>
            <br><br>
            <input type = "password" name = "senha" placeholder = "Sua Senha" required>
            <br><br>
            <input type = "number" name = "altura" placeholder = "Seu Peso" step ="0.1" required>
            <br><br>
            <input type = "number" name = "peso" placeholder = "Sua ALtura" step ="0.1" required>
            <br><br>
            <input type = "radio" name = "plano" value = "plus">
            <label for = ""> Plus (R$ 220,00) </label>
            <br>
            <input type = "radio" name = "plano" value = "premium">
            <label for = ""> Premium (R$ 160,00) </label>
            <br>
            <input type = "radio" name = "plano" value = "basico">
            <label for = ""> Básico (R$ 90,00) </label>
            <br><br>

            <button  style="background-color: #FF6B01; color: white; padding: 8px 16px; border: none; border-radius: 5px; cursor: pointer;font-size: 15px; font-family: Trebuchet MS" type = "submit"> Cadastrar </button>
            <button  style="background-color: #FF6B01; color: white; padding: 8px 16px; border: none; border-radius: 5px; cursor: pointer;font-size: 15px; font-family: Trebuchet MS" type = "reset"> Limpar </button>
        </form>
        <br><br>
    </body>