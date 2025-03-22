<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cronograma Semanal</title>
    <style>
        /* Estilo geral da página */
        body {
   
    background: linear-gradient(85deg, #022968, #00203F);
   
}
        



header h1 {
    text-align: center;
    font-size: 2.5rem;
    color: white;
}

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            color: white;
        }

        header {
            text-align: center;
            margin-bottom: 30px;
            
        }

        .data-atual {
            font-size: 1.2em;
            margin-bottom: 20px;
            text-align: center;
        }

        .cards {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            color:black;
        }

        .card {
            background-color: #f0f0f0;
            border-radius: 10px;
            padding: 20px;
            width: 48%;
            box-sizing: border-box;
        }

        .card h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .horarios-container {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .horario-item {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .horario-item input[type="time"],
        .horario-item input[type="text"],
        .horario-item textarea {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
            font-size: 1rem;
        }

        .caixa-texto {
            margin-top: 10px;
        }

        button {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .status {
            margin-top: 10px;
            text-align: center;
            padding: 5px;
        }

        .status.nao-marcado {
            background-color: #f8d7da;
            color: #721c24;
        }

        .status.marcado {
            background-color: #d4edda;
            color: #155724;
        }
        .btn-voltar-fixo {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: #721c24;
    color: #fff;
    padding: 10px 15px;
    border-radius: 5px;
    text-decoration: none;
    font-size: 1rem;
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
    transition: background 0.3s ease;
}

        .btn-voltar-fixo:hover {
    background-color: #721c24;
}
.sem {
    
    position: fixed;
    bottom: +80px;
    right: 20px;
    background-color: #721c24;
    color: #fff;
    padding: 10px 15px;
    border-radius: 5px;
    text-decoration: none;
    font-size: 1rem;
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
    transition: background 0.3s ease;
}

  
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Cronograma de Estudos Semanal</h1>
        </header>

        <div class="data-atual">
            <span id="data-atual"></span>
        </div>

        <div class="cards">
            <!-- Segunda-feira -->
            <div class="card" id="segunda">
                <h2>Segunda-feira, <span id="data-segunda"></span></h2>

                <div class="horarios-container" id="horarios-segunda">
                    <div class="horario-item">
                        <input type="time" id="hora-segunda-1" placeholder="Escolha o horário">
                        <input type="text" id="materia-segunda-1" placeholder="Matéria (ex: Matemática)">
                        <input type="text" id="assunto-segunda-1" placeholder="Assunto (ex: Álgebra)">
                        <textarea class="caixa-texto" id="anotacao-segunda-1" placeholder="Anotações..."></textarea>
                    </div>
                    <div class="horario-item">
                        <input type="time" id="hora-segunda-2" placeholder="Escolha o horário">
                        <input type="text" id="materia-segunda-2" placeholder="Matéria (ex: Português)">
                        <input type="text" id="assunto-segunda-2" placeholder="Assunto (ex: Gramática)">
                        <textarea class="caixa-texto" id="anotacao-segunda-2" placeholder="Anotações..."></textarea>
                    </div>
                    <div class="horario-item">
                        <input type="time" id="hora-segunda-3" placeholder="Escolha o horário">
                        <input type="text" id="materia-segunda-3" placeholder="Matéria (ex: Ciências)">
                        <input type="text" id="assunto-segunda-3" placeholder="Assunto (ex: Biologia)">
                        <textarea class="caixa-texto" id="anotacao-segunda-3" placeholder="Anotações..."></textarea>
                    </div>
                    <div class="horario-item">
                        <input type="time" id="hora-segunda-4" placeholder="Escolha o horário">
                        <input type="text" id="materia-segunda-4" placeholder="Matéria (ex: História)">
                        <input type="text" id="assunto-segunda-4" placeholder="Assunto (ex: Idade Média)">
                        <textarea class="caixa-texto" id="anotacao-segunda-4" placeholder="Anotações..."></textarea>
                    </div>
                </div>

                <button onclick="marcarEstudo('segunda')">Marcar Estudo</button>
                <div class="status nao-marcado" id="status-segunda">Não marcado</div>
            </div>

            <!-- Terça-feira -->
            <div class="card" id="terca">
                <h2>Terça-feira, <span id="data-terca"></span></h2>

                <div class="horarios-container" id="horarios-terca">
                    <div class="horario-item">
                        <input type="time" id="hora-terca-1" placeholder="Escolha o horário">
                        <input type="text" id="materia-terca-1" placeholder="Matéria (ex: Matemática)">
                        <input type="text" id="assunto-terca-1" placeholder="Assunto (ex: Álgebra)">
                        <textarea class="caixa-texto" id="anotacao-terca-1" placeholder="Anotações..."></textarea>
                    </div>
                    <div class="horario-item">
                        <input type="time" id="hora-terca-2" placeholder="Escolha o horário">
                        <input type="text" id="materia-terca-2" placeholder="Matéria (ex: Português)">
                        <input type="text" id="assunto-terca-2" placeholder="Assunto (ex: Gramática)">
                        <textarea class="caixa-texto" id="anotacao-terca-2" placeholder="Anotações..."></textarea>
                    </div>
                    <div class="horario-item">
                        <input type="time" id="hora-terca-3" placeholder="Escolha o horário">
                        <input type="text" id="materia-terca-3" placeholder="Matéria (ex: Ciências)">
                        <input type="text" id="assunto-terca-3" placeholder="Assunto (ex: Biologia)">
                        <textarea class="caixa-texto" id="anotacao-terca-3" placeholder="Anotações..."></textarea>
                    </div>
                    <div class="horario-item">
                        <input type="time" id="hora-terca-4" placeholder="Escolha o horário">
                        <input type="text" id="materia-terca-4" placeholder="Matéria (ex: História)">
                        <input type="text" id="assunto-terca-4" placeholder="Assunto (ex: Idade Média)">
                        <textarea class="caixa-texto" id="anotacao-terca-4" placeholder="Anotações..."></textarea>
                    </div>
                </div>

                <button onclick="marcarEstudo('terca')">Marcar Estudo</button>
                <div class="status nao-marcado" id="status-terca">Não marcado</div>
            </div>

            <!-- Quarta-feira -->
            <div class="card" id="quarta">
                <h2>Quarta-feira, <span id="data-quarta"></span></h2>

                <div class="horarios-container" id="horarios-quarta">
                    <div class="horario-item">
                        <input type="time" id="hora-quarta-1" placeholder="Escolha o horário">
                        <input type="text" id="materia-quarta-1" placeholder="Matéria (ex: Matemática)">
                        <input type="text" id="assunto-quarta-1" placeholder="Assunto (ex: Álgebra)">
                        <textarea class="caixa-texto" id="anotacao-quarta-1" placeholder="Anotações..."></textarea>
                    </div>
                    <div class="horario-item">
                        <input type="time" id="hora-quarta-2" placeholder="Escolha o horário">
                        <input type="text" id="materia-quarta-2" placeholder="Matéria (ex: Português)">
                        <input type="text" id="assunto-quarta-2" placeholder="Assunto (ex: Gramática)">
                        <textarea class="caixa-texto" id="anotacao-quarta-2" placeholder="Anotações..."></textarea>
                    </div>
                    <div class="horario-item">
                        <input type="time" id="hora-quarta-3" placeholder="Escolha o horário">
                        <input type="text" id="materia-quarta-3" placeholder="Matéria (ex: Ciências)">
                        <input type="text" id="assunto-quarta-3" placeholder="Assunto (ex: Biologia)">
                        <textarea class="caixa-texto" id="anotacao-quarta-3" placeholder="Anotações..."></textarea>
                    </div>
                    <div class="horario-item">
                        <input type="time" id="hora-quarta-4" placeholder="Escolha o horário">
                        <input type="text" id="materia-quarta-4" placeholder="Matéria (ex: História)">
                        <input type="text" id="assunto-quarta-4" placeholder="Assunto (ex: Idade Média)">
                        <textarea class="caixa-texto" id="anotacao-quarta-4" placeholder="Anotações..."></textarea>
                    </div>
                </div>

                <button onclick="marcarEstudo('quarta')">Marcar Estudo</button>
                <div class="status nao-marcado" id="status-quarta">Não marcado</div>
            </div>

            <!-- Quinta-feira -->
            <div class="card" id="quinta">
                <h2>Quinta-feira, <span id="data-quinta"></span></h2>

                <div class="horarios-container" id="horarios-quinta">
                    <div class="horario-item">
                        <input type="time" id="hora-quinta-1" placeholder="Escolha o horário">
                        <input type="text" id="materia-quinta-1" placeholder="Matéria (ex: Matemática)">
                        <input type="text" id="assunto-quinta-1" placeholder="Assunto (ex: Álgebra)">
                        <textarea class="caixa-texto" id="anotacao-quinta-1" placeholder="Anotações..."></textarea>
                    </div>
                    <div class="horario-item">
                        <input type="time" id="hora-quinta-2" placeholder="Escolha o horário">
                        <input type="text" id="materia-quinta-2" placeholder="Matéria (ex: Português)">
                        <input type="text" id="assunto-quinta-2" placeholder="Assunto (ex: Gramática)">
                        <textarea class="caixa-texto" id="anotacao-quinta-2" placeholder="Anotações..."></textarea>
                    </div>
                    <div class="horario-item">
                        <input type="time" id="hora-quinta-3" placeholder="Escolha o horário">
                        <input type="text" id="materia-quinta-3" placeholder="Matéria (ex: Ciências)">
                        <input type="text" id="assunto-quinta-3" placeholder="Assunto (ex: Biologia)">
                        <textarea class="caixa-texto" id="anotacao-quinta-3" placeholder="Anotações..."></textarea>
                    </div>
                    <div class="horario-item">
                        <input type="time" id="hora-quinta-4" placeholder="Escolha o horário">
                        <input type="text" id="materia-quinta-4" placeholder="Matéria (ex: História)">
                        <input type="text" id="assunto-quinta-4" placeholder="Assunto (ex: Idade Média)">
                        <textarea class="caixa-texto" id="anotacao-quinta-4" placeholder="Anotações..."></textarea>
                    </div>
                </div>

                <button onclick="marcarEstudo('quinta')">Marcar Estudo</button>
                <div class="status nao-marcado" id="status-quinta">Não marcado</div>
            </div>

            <!-- Sexta-feira -->
            <div class="card" id="sexta">
                <h2>Sexta-feira, <span id="data-sexta"></span></h2>

                <div class="horarios-container" id="horarios-sexta">
                    <div class="horario-item">
                        <input type="time" id="hora-sexta-1" placeholder="Escolha o horário">
                        <input type="text" id="materia-sexta-1" placeholder="Matéria (ex: Matemática)">
                        <input type="text" id="assunto-sexta-1" placeholder="Assunto (ex: Álgebra)">
                        <textarea class="caixa-texto" id="anotacao-sexta-1" placeholder="Anotações..."></textarea>
                    </div>
                    <div class="horario-item">
                        <input type="time" id="hora-sexta-2" placeholder="Escolha o horário">
                        <input type="text" id="materia-sexta-2" placeholder="Matéria (ex: Português)">
                        <input type="text" id="assunto-sexta-2" placeholder="Assunto (ex: Gramática)">
                        <textarea class="caixa-texto" id="anotacao-sexta-2" placeholder="Anotações..."></textarea>
                    </div>
                    <div class="horario-item">
                        <input type="time" id="hora-sexta-3" placeholder="Escolha o horário">
                        <input type="text" id="materia-sexta-3" placeholder="Matéria (ex: Ciências)">
                        <input type="text" id="assunto-sexta-3" placeholder="Assunto (ex: Biologia)">
                        <textarea class="caixa-texto" id="anotacao-sexta-3" placeholder="Anotações..."></textarea>
                    </div>
                    <div class="horario-item">
                        <input type="time" id="hora-sexta-4" placeholder="Escolha o horário">
                        <input type="text" id="materia-sexta-4" placeholder="Matéria (ex: História)">
                        <input type="text" id="assunto-sexta-4" placeholder="Assunto (ex: Idade Média)">
                        <textarea class="caixa-texto" id="anotacao-sexta-4" placeholder="Anotações..."></textarea>
                    </div>
                </div>

                <button onclick="marcarEstudo('sexta')">Marcar Estudo</button>
                <div class="status nao-marcado" id="status-sexta">Não marcado</div>
            </div>
        </div>
    </div>

    
    <script>
        // Função para exibir a data atual na página
        document.getElementById('data-atual').textContent = new Date().toLocaleDateString();

        // Função para exibir as datas para os dias da semana
        function exibirDatas() {
            const diasSemana = ['segunda', 'terca', 'quarta', 'quinta', 'sexta'];
            const hoje = new Date();
            
            diasSemana.forEach(dia => {
                let data = new Date(hoje);
                data.setDate(hoje.getDate() + (diasSemana.indexOf(dia) - hoje.getDay() + 7) % 7);
                document.getElementById('data-' + dia).textContent = data.toLocaleDateString();
            });
        }

        // Chamar a função de exibir datas
        exibirDatas();

        // Função para marcar o estudo
        function marcarEstudo(dia) {
            const statusElement = document.getElementById('status-' + dia);
            statusElement.textContent = 'Marcado';
            statusElement.classList.remove('nao-marcado');
            statusElement.classList.add('marcado');
        }
    </script>
    
    <a href="cronograma.php" class="btn-voltar-fixo">← Voltar ao Cronogram</a>
    <a href="exibir_semanal.php" class="sem">← Semanal Salvo</a>
</body>
</html>
