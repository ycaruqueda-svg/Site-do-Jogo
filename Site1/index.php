<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A QUEDA DE YCARU</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <div class="container">
  <nav>
            <ul>
                 <li>
                    <img src="img/logo.png" width="25" height="25">
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
                    <a href="profile_redirect.php" class="prf-txt">
                        <img src="img/profile.png" class="prf-img" style="border: none; text-transform: none; height: 60px; width: 60px;">
                        <?php
                        if (isset($_SESSION['username'])) {
                            echo '<span style="margin-left:10px;">' . htmlspecialchars($_SESSION['username']) . '</span>';
                        }
                        ?>
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    <section class="hero">
        <h1>A Queda de Ycaru</h1>
        <p>Uma aventura épica aguarda você!</p>
        <a href="profile_redirect.php" class="btn">Jogue Agora</a>
    </section>

    <footer>
        <a href="https://github.com/ycaruqueda-svg" target="_blank" rel="noopener noreferrer">
            <img src="./img/github.svg">
            <p>Github</p>
        </a>
        <a href="https://www.youtube.com/@QuedaYcaru" target="_blank" rel="noopener noreferrer">
            <img src="./img/youtube.svg">
            <p>Youtube</p>
        </a>
    </footer>
    <center>
        <div class="footer-bottom">
            <p>&copy; 2025 Queda de Ycaru. Todos os direitos reservados.</p>
        </div>
    </center>
</body>

</html>