<!DOCTYPE html>
<html lang="pt_br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Relatório</title>
    </head>
    <body style = "background: #f3e5f5">
        <h2 style = "color:purple"> Resumo da Inscrição </h2>
        <br>
        <p style = "color:purple"> <b> Nome do Participante: </b> <?= $nome ?> </p>
        <p style = "color:purple"> <b> Tipo de Ingresso: </b> <?= $ingresso ?> </p>
        <p style = "color:purple"> <b> Dia do Evento: </b> <?= $data ?> </p>
        <p style = "color:purple"> <b> Horário do Evento: </b> <?= $chegada ?> </p>
    </body>
</html>