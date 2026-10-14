<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - FitZone</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #111;
            color: white;
        }

        .container {
            width: 900px;
            min-height: 550px;
            display: flex;
            background: #1c1c1c;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 0 25px rgba(0, 0, 0, 0.5);
        }

        /* Lado esquerdo */
        .lado-esquerdo {
            width: 40%;
            background: linear-gradient(135deg, #9cff00, #4d8000);
            color: #111;
            padding: 45px 35px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .lado-esquerdo h1 {
            font-size: 42px;
            margin-bottom: 15px;
        }

        .lado-esquerdo p {
            font-size: 17px;
            line-height: 1.5;
        }

        .icone {
            font-size: 60px;
            margin-bottom: 20px;
        }

        /* Formulário */
        .lado-direito {
            width: 60%;
            padding: 35px 45px;
        }

        .lado-direito h2 {
            font-size: 28px;
            margin-bottom: 8px;
        }

        .subtitulo {
            color: #aaa;
            margin-bottom: 25px;
        }

        .formulario {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 18px;
        }

        .campo {
            display: flex;
            flex-direction: column;
        }

        .campo-completo {
            grid-column: 1 / 3;
        }

        label {
            margin-bottom: 7px;
            font-size: 14px;
            color: #ddd;
        }

        input,
        select {
            padding: 12px;
            border: 1px solid #444;
            border-radius: 7px;
            background: #292929;
            color: white;
            outline: none;
            font-size: 14px;
        }

        input:focus,
        select:focus {
            border-color: #9cff00;
        }

        select option {
            background: #292929;
        }

        .botao {
            grid-column: 1 / 3;
            margin-top: 5px;
        }

        button {
            width: 100%;
            padding: 14px;
            border: none;
            border-radius: 7px;
            background: #9cff00;
            color: #111;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #7dcc00;
            transform: translateY(-2px);
        }

        .login {
            text-align: center;
            margin-top: 18px;
            color: #aaa;
            font-size: 14px;
        }

        .login a {
            color: #9cff00;
            text-decoration: none;
        }

        /* Responsividade */
        @media (max-width: 750px) {
            .container {
                width: 95%;
                flex-direction: column;
            }

            .lado-esquerdo,
            .lado-direito {
                width: 100%;
            }

            .lado-esquerdo {
                padding: 30px;
                text-align: center;
            }

            .formulario {
                grid-template-columns: 1fr;
            }

            .campo-completo,
            .botao {
                grid-column: 1;
            }
        }
    </style>
</head>

<body>

    <div class="container">

        <!-- Apresentação -->
        <div class="lado-esquerdo">

            <div class="icone">🏋️</div>

            <h1>FitZone</h1>

            <p>
                Crie sua conta e comece sua jornada
                em busca de uma vida mais saudável.
            </p>

        </div>

        <!-- Cadastro -->
        <div class="lado-direito">

            <h2>Crie sua conta</h2>

            <p class="subtitulo">
                Preencha seus dados para começar.
            </p>

            <form class="formulario" action="cadastro.php" method="POST">

                <div class="campo campo-completo">
                    <label for="nome">Nome completo</label>
                    <input 
                        type="text" 
                        id="nome" 
                        name="nome" 
                        placeholder="Digite seu nome"
                        required
                    >
                </div>

                <div class="campo campo-completo">
                    <label for="email">E-mail</label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        placeholder="exemplo@email.com"
                        required
                    >
                </div>

                <div class="campo">
                    <label for="senha">Senha</label>
                    <input 
                        type="password" 
                        id="senha" 
                        name="senha" 
                        placeholder="Digite sua senha"
                        required
                    >
                </div>

                <div class="campo">
                    <label for="idade">Idade</label>
                    <input 
                        type="number" 
                        id="idade" 
                        name="idade" 
                        placeholder="Ex.: 18"
                        min="13"
                        max="100"
                        required
                    >
                </div>

                <div class="campo">
                    <label for="objetivo">Objetivo</label>
                    <select id="objetivo" name="objetivo" required>
                        <option value="">Selecione</option>
                        <option value="ganhar_massa">Ganhar massa muscular</option>
                        <option value="emagrecer">Emagrecer</option>
                        <option value="condicionamento">Melhorar condicionamento</option>
                        <option value="saude">Melhorar a saúde</option>
                        <option value="outro">Outro</option>
                    </select>
                </div>

                <div class="campo">
                    <label for="nivel">Nível de experiência</label>
                    <select id="nivel" name="nivel" required>
                        <option value="">Selecione</option>
                        <option value="iniciante">Iniciante</option>
                        <option value="intermediario">Intermediário</option>
                        <option value="avancado">Avançado</option>
                    </select>
                </div>

                <div class="campo campo-completo">
                    <label for="frequencia">Quantos dias por semana pretende treinar?</label>
                    <select id="frequencia" name="frequencia" required>
                        <option value="">Selecione</option>
                        <option value="1">1 dia</option>
                        <option value="2">2 dias</option>
                        <option value="3">3 dias</option>
                        <option value="4">4 dias</option>
                        <option value="5">5 dias</option>
                        <option value="6">6 dias</option>
                        <option value="7">7 dias</option>
                    </select>
                </div>

                <div class="botao">
                    <button type="submit">
                        Criar minha conta
                    </button>
                </div>

            </form>

            <p class="login">
                Já possui uma conta?
                <a href="login.php">Entrar</a>
            </p>

        </div>

    </div>

</body>
</html>