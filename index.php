<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pyra</title>
    <link rel="stylesheet" href="estilo.css">
   
</head>
<body>
<header>
    <h1>Bem Vindo à Pyra</h1>
</header>


<div class="botoes-container">
    <!-- Caixa de convite com seta -->
    <div class="convite-pyra">
        Descubra tudo sobre a Pyra e como ela pode transformar sua jornada! 🔥
    </div>

    <div class="convite-carreiras">
        Explore carreiras incríveis e encontre seu caminho! 🚀
    </div>

    <div class="convite-cronograma-esq">
        Organize seus estudos de forma eficiente! 📅
    </div>

    <!-- Caixa de convite para o lado direito do botão Cronograma -->
    <div class="convite-cronograma-dir">
        Mantenha seu planejamento sempre à vista! ✅
    </div>
    <div class="inicio_cronograma" onclick="abrirPagina('cronograma.php')">Cronograma</div>
    <div class="carreiras" onclick="abrirPagina('https://www.vagas.com.br/mapa-de-carreiras/')">Mapa de Carreiras</div>
    <div class="informacao" onclick="abrirPagina('informacao.php')">Pyra</div>
</div>

<div class="imagem-container">
    <img src="images/fenix.png" alt="Imagem" class="imagem-rodape">
</div>

<script>
    function abrirPagina(pagina) {
        window.location.href = pagina;
    }
</script>
</body>
</html>
