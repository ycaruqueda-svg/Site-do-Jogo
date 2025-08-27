<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="index.css">
     <div class="container" >
        <nav>
            <ul>
                 <li>
                    <img src="img/logo.png">
                </li>
                <li>
                    <a href="index.html">O JOGO</a>
                </li>
                <li>
                    <a href="personagem.html">PERSONAGENS</a>
                </li>
                <li>
                    <a href="estoria.html">ESTÓRIA</a>
                </li>
                <li>
                    <a href="noticias.html">NOTÍCIAS</a>
                </li>
                <li>
                    <a href="story.html">STORY BOARD</a>
                </li>
                <li>
                    <a href="baixar.html"class='cta-button'>BAIXAR</a>
                
                </li>
            </ul>
        </nav>
        </div>
</head>
<body>
    <h2>Login</h2>
    <?php
    if (isset($_SESSION['message'])) {
        echo "<p>" . $_SESSION['message'] . "</p>";
        unset($_SESSION['message']); // Limpa a mensagem após a exibição
    }
    ?>
    <form action="processa_login.php" method="POST">
        <div>
            <label for="username">Usuário:</label>
            <input type="text" name="username" required>
        </div>
        <div>
            <label for="password">Senha:</label>
            <input type="password" name="password" required>
        </div>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>