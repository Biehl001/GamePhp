<?php
// Contador de vezes jogadas (cookie)
$vezes_jogado = isset($_COOKIE['vezes_jogado']) ? (int)$_COOKIE['vezes_jogado'] : 0;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Geek - Descubra seu Perfil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="card">
            <?php if(isset($_COOKIE['jogador'])): ?>
                <div class="welcome-back">
                    <p>Bem-vindo de volta, <strong><?php echo htmlspecialchars($_COOKIE['jogador']); ?></strong>!</p>
                </div>
            <?php endif; ?>

            <h1>Qual e o seu Perfil Geek?</h1>
            <p>Responda o quiz e descubra qual e a sua verdadeira identidade no mundo da tecnologia. Sao 5 perguntas rapidas!</p>
            <a href="quiz.php" class="btn">Comecar Quiz</a>

            <?php if($vezes_jogado > 0): ?>
                <p class="contador">Este quiz ja foi jogado <?php echo $vezes_jogado; ?> vez(es).</p>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
