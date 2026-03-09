<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Geek - Perguntas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="card">
            <h1>Quiz Geek</h1>
            <p>Responda todas as perguntas e descubra seu perfil!</p>

            <form action="resultado.php" method="POST">

                <div class="question">
                    <h3>Seu nome:</h3>
                    <input type="text" name="nome" placeholder="Digite seu nome..." required>
                </div>

                <div class="question">
                    <h3>1. O que voce mais gosta de fazer no computador?</h3>
                    <label><input type="radio" name="p1" value="design" required> Criar paginas e layouts bonitos</label>
                    <label><input type="radio" name="p1" value="logica"> Resolver problemas e desafios</label>
                    <label><input type="radio" name="p1" value="games"> Jogar e criar jogos</label>
                    <label><input type="radio" name="p1" value="robotica"> Automatizar tarefas e criar robos</label>
                </div>

                <div class="question">
                    <h3>2. Qual materia voce mais gosta na escola?</h3>
                    <label><input type="radio" name="p2" value="design" required> Artes</label>
                    <label><input type="radio" name="p2" value="logica"> Matematica</label>
                    <label><input type="radio" name="p2" value="games"> Informatica</label>
                    <label><input type="radio" name="p2" value="robotica"> Fisica</label>
                </div>

                <div class="question">
                    <h3>3. Qual desses projetos voce faria nas ferias?</h3>
                    <label><input type="radio" name="p3" value="design" required> Redesenhar um site famoso do zero</label>
                    <label><input type="radio" name="p3" value="logica"> Criar um algoritmo para resolver um cubo magico</label>
                    <label><input type="radio" name="p3" value="games"> Desenvolver um jogo 2D completo</label>
                    <label><input type="radio" name="p3" value="robotica"> Montar um robo com Arduino</label>
                </div>

                <div class="question">
                    <h3>4. Qual ferramenta voce mais queria dominar?</h3>
                    <label><input type="radio" name="p4" value="design" required> Figma / Photoshop</label>
                    <label><input type="radio" name="p4" value="logica"> Python / C++</label>
                    <label><input type="radio" name="p4" value="games"> Unity / Godot</label>
                    <label><input type="radio" name="p4" value="robotica"> Raspberry Pi / Arduino</label>
                </div>

                <div class="question">
                    <h3>5. Como voce se ve no futuro?</h3>
                    <label><input type="radio" name="p5" value="design" required> Criando interfaces incriveis para apps</label>
                    <label><input type="radio" name="p5" value="logica"> Resolvendo problemas complexos em grandes empresas</label>
                    <label><input type="radio" name="p5" value="games"> Lancando meu proprio jogo na Steam</label>
                    <label><input type="radio" name="p5" value="robotica"> Construindo tecnologia que muda o mundo</label>
                </div>

                <button type="submit" class="btn">Descobrir meu perfil</button>
            </form>
        </div>
    </div>
</body>
</html>
