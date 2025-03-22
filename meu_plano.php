<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pyra - Meu Plano de Estudos</title>
    <link rel="stylesheet" href="estilo.css">
    <script src="script.js" defer></script>
    <style>
        body {
            background-color: #800020; /* Azul escuro */
            color: white;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
        }
        .header {
            text-align: center;
            padding: 10px;
            background-color: #283593; /* Tom mais claro de azul */
            font-size: 28px;
            font-weight: bold;
        }
        .header h1 {
            margin: 0;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: calc(100% - 150px); /* Deixa espaço para o cabeçalho e botões */
        }
        .plano-container {
            background-color: #283593; /* Tom mais claro de azul */
            width: 80%;
            height: 70%;
            display: flex;
            padding: 20px;
            border-radius: 10px;
        }
        .caixa-texto {
            width: 75%;
            height: 100%;
            background-color: #3f51b5; /* Tom intermediário de azul */
            padding: 20px;
            border-radius: 8px;
            overflow-y: hidden; /* Remove a barra de rolagem */
            outline: none;

        }
        .caixa-texto textarea {
            width: 100%;
            height: 90%;
            border: none; /* Borda invisível */
            background-color: transparent;
            color: black; /* Cor da fonte preta */
            font-size: 20px; /* Aumentar o tamanho da fonte */
            padding: 10px;
            resize: none; /* Impede que o usuário redimensione a caixa de texto */
            outline: none;

        }
        .horarios-container {
            width: 25%;
            margin-left: 20px;
            text-align: center;
            color: white;
        }
        .horarios-container label,
        .horarios-container input,
        .horarios-container select {
            margin: 10px 0;
        }
        .horarios-container input,
        .horarios-container select {
            width: 80%;
            padding: 8px;
            font-size: 14px;
        }
        .horarios-container button {
            margin-top: 10px; /* Ajusta o espaçamento */
            padding: 10px 20px;
            background-color: #f44336; /* Vermelho bordô */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .horarios-container button:hover {
            background-color: #d32f2f;
        }
        .hora-atual {
            margin-top: 20px;
            font-size: 18px;
        }
        .nav-buttons {
            text-align: center;
            margin-top: 20px; /* Ajusta o espaçamento dos botões de navegação */
        }
        .nav-buttons a {
            padding: 10px 20px;
            background-color: #2196f3;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin: 0 10px;
            font-size: 18px;
        }
        .nav-buttons a:hover {
            background-color: #1976d2;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Pyra</h1>
    </div>

    <div class="container">
        <div class="plano-container">
            <div class="caixa-texto">
                <h2>Crie seu plano</h2>
                <textarea id="notas" placeholder="Escreva seu plano de estudos aqui..."></textarea>
            </div>
            <div class="horarios-container">
                <h2>Selecione os Horários</h2>
                <label for="inicio">Hora de Início:</label>
                <input type="time" id="inicio" required>
                <label for="fim">Hora de Término:</label>
                <input type="time" id="fim" required>
                
                <button onclick="salvarPlano()">Salvar Plano</button> <!-- Troca de lugar com o botão de seleção de matéria -->

                <h2>Selecione a Matéria</h2>
                <select id="materia">
                    <option value="matematica">Matemática</option>
                    <option value="portugues">Português</option>
                    <option value="fisica">Física</option>
                    <option value="biologia">Biologia</option>
                    <option value="geografia">Geografia</option>
                    <option value="historia">História</option>
                    <option value="educacao_fisica">Educação Física</option>
                </select>

                <div id="hora-atual" class="hora-atual"></div>
            </div>
        </div>
    </div>

    <div class="nav-buttons">
        <a href="cronograma.php">Cronograma</a>
        <a href="index.php">Início</a>
    </div>

    <script>
        // Função para salvar o plano de estudos (caso seja necessário)
        function salvarPlano() {
    const notas = document.getElementById('notas').value;
    const inicio = document.getElementById('inicio').value;
    const fim = document.getElementById('fim').value;
    const materia = document.getElementById('materia').value;

    if (notas && inicio && fim && materia) {
        const novoPlano = { materia, inicio, fim, notas };

        // Recuperar planos salvos ou criar um array vazio
        let planosSalvos = JSON.parse(localStorage.getItem('planosDeEstudo')) || [];

        // Adicionar novo plano
        planosSalvos.push(novoPlano);

        // Salvar no localStorage
        localStorage.setItem('planosDeEstudo', JSON.stringify(planosSalvos));

        alert("Plano de estudos salvo com sucesso!");
    } else {
        alert("Por favor, preencha todos os campos!");
    }
}


        // Função para exibir a hora atual
        function exibirHoraAtual() {
            const horaAtual = new Date();
            const horas = String(horaAtual.getHours()).padStart(2, '0');
            const minutos = String(horaAtual.getMinutes()).padStart(2, '0');
            document.getElementById('hora-atual').textContent = `Hora atual: ${horas}:${minutos}`;
        }

        // Exibe a hora atual a cada segundo
        setInterval(exibirHoraAtual, 1000);
    </script>
</body>
</html>
