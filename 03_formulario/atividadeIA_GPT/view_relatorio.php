<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Cadastro realizado</title>

    <style>

        body {
            font-family: Arial, sans-serif;
            background-color: #111;
            color: white;

            display: flex;
            justify-content: center;
            align-items: center;

            min-height: 100vh;
        }

        .resultado {
            background-color: #1c1c1c;
            padding: 35px;
            width: 450px;
            border-radius: 15px;
            text-align: center;
        }

        h1 {
            color: #9cff00;
            margin-bottom: 20px;
        }

        .dados {
            text-align: left;
            line-height: 1.8;
            margin-top: 20px;
        }

        .botao {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 20px;

            background-color: #9cff00;
            color: #111;

            text-decoration: none;
            border-radius: 7px;
            font-weight: bold;
        }

    </style>

</head>

<body>

    <div class="resultado">

        <h1>Cadastro realizado!</h1>

        <p>Bem-vindo à FitZone, <?php echo $nome; ?>!</p>

        <div class="dados">

            <strong>Nome:</strong>
            <?php echo $nome; ?>
            <br>

            <strong>E-mail:</strong>
            <?php echo $email; ?>
            <br>

            <strong>Idade:</strong>
            <?php echo $idade; ?> anos
            <br>

            <strong>Objetivo:</strong>
            <?php echo $objetivo; ?>
            <br>

            <strong>Nível:</strong>
            <?php echo $nivel; ?>
            <br>

            <strong>Treinos por semana:</strong>
            <?php echo $frequencia; ?> dias

        </div>

        <a href="view.php" class="botao">
            Voltar para o cadastro
        </a>

    </div>

</body>

</html>