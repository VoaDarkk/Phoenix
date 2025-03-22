<?php
// Simulando um banco de dados com um array associativo
// Idealmente, esses dados seriam obtidos de um banco de dados
$cronograma = [
    'segunda' => [
        ['hora' => '08:00', 'materia' => 'Matemática', 'assunto' => 'Álgebra', 'anotacao' => 'Revisar fórmulas'],
        ['hora' => '10:00', 'materia' => 'Português', 'assunto' => 'Gramática', 'anotacao' => 'Estudar vírgulas'],
        // mais entradas
    ],
    'terca' => [
        ['hora' => '09:00', 'materia' => 'História', 'assunto' => 'Revolução Francesa', 'anotacao' => 'Ler capítulo 4'],
        // mais entradas
    ],
    // Dados para os outros dias da semana
];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cronograma Semanal - Exibição</title>
    <style>
        /* Estilo da página */
        body {
            background: linear-gradient(85deg, #022968, #00203F);
            color: white;
            font-family: Arial, sans-serif;
        }
        header {
            text-align: center;
            margin-bottom: 30px;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }
        .cards {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .card {
            background-color: #f0f0f0;
            border-radius: 10px;
            padding: 20px;
            width: 48%;
            box-sizing: border-box;
            color: black;
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
        .caixa-texto {
            margin-top: 10px;
        }
        .status {
            margin-top: 10px;
            text-align: center;
            padding: 5px;
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
        }
    </style>
</head>
<body>

    <div class="container">
        <header>
            <h1>Cronograma de Estudos Semanal</h1>
        </header>

        <div class="cards">
            <?php foreach ($cronograma as $dia => $horarios): ?>
                <div class="card" id="<?php echo $dia; ?>">
                    <h2><?php echo ucfirst($dia); ?></h2>
                    <div class="horarios-container">
                        <?php foreach ($horarios as $horario): ?>
                            <div class="horario-item">
                                <p><strong>Hora:</strong> <?php echo $horario['hora']; ?></p>
                                <p><strong>Matéria:</strong> <?php echo $horario['materia']; ?></p>
                                <p><strong>Assunto:</strong> <?php echo $horario['assunto']; ?></p>
                                <p><strong>Anotações:</strong> <?php echo $horario['anotacao']; ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="status marcado">Estudos marcados</div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>

    <a href="cronograma.php" class="btn-voltar-fixo">← Voltar ao Cronograma</a>
  
</body>
</html>
