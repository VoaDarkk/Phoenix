<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cronograma de Estudos</title>
    <link rel="stylesheet" href="estilo.css">
    <script src="script.js" defer></script>
</head>
<body>

    <div class="mes"><h1>Março</h1></div>
    <div class="calendario">
        <div class="dia-semana">Dom</div>
        <div class="dia-semana">Seg</div>
        <div class="dia-semana">Ter</div>
        <div class="dia-semana">Qua</div>
        <div class="dia-semana">Qui</div>
        <div class="dia-semana">Sex</div>
        <div class="dia-semana">Sáb</div>
    </div>
    
    <div class="sidebar">
        <div class="sidebar-header">
            <div class="planejativo"> <h2>Planejativo</h2></div>
        </div>
        <ul class="menu">
            <li><a href="index.php"><i class="icon">🏠</i> Início</a></li>
            <li><a href="plano_semanal.php"><i class="icon">📅</i> Plano Semanal</a></li>
            <li><a href="sessao.php"><i class="icon">📑</i> Sessões</a></li>
            <li class="dropdown">
                <a href="exibir_plano.php"><i class="icon">📖</i> Planos Salvos</a>
                
            </li>
            <li><a href="materia.php"><i class="icon">📝</i> Questões </a></li>
            <li><a href="meu_plano.php"><i class="icon">📋</i> Meu Plano</a></li>
        </ul>
    </div>

    <div id="formulario" class="formulario">
        <h2>Adicionar Sessão de Estudo</h2>

        <label for="materia">Matéria:</label>
        <div class="roleta-container" onmousedown="iniciarArrasto(event)" onmouseup="pararArrasto()" onmousemove="arrastar(event)">
            <ul id="roleta-materias">
                <li onclick="selecionarMateria(this)">Matemática</li>
                <li onclick="selecionarMateria(this)">Português</li>
                <li onclick="selecionarMateria(this)">Física</li>
                <li onclick="selecionarMateria(this)">Biologia</li>
                <li onclick="selecionarMateria(this)">Geografia</li>
                <li onclick="selecionarMateria(this)">História</li>
                <li onclick="selecionarMateria(this)">Educação Física</li>
            </ul>
        </div>
        
        <input type="hidden" id="materiaSelecionada">

        <label for="tipo">Tipo de Estudo:</label>
        <select id="tipo">
            <option value="Leitura">Leitura</option>
            <option value="Exercícios">Exercícios</option>
            <option value="Revisão">Anotação</option>
        </select>

        <label for="horario">Horário de Início:</label>
        <input type="time" id="horario-inicio" required>

        <label for="horario">Horário de Término:</label>
        <input type="time" id="horario-fim" required>

        <label for="dia">Dia da Sessão:</label>
        <select id="dia">
            <option value="domingo">Domingo</option>
            <option value="segunda">Segunda-feira</option>
            <option value="terca">Terça-feira</option>
            <option value="quarta">Quarta-feira</option>
            <option value="quinta">Quinta-feira</option>
            <option value="sexta">Sexta-feira</option>
            <option value="sabado">Sábado</option>
        </select>

        <div class="botoes-container">
            <button onclick="salvarSessao()">Salvar</button>
            <button onclick="fecharFormulario()">Cancelar</button>
        </div>

        <div id="mensagem-sucesso" style="display:none; color: green; margin-top: 10px;">
            Sessão salva com sucesso!
        </div>
        <div id="mensagem-erro" style="display:none; color: red; margin-top: 10px;">
            Por favor, preencha todos os campos corretamente.
        </div>
    </div>

    <script>
        // Função para obter o número de dias do mês
        function obterDiasNoMes(mes, ano) {
            return new Date(ano, mes, 0).getDate();  // Retorna o número de dias no mês
        }

        let mesAtual = 3; // Março
        let anoAtual = 2025; // Ano corrente
        let diasNoMes = obterDiasNoMes(mesAtual, anoAtual);

        document.addEventListener("DOMContentLoaded", function() {
            const calendario = document.querySelector(".calendario");

            // Verifica se o calendário já foi gerado para evitar duplicação
            if (calendario.hasChildNodes()) return;

            // Criando os dias dinamicamente
            for (let i = 1; i <= diasNoMes; i++) {
                let diaElemento = document.createElement("div");
                diaElemento.classList.add("dia");
                diaElemento.textContent = i;
                diaElemento.onclick = function() {
                    mostrarFormulario(i);
                };
                calendario.appendChild(diaElemento);
            }
        });

        function mostrarFormulario(dia) {
            document.getElementById("formulario").style.display = "block";
            document.getElementById("formulario").setAttribute("data-dia", dia);
        }

        function fecharFormulario() {
            document.getElementById("formulario").style.display = "none";
        }

        function salvarSessao() {
            let dia = document.getElementById("formulario").getAttribute("data-dia");
            let materia = document.getElementById("materiaSelecionada").value;
            let tipo = document.getElementById("tipo").value;
            let horarioInicio = document.getElementById("horario-inicio").value;
            let horarioFim = document.getElementById("horario-fim").value;

            if (!materia || !horarioInicio || !horarioFim || !dia) {
                // Exibe a mensagem de erro se algum campo não estiver preenchido
                document.getElementById("mensagem-erro").style.display = "block";
                document.getElementById("mensagem-sucesso").style.display = "none";
                return;
            }

            // Criar um objeto para a sessão
            const sessao = {
                materia,
                tipo,
                horarioInicio,
                horarioFim,
                dia
            };

            // Recupera as sessões salvas (se existirem)
            let sessoes = JSON.parse(localStorage.getItem('sessoes')) || [];

            // Adiciona a nova sessão ao array
            sessoes.push(sessao);

            // Salva as sessões no localStorage
            localStorage.setItem('sessoes', JSON.stringify(sessoes));

            // Exibe a mensagem de sucesso
            document.getElementById("mensagem-sucesso").style.display = "block";
            document.getElementById("mensagem-erro").style.display = "none";

            // Atualiza a lista de sessões exibidas
            exibirSessoes();
        }

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

        // Exibe as sessões quando a página carrega
        document.addEventListener("DOMContentLoaded", exibirSessoes);

        // Função para arrasto da roleta
        let startY = 0;
        let isDragging = false;
        let offsetY = 0;
        let roleta = document.getElementById("roleta-materias");
        let materiaSelecionada = document.getElementById("materiaSelecionada");

        function iniciarArrasto(event) {
            isDragging = true;
            startY = event.clientY || event.touches[0].clientY;
        }

        function pararArrasto() {
            isDragging = false;
            ajustarPosicao(); // Alinha a roleta
        }

        function arrastar(event) {
            if (!isDragging) return;

            const currentY = event.clientY || event.touches[0].clientY;
            const deltaY = currentY - startY;

            offsetY += deltaY;
            roleta.style.transform = `translateY(${offsetY}px)`;
            startY = currentY;
        }

        function ajustarPosicao() {
            let itens = document.querySelectorAll("#roleta-materias li");
            let alturaItem = itens[0].offsetHeight;
            let index = Math.round(-offsetY / alturaItem);

            if (index < 0) index = 0;
            if (index >= itens.length) index = itens.length - 1;

            offsetY = -index * alturaItem;
            roleta.style.transform = `translateY(${offsetY}px)`;

            // Remove seleção anterior
            itens.forEach(item => item.classList.remove("selecionado"));

            // Destaca a matéria central
            itens[index].classList.add("selecionado");
            materiaSelecionada.value = itens[index].innerText;
        }

        // Seleciona matéria ao clicar
        function selecionarMateria(element) {
            let itens = document.querySelectorAll("#roleta-materias li");
            
            // Remove seleção anterior
            itens.forEach(item => item.classList.remove("selecionado"));

            // Adiciona a classe de selecionado no item clicado
            element.classList.add("selecionado");
            materiaSelecionada.value = element.innerText;
        }
    </script>

</body>
</html>
