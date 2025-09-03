<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
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
<body bgcolor='black'>
    <h1>Bem-vindo, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
    <p>Esta é uma área restrita. Você está logado com sucesso.</p>
    <p><a href="logout.php">Sair</a></p>
    </div>
</body>
</html>