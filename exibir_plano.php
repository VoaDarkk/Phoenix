<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pyra - Exibir Plano de Estudos</title>
    <link rel="stylesheet" href="estilo.css">
    <script src="script.js" defer></script>
    <style>
        body {
            background-color: #800020;
            color: white;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .header {
            text-align: center;
            padding: 10px;
            background-color: #283593;
            font-size: 28px;
            font-weight: bold;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 20px;
        }
        .plano-container {
            background-color: #283593;
            width: 80%;
            padding: 20px;
            border-radius: 10px;
        }
        .plano-container h2 {
            text-align: center;
        }
        .plano-item {
            background-color: #3f51b5;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 10px;
        }
        .nav-buttons {
            text-align: center;
            margin-top: 20px;
        }
        .nav-buttons a {
            padding: 10px 20px;
            background-color: #800020; /* Cor desejada */
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin: 0 10px;
            font-size: 18px;
        }
        .nav-buttons a:hover {
            background-color: #b71c1c; /* Tom mais claro de vermelho bordô */
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Pyra - Meus Planos de Estudo</h1>
    </div>

    <div class="container">
        <div class="plano-container">
            <h2>Plano de Estudos Salvo</h2>
            <div id="plano-exibido">
                <!-- Os planos de estudo serão exibidos aqui -->
            </div>
        </div>
    </div>

    <div class="nav-buttons">
        <a href="index.php">Voltar ao Menu</a> <!-- Link para o menu -->
        <a href="cronograma.php">Cronograma</a> <!-- Link para o cronograma -->
    </div>

    <script>
        // Função para exibir os planos de estudo salvos
        function exibirPlanos() {
    const planosSalvos = JSON.parse(localStorage.getItem('planosDeEstudo')) || [];

    const planoContainer = document.getElementById('plano-exibido');
    planoContainer.innerHTML = ''; // Limpa a área de exibição

    if (planosSalvos.length > 0) {
        planosSalvos.forEach(plano => {
            const planoDiv = document.createElement('div');
            planoDiv.classList.add('plano-item');
            planoDiv.innerHTML = `
                <strong>Matéria:</strong> ${plano.materia} <br>
                <strong>Hora de Início:</strong> ${plano.inicio} <br>
                <strong>Hora de Término:</strong> ${plano.fim} <br>
                <strong>Anotações:</strong> ${plano.notas}
            `;
            planoContainer.appendChild(planoDiv);
        });
    } else {
        planoContainer.innerHTML = '<p>Nenhum plano de estudo salvo.</p>';
    }
}

// Garantir que a função seja chamada ao carregar a página
document.addEventListener("DOMContentLoaded", exibirPlanos);


        // Chama a função para exibir os planos ao carregar a página
        window.onload = exibirPlanos;
    </script>
</body>
</html>
