<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo Forumulário</title>
</head>
<body>
    <h2 style = "color:darkred; font-family: Comic Sans MS, cursive;;"> Inscrição em Evento </h2>
    <form action = "logica.php" method = "POST" style = "background: #f3e5f5; padding: 15px; border-radius: 8px; width: 350px;">
        <label for = "nome"> Nome: </label>
        <br>
        <input type = "text" name = "nome" style = "width = 100%; margin-bottom: 10px; color:purple; font-family: Arial"> 
        <br><br>
        <label for = "ingresso"> Tipo de Ingresso: </label>
        <br>
        <select name = "ingresso" style ="width =100%; margin-bottom: 10px;color:purple; font-family: Arial">
            <option value = "profissional"> Profissional</option>
            <option value = "estudante"> Estudante</option>
            <option value = "vip"> Vip</option>
        </select>
        <br>
        <label for = "data"> Data do Evento: </label>
        <br>
        <input type = "date" name = "data" style = "color:purple; font-family: Arial">
        <br>
        <label for = "chegada"> Hora de Chegada: </label>
        <br>
        <input type = "time" name = "chegada" style = ""> 
        <br><br>
        <button type = "submit" style = "background:purple; color:white; padding: 5px"> Inscrever- se </button>
        
    </form>
</body>
</html>