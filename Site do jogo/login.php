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
                    <a href="index.php">O JOGO</a>
                </li>
                <li>
                    <a href="personagem.php">PERSONAGENS</a>
                </li>
                <li>
                    <a href="estoria.php">ESTÓRIA</a>
                </li>
                <li>
                    <a href="noticias.php">NOTÍCIAS</a>
                </li>
                <li>
                    <a href="story.php">STORY BOARD</a>
                </li>
                <li>
                    <a href="baixar.php"class='cta-button'>BAIXAR</a>
                
                </li>
            
                <li>
                    <a href="index_login.php" class="prf-txt">
                        <img src="img/profile.png" class="prf-img" style="border: none; text-transform: none; height: 60px; width: 60px; ">
                    </a>
                </li>
            </ul>
        </nav>

   
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
 </div>
</body>
</html>