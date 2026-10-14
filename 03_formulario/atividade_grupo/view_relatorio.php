<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Relatório</title>
    </head>
    <body style = "background-color: #0c2c53; color: white; text-align:center; font-family: Trebuchet MS">
        <div style="display: flex; justify-content: center;">
            <img width = "27%" style = "image-align: center" src= "https://mail.google.com/mail/u/0?ui=2&ik=8b44e12302&attid=0.1&permmsgid=msg-f:1877143867301855362&th=1a0cf466dad48082&view=fimg&fur=ip&permmsgid=msg-f:1877143867301855362&sz=s0-l75-ft&attbid=ANGjdJ8zwciGx2Q4LtXgGnU_cRCBLL7Xh3oZ7YaiHN-XTLZi7i87qrmVIbOfGnbVIfhlpLIlMOXx17FRnCbD2nVCoSURfc76uBszxIJfRrct1OSxaPmUoRSWOGzEEK4&disp=emb&realattid=ii_muedf0bd0&zw">       
        </div>
        <h1 style = "text-align: center"> Cadastro finalizado!</h1>
        <p style = "font-size: 21px;"> <b> Aluno: </b> <?= $nome ?> </p>
        <p style = "font-size: 21px;"> <b> Plano selecionado: </b> <?= $plano ?> </p>
        <p  style = "font-size: 21px;"> <b> Total de mensalidade: </b> <?= $resultado ?> </p>
        <p  style = "font-size: 21px;"> <b> Seu IMC: </b> <?= $resultado_imc ?> </p>
        <h2> Tudo Pronto para Começar! </h2>

        <button  style="background-color: #FF6B01; color: white; padding: 9px 18px; border: none; border-radius: 5px; cursor: pointer;font-size: 16px; font-family: Trebuchet MS"> Começar </button>
        <button  style="background-color: #FF6B01; color: white; padding: 9px 18px; border: none; border-radius: 5px; cursor: pointer;font-size: 16px; font-family: Trebuchet MS"> Ver Agenda de Treino </button>
        <button  style="background-color: #FF6B01; color: white; padding: 9px 18px; border: none; border-radius: 5px; cursor: pointer;font-size: 16px; font-family: Trebuchet MS"> Personalizar Perfil </button>
    </body>
</html>

       