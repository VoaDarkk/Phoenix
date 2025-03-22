document.addEventListener("DOMContentLoaded", function() {
    const calendario = document.querySelector(".calendario");

    // Criando os dias dinamicamente
    for (let i = 1; i <= 31; i++) {
        let diaElemento = document.createElement("div");
        diaElemento.classList.add("dia");
        diaElemento.textContent = i;
        diaElemento.onclick = function() {
            mostrarFormulario(i);
        };
        calendario.appendChild(diaElemento);
    }

    // Exibe as sessões quando a página carrega
    exibirSessoes();
});

// Função para abrir o formulário
function abrirFormulario() {
    document.getElementById("formulario").style.display = "block";
}

// Função para fechar o formulário
function fecharFormulario() {
    document.getElementById("formulario").style.display = "none";
}

// Função para salvar a sessão de estudo
function salvarSessao() {
    const materia = document.getElementById("materiaSelecionada").value;
    const tipo = document.getElementById("tipo").value;
    const horarioInicio = document.getElementById("horario-inicio").value;
    const horarioFim = document.getElementById("horario-fim").value;
    const dia = document.getElementById("dia").value;

    // Verifica se todos os campos foram preenchidos
    if (!materia || !tipo || !horarioInicio || !horarioFim || !dia) {
        document.getElementById("mensagem-erro").style.display = "block";
        document.getElementById("mensagem-sucesso").style.display = "none";
        return;
    }

    // Cria o objeto de sessão
    const sessao = {
        materia,
        tipo,
        horarioInicio,
        horarioFim,
        dia
    };

    // Recupera as sessões salvas no LocalStorage
    let sessoes = JSON.parse(localStorage.getItem('sessoes')) || [];
    sessoes.push(sessao);

    // Salva novamente as sessões no LocalStorage
    localStorage.setItem('sessoes', JSON.stringify(sessoes));

    // Exibe mensagem de sucesso
    document.getElementById("mensagem-sucesso").style.display = "block";
    document.getElementById("mensagem-erro").style.display = "none";

    // Atualiza a lista de sessões exibidas
    exibirSessoes();
}

// Função para exibir as sessões salvas
function exibirSessoes() {
    const sessoes = JSON.parse(localStorage.getItem('sessoes')) || [];
    const listaSessoes = document.getElementById("sessao-lista");

    // Limpa a lista de sessões antes de reexibir
    listaSessoes.innerHTML = "";

    sessoes.forEach(sessao => {
        const divSessao = document.createElement("div");
        divSessao.classList.add("sessao-item");

        divSessao.innerHTML = `
            <div class="materia">${sessao.materia}</div>
            <div class="horario">${sessao.horarioInicio} - ${sessao.horarioFim}</div>
            <div class="tipo">${sessao.tipo}</div>
        `;

        listaSessoes.appendChild(divSessao);
    });
}

// Função para exibir o calendário
function mostrarCalendario() {
    document.getElementById("calendario").style.display = "block";
    exibirCalendario(new Date().getMonth(), new Date().getFullYear());
}

// Função para exibir os dias do mês no calendário
function exibirCalendario(mes, ano) {
    const diasContainer = document.getElementById("dias");
    const mesAno = document.getElementById("mes-ano");
    diasContainer.innerHTML = ""; // Limpar dias anteriores
    mesAno.textContent = `${getMesNome(mes)} ${ano}`;

    const primeiroDiaDoMes = new Date(ano, mes, 1).getDay(); // Dia da semana do 1º dia do mês
    const diasNoMes = new Date(ano, mes + 1, 0).getDate(); // Total de dias no mês

    // Adicionar espaços vazios para os dias anteriores ao 1º dia do mês
    for (let i = 0; i < primeiroDiaDoMes; i++) {
        let diaVazio = document.createElement("div");
        diasContainer.appendChild(diaVazio);
    }

    // Adicionar os dias do mês
    for (let i = 1; i <= diasNoMes; i++) {
        let diaElemento = document.createElement("div");
        diaElemento.classList.add("dia");
        diaElemento.textContent = i;
        diaElemento.onclick = function() {
            selecionarDia(i);
        };
        diasContainer.appendChild(diaElemento);
    }
}

// Função para alterar o mês
function alterarMes(inc) {
    let mesAtual = parseInt(document.getElementById("mes-ano").textContent.split(" ")[0]);
    let anoAtual = new Date().getFullYear();
    mesAtual += inc;
    if (mesAtual < 0) {
        mesAtual = 11;
        anoAtual--;
    } else if (mesAtual > 11) {
        mesAtual = 0;
        anoAtual++;
    }
    exibirCalendario(mesAtual, anoAtual);
}

// Função para obter o nome do mês
function getMesNome(mes) {
    const meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
    return meses[mes];
}

// Função para selecionar o dia
function selecionarDia(dia) {
    const diaSelecionado = `${dia}/${new Date().getMonth() + 1}/${new Date().getFullYear()}`;
    document.getElementById("dia").value = diaSelecionado;
    fecharCalendario();
}

// Fechar o calendário
function fecharCalendario() {
    document.getElementById("calendario").style.display = "none";
}
function salvarPlano() {
    const notas = document.getElementById('notas').value;
    const inicio = document.getElementById('inicio').value;
    const fim = document.getElementById('fim').value;
    const materia = document.getElementById('materia').value;

    if (notas && inicio && fim && materia) {
        const plano = {
            materia: materia,
            inicio: inicio,
            fim: fim,
            notas: notas
        };

        // Armazena o plano no localStorage
        let planos = JSON.parse(localStorage.getItem('planosDeEstudo')) || [];
        planos.push(plano);
        localStorage.setItem('planosDeEstudo', JSON.stringify(planos));

        alert("Plano de estudos salvo com sucesso!");
    } else {
        alert("Por favor, preencha todos os campos!");
    }
}
