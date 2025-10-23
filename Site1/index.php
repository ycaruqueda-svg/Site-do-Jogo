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
    <style>
        body {
            color: white;
            background: linear-gradient(135deg, #0a0a0a 0%, #1a1a1a 50%, #0d0d0d 100%);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            width: 100%;
            overflow-x: hidden;
            min-height: 100vh;
            position: relative;
        }

        /* Forest background overlay */
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)),
                url('img/fase.png');
            background-size: cover;
            background-position: bottom;
            z-index: -1;
            opacity: 0.3;
        }

        /* Navegação */
        ul {
            background-color: black;
            padding: 16px 50px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            list-style-type: none;
            width: 100%;
            box-sizing: border-box;
            margin: 0;
            font-weight: bold;
            position: center;
        }
        .container {
            padding: 0px;
            margin: 0px;
            width: 100%;
        }
        </style>
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
                    <a href="programadores.php">PROGRAMADORES</a>
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