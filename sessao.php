<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suas Sessões de Estudo</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

<header>
    <h2>Suas Sessões de Estudo</h2>
</header>

<!-- Botões de Navegação -->
<div class="botoes-navegacao">
    <button onclick="window.location.href='index.php'">Voltar ao Início</button>
    <button onclick="window.location.href='cronograma.php'">Ir para o Cronograma</button>
</div>

<!-- Área de Exibição das Sessões -->
<div id="sessao-lista" class="sessao-exibicao">
    <!-- Sessões serão carregadas aqui pelo JavaScript -->
</div>

<script>
// Função para carregar as sessões do LocalStorage
function exibirSessoes() {
    const sessoes = JSON.parse(localStorage.getItem('sessoes')) || [];
    const listaSessoes = document.getElementById("sessao-lista");

    listaSessoes.innerHTML = ""; // Limpa a lista antes de exibir novamente

    if (sessoes.length === 0) {
        listaSessoes.innerHTML = "<p style='text-align:center; color: #333;'>Nenhuma sessão encontrada.</p>";
        return;
    }

    sessoes.forEach((sessao, index) => {
        const divSessao = document.createElement("div");
        divSessao.classList.add("sessao-item");

        divSessao.innerHTML = `
            <div><strong>Dia:</strong> ${sessao.dia}</div>  <!-- Exibindo o dia -->
            <div><strong>Matéria:</strong> ${sessao.materia}</div>
            <div><strong>Horário:</strong> ${sessao.horarioInicio} - ${sessao.horarioFim}</div>
            <div><strong>Tipo:</strong> ${sessao.tipo}</div>
            <button class="excluir-btn" onclick="excluirSessao(${index})">Excluir</button>
        `;

        listaSessoes.appendChild(divSessao);
    });
}

// Função para excluir uma sessão
function excluirSessao(index) {
    let sessoes = JSON.parse(localStorage.getItem('sessoes')) || [];

    if (confirm("Tem certeza que deseja excluir esta sessão?")) {
        sessoes.splice(index, 1); // Remove a sessão pelo índice
        localStorage.setItem('sessoes', JSON.stringify(sessoes)); // Atualiza o LocalStorage
        exibirSessoes(); // Atualiza a exibição
    }
}

// Carrega as sessões ao abrir a página
document.addEventListener("DOMContentLoaded", exibirSessoes);
</script>

<style>
/* Estilos Globais */
body {
    margin: 0;
    padding: 0;
    background: linear-gradient(85deg, #022968, #00203F);
    font-family: Arial, sans-serif;
}

/* Cabeçalho */
header {
    width: 100%;
    height: 100px;
    background: linear-gradient(85deg, #022968, #00203F);
    text-align: center;
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    font-weight: bold;
}

/* Botões de navegação */
.botoes-navegacao {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin: 20px 0;
}

.botoes-navegacao button {
    padding: 10px 20px;
    border: none;
    background-color: #800020;
    color: white;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1em;
    transition: 0.3s;
}

.botoes-navegacao button:hover {
    background-color: darkred;
}

/* Sessão de exibição */
.sessao-exibicao {
    background-color: #fff;
    padding: 15px;
    margin: 20px auto;
    width: 80%;
    max-width: 800px;
    border-radius: 8px;
    box-shadow: 0 4px 8px red;
}

/* Estilização das sessões */
.sessao-item {
    display: flex;
    justify-content: space-between;
    background-color: #f9f9f9;
    padding: 10px;
    margin: 8px 0;
    border-radius: 6px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    font-size: 0.9em;
}

/* Estilo do botão de excluir */
.excluir-btn {
    background-color: red;
    color: white;
    border: none;
    padding: 5px 10px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.excluir-btn:hover {
    background-color: darkred;
}
</style>

</body>
</html>
