<!DOCTYPE html>
<html lang="pt-BR" class="h-full bg-slate-950">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - GymFit Club</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts: Inter e Montserrat -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        display: ['Montserrat', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            50: '#3214dcff',
                            500: '#2f08cbff',
                            600: '#6100e9ff',
                            400: '#1144e8ff',
                            glow: '#071ca2ff'
                        }
                    }
                }
            }
        }
    </script>
    <style>
        .glow-effect {
            box-shadow: 0 0 25px -5px rgba(21, 135, 235, 0.88);
        }
        /* Personalização dos rádios e seletores */
        input[type="radio"]:checked + label {
            border-color: #6c0ae4ff;
            background-color: rgba(106, 7, 255, 0.16);
            color: #ffffffff;
        }
    </style>
</head>
<body class="min-h-full flex items-center justify-center p-4 sm:p-6 lg:p-8 font-sans text-slate-100 antialiased selection:bg-brand-500 selection:text-slate-950">

    <div class="w-full max-w-2xl bg-slate-900/90 border border-slate-800/80 rounded-2xl shadow-2xl backdrop-blur-xl p-6 sm:p-10 glow-effect relative overflow-hidden">
        
        <!-- Elementos Decorações de Fundo -->
        <div class="absolute -top-24 -right-24 w-48 h-48 bg-brand-500/10 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute -bottom-24 -left-24 w-48 h-48 bg-brand-500/10 rounded-full blur-3xl pointer-events-none"></div>

        <!-- Cabecalho do Card -->
        <div class="text-center mb-8 relative z-10">
            <div class="inline-flex items-center justify-center w-14 h-14 rounded-2xl bg-brand-500/10 border border-brand-500/20 mb-3 text-brand-400">
                <i data-lucide="dumbell" class="w-7 h-7"></i>
            </div>
            <h1 class="text-2xl sm:text-3xl font-extrabold font-display tracking-tight text-white uppercase">
                Faça Parte da <span class="text-brand-400">GymFit</span>
            </h1>
            <p class="text-slate-400 text-sm mt-1">Preencha seus dados para criar sua ficha de treino inicial</p>
        </div>

        <!-- FORMULARIO PRONTO PARA PHP -->
        <form action="cadastro.php" method="POST" id="registerForm" class="space-y-6 relative z-10">

            <!-- Seção 1: Dados Pessoais -->
            <div class="space-y-4">
                <h2 class="text-xs uppercase font-bold tracking-wider text-brand-400 border-b border-slate-800 pb-2 flex items-center gap-2">
                    <i data-lucide="user" class="w-4 h-4"></i> Informações Pessoais
                </h2>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <!-- Nome Completo -->
                    <div class="sm:col-span-2">
                        <label for="nome" class="block text-xs font-medium text-slate-300 mb-1">Nome Completo *</label>
                        <div class="relative">
                            <input type="text" id="nome" name="nome" required placeholder="Ex: Rodrigo Silva"
                                class="w-full bg-slate-950 border border-slate-800 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:border-brand-500 focus:ring-1 focus:ring-brand-500 transition-colors text-slate-100 placeholder-slate-600">
                        </div>
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-xs font-medium text-slate-300 mb-1">E-mail *</label>
                        <input type="email" id="email" name="email" required placeholder="rodrigo@email.com"
                            class="w-full bg-slate-950 border border-slate-800 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:border-brand-500 focus:ring-1 focus:ring-brand-500 transition-colors text-slate-100 placeholder-slate-600">
                    </div>

                    <!-- Senha -->
                    <div>
                        <label for="senha" class="block text-xs font-medium text-slate-300 mb-1">Senha de Acesso *</label>
                        <input type="password" id="senha" name="senha" required placeholder="••••••••" minlength="6"
                            class="w-full bg-slate-950 border border-slate-800 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:border-brand-500 focus:ring-1 focus:ring-brand-500 transition-colors text-slate-100 placeholder-slate-600">
                    </div>

                    <!-- Telefone/WhatsApp -->
                    <div>
                        <label for="telefone" class="block text-xs font-medium text-slate-300 mb-1">Telefone / WhatsApp *</label>
                        <input type="tel" id="telefone" name="telefone" required placeholder="(11) 99999-9999"
                            class="w-full bg-slate-950 border border-slate-800 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:border-brand-500 focus:ring-1 focus:ring-brand-500 transition-colors text-slate-100 placeholder-slate-600">
                    </div>

                    <!-- Data de Nascimento -->
                    <div>
                        <label for="data_nascimento" class="block text-xs font-medium text-slate-300 mb-1">Data de Nascimento *</label>
                        <input type="date" id="data_nascimento" name="data_nascimento" required
                            class="w-full bg-slate-950 border border-slate-800 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:border-brand-500 focus:ring-1 focus:ring-brand-500 transition-colors text-slate-100 color-scheme-dark">
                    </div>

                    <!-- Gênero -->
                    <div class="sm:col-span-2">
                        <label class="block text-xs font-medium text-slate-300 mb-2">Gênero *</label>
                        <div class="grid grid-cols-3 gap-3">
                            <div>
                                <input type="radio" id="genero_m" name="genero" value="Masculino" class="hidden peer" required>
                                <label for="genero_m" class="flex items-center justify-center py-2 px-3 border border-slate-800 bg-slate-950 rounded-lg text-xs font-medium cursor-pointer transition-all hover:border-slate-700 text-slate-300">
                                    Masculino
                                </label>
                            </div>
                            <div>
                                <input type="radio" id="genero_f" name="genero" value="Feminino" class="hidden peer">
                                <label for="genero_f" class="flex items-center justify-center py-2 px-3 border border-slate-800 bg-slate-950 rounded-lg text-xs font-medium cursor-pointer transition-all hover:border-slate-700 text-slate-300">
                                    Feminino
                                </label>
                            </div>
                            <div>
                                <input type="radio" id="genero_outro" name="genero" value="Outro" class="hidden peer">
                                <label for="genero_outro" class="flex items-center justify-center py-2 px-3 border border-slate-800 bg-slate-950 rounded-lg text-xs font-medium cursor-pointer transition-all hover:border-slate-700 text-slate-300">
                                    Outro
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Seção 2: Perfil Fitness -->
            <div class="space-y-4 pt-2">
                <h2 class="text-xs uppercase font-bold tracking-wider text-brand-400 border-b border-slate-800 pb-2 flex items-center gap-2">
                    <i data-lucide="activity" class="w-4 h-4"></i> Perfil de Treino
                </h2>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <!-- Objetivo Principal -->
                    <div>
                        <label for="objetivo" class="block text-xs font-medium text-slate-300 mb-1">Objetivo Principal *</label>
                        <select id="objetivo" name="objetivo" required
                            class="w-full bg-slate-950 border border-slate-800 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:border-brand-500 focus:ring-1 focus:ring-brand-500 transition-colors text-slate-100">
                            <option value="" disabled selected>Selecione um objetivo</option>
                            <option value="Emagrecimento">Emagrecimento / Definição</option>
                            <option value="Ganho Muscular">Hipertrofia / Massa Muscular</option>
                            <option value="Condicionamento">Condicionamento Físico</option>
                            <option value="Saúde">Saúde & Qualidade de Vida</option>
                            <option value="Reabilitação">Reabilitação Físico-Motora</option>
                        </select>
                    </div>

                    <!-- Nível de Experiência -->
                    <div>
                        <label for="nivel_experiencia" class="block text-xs font-medium text-slate-300 mb-1">Nível de Experiência *</label>
                        <select id="nivel_experiencia" name="nivel_experiencia" required
                            class="w-full bg-slate-950 border border-slate-800 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:border-brand-500 focus:ring-1 focus:ring-brand-500 transition-colors text-slate-100">
                            <option value="" disabled selected>Escolha seu nível</option>
                            <option value="Iniciante">Iniciante (Nunca treinou / parado há meses)</option>
                            <option value="Intermediário">Intermediário (Treina com regularidade)</option>
                            <option value="Avançado">Avançado (Treina há anos sem parar)</option>
                        </select>
                    </div>

                    <!-- Frequência Semanal -->
                    <div class="sm:col-span-2">
                        <label for="frequencia" class="block text-xs font-medium text-slate-300 mb-1">Frequência Semanal Desejada *</label>
                        <select id="frequencia" name="frequencia" required
                            class="w-full bg-slate-950 border border-slate-800 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:border-brand-500 focus:ring-1 focus:ring-brand-500 transition-colors text-slate-100">
                            <option value="" disabled selected>Dias por semana</option>
                            <option value="2x por semana">2 dias por semana</option>
                            <option value="3x por semana">3 dias por semana</option>
                            <option value="4x por semana">4 dias por semana</option>
                            <option value="5x por semana">5 dias por semana</option>
                            <option value="5x ou mais">5 dias ou mais por semana</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Termos e Aceite -->
            <div class="flex items-center gap-2 pt-2">
                <input type="checkbox" id="termos" name="termos" required
                    class="rounded border-slate-800 bg-slate-950 text-brand-500 focus:ring-brand-500 focus:ring-offset-slate-900">
                <label for="termos" class="text-xs text-slate-400">
                    Li e concordo com os <a href="#" class="text-brand-400 hover:underline">termos de uso</a> e regulamento da academia.
                </label>
            </div>

            <!-- Botão de Cadastro -->
            <button type="submit"
                class="w-full bg-brand-500 hover:bg-brand-600 text-slate-950 font-bold font-display py-3 px-6 rounded-lg shadow-lg hover:shadow-brand-500/20 transition-all transform active:scale-[0.99] flex items-center justify-center gap-2 uppercase tracking-wide">
                <span>Concluir Cadastro</span>
                <i data-lucide="arrow-right" class="w-5 h-5"></i>
            </button>
        </form>

        <!-- Link para login -->
        <p class="text-center text-xs text-slate-500 mt-6">
            Já possui uma conta? <a href="#" class="text-brand-400 font-medium hover:underline">Fazer login</a>
        </p>
    </div>

    <!-- Inicialização dos Ícones Lucide -->
    <script>
        lucide.createIcons();
    </script>
</body>
</html>