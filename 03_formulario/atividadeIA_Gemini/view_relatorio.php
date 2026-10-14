<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Realizado</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #121826;
            color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .card {
            background-color: #1a2332;
            border: 1px solid #2f0fd2ff;
            padding: 30px;
            border-radius: 12px;
            max-width: 500px;
            width: 100%;
        }
        h2 { color: #1020d0ff; }
        ul { list-style: none; padding: 0; }
        li { padding: 8px 0; border-bottom: 1px solid #2d3748; }
        a {
            display: inline-block;
            margin-top: 20px;
            color: #0f00e3ff;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="card">
        <h2>💪 Cadastro realizado com sucesso!</h2>
        <p>Seja bem-vindo(a) à academia, <strong><?php echo htmlspecialchars($nome); ?></strong>!</p>
        
        <h3>Resumo da Ficha:</h3>
        <ul>
            <li><strong>E-mail:</strong> <?php echo htmlspecialchars($email); ?></li>
            <li><strong>Telefone:</strong> <?php echo htmlspecialchars($telefone); ?></li>
            <li><strong>Data de Nascimento:</strong> <?php echo htmlspecialchars($data_nascimento); ?></li>
            <li><strong>Gênero:</strong> <?php echo htmlspecialchars($genero); ?></li>
            <li><strong>Objetivo:</strong> <?php echo htmlspecialchars($objetivo); ?></li>
            <li><strong>Nível de Experiência:</strong> <?php echo htmlspecialchars($nivel_experiencia); ?></li>
            <li><strong>Frequência Semanal:</strong> <?php echo htmlspecialchars($frequencia); ?> dias</li>
        </ul>

        <a href="view.php">← Voltar ao formulário</a>
    </div>

</body>
</html>