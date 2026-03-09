<?php
// Receber dados do formulario
$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
$p1 = isset($_POST['p1']) ? $_POST['p1'] : '';
$p2 = isset($_POST['p2']) ? $_POST['p2'] : '';
$p3 = isset($_POST['p3']) ? $_POST['p3'] : '';
$p4 = isset($_POST['p4']) ? $_POST['p4'] : '';
$p5 = isset($_POST['p5']) ? $_POST['p5'] : '';

// Redirecionar se nao veio do formulario
if ($nome == '') {
    header("Location: index.php");
    exit;
}

// Contadores de perfil
$design = 0;
$logica = 0;
$games = 0;
$robotica = 0;

// Array com todas as respostas
$respostas = array($p1, $p2, $p3, $p4, $p5);

// Somar pontos
for ($i = 0; $i < count($respostas); $i++) {
    if ($respostas[$i] == "design") {
        $design++;
    }
    if ($respostas[$i] == "logica") {
        $logica++;
    }
    if ($respostas[$i] == "games") {
        $games++;
    }
    if ($respostas[$i] == "robotica") {
        $robotica++;
    }
}

// Descobrir o perfil
// Arrays com dados dos perfis
$perfis = array(
    "design" => array(
        "nome" => "Ninja do Front-end",
        "emoji" => "&#127912;",
        "desc" => "Voce tem um olho afiado para detalhes visuais e adora transformar ideias em interfaces bonitas e funcionais. Seu talento esta em combinar cores, tipografia e layout para criar experiencias que encantam os usuarios. O mundo do design e desenvolvimento front-end e o seu habitat natural, e voce sabe que um bom visual faz toda a diferenca em qualquer projeto."
    ),
    "logica" => array(
        "nome" => "Cacador de Bugs",
        "emoji" => "&#128375;",
        "desc" => "Voce e o tipo de pessoa que adora resolver quebra-cabecas e encontrar a solucao perfeita para qualquer problema. Sua mente analitica e sua paciencia fazem de voce um verdadeiro detetive do codigo. Nenhum bug escapa de voce, e sua habilidade de pensar logicamente transforma desafios complexos em solucoes elegantes. Programar para voce e como montar um grande puzzle."
    ),
    "games" => array(
        "nome" => "Criador de Games",
        "emoji" => "&#127918;",
        "desc" => "Voce vive e respira jogos! Mas nao se contenta apenas em jogar: voce quer criar mundos, personagens e mecanicas que divirtam milhares de pessoas. Sua criatividade combinada com logica de programacao te torna um desenvolvedor de jogos nato. O proximo grande hit dos games pode muito bem sair da sua cabeca e das suas maos."
    ),
    "robotica" => array(
        "nome" => "Arquiteto do Codigo",
        "emoji" => "&#129302;",
        "desc" => "Voce e fascinado por como as coisas funcionam por dentro e adora conectar o mundo digital ao fisico. Seu perfil e de um verdadeiro engenheiro: voce pensa em sistemas, automacao e inovacao o tempo todo. De robos a inteligencia artificial, voce quer construir o futuro com suas proprias maos e linhas de codigo."
    )
);

// Encontrar o maior
$maior = $design;
$perfil_key = "design";

if ($logica > $maior) {
    $maior = $logica;
    $perfil_key = "logica";
}
if ($games > $maior) {
    $maior = $games;
    $perfil_key = "games";
}
if ($robotica > $maior) {
    $maior = $robotica;
    $perfil_key = "robotica";
}

$perfil = $perfis[$perfil_key];

// Salvar cookies (1 hora)
setcookie("jogador", $nome, time() + 3600);

// Contador de vezes jogadas
$vezes = isset($_COOKIE['vezes_jogado']) ? (int) $_COOKIE['vezes_jogado'] : 0;
$vezes++;
setcookie("vezes_jogado", $vezes, time() + 3600);
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Geek - Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="card">
            <h1>Resultado do Quiz</h1>
            <p>Jogador: <strong><?php echo htmlspecialchars($nome); ?></strong></p>

            <div class="perfil-img"><?php echo $perfil["emoji"]; ?></div>
            <div class="perfil-nome"><?php echo $perfil["nome"]; ?></div>

            <div class="perfil-desc">
                <p><?php echo $perfil["desc"]; ?></p>
            </div>

            <p><strong>Pontuacao:</strong> Design: <?php echo $design; ?> | Logica: <?php echo $logica; ?> | Games:
                <?php echo $games; ?> | Robotica: <?php echo $robotica; ?>
            </p>

            <a href="quiz.php" class="btn">Jogar Novamente</a>
            <br><br>
            <a href="index.php" class="btn">Voltar ao Inicio</a>

            <p class="contador">Voce ja jogou <?php echo $vezes; ?> vez(es).</p>
        </div>
    </div>
</body>

</html>