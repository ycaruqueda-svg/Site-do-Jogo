<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt">
<head bgcolor="black">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PERSONAGENS DA QUEDA DE YCARU</title>
    <link rel="stylesheet" href="index.css">
     <div class="container" >

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

        /* parte de cima */
        ul {
            background-color: black;
            padding: 16px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            list-style-type: none;
            width: 100%;
            box-sizing: border-box;
            margin: 0;
            font-weight: bold;
        }

        a {
            color: white;
            text-decoration: none;
        }

        /* Define o tam da logo */
        nav img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            border: 5px solid #f4fe08;
        }

        /* Beleza */
        nav a {
            font-size: 20px;
            border: #f4fe08 5px;
        }

        /* Muda de branco para yellow */
        nav a:hover {
            color: #f4fe08;
        }

        /* Barrinha amarela */
        nav a:hover {
            color: #f4fe08;
            border-bottom: 2px solid #f4fe08;
        }

        /* Define o tamanho das img do rodapé */
        footer img {
            width: 40px;
            height: 40px;
        }

        /* Alinha ao centro */
        footer {
            bottom: 10px;
            display: flex;
            justify-content: center;
            margin-top: 80px;
        }

        /* Beleza */
        footer a {
            margin: 20px;
            text-align: center;
        }

        footer p {
            margin-top: 2px;
        }

        /* Cria um container q reduz o tamanho */
        .container {
            padding: 0px 50px;
        }

        /* Título da seção */
        .news-section-title {
            text-align: center;
            color: #f4fe08;
            font-size: 2.5rem;
            margin: 50px 0;
            text-transform: uppercase;
            letter-spacing: 2px;
            position: relative;
        }

        .news-section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 3px;
            background: linear-gradient(45deg, #f4fe08, #e6f200);
            border-radius: 2px;
        }

        /* Container principal para os cards de notícias */
        .news-container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 0 20px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 30px;
        }

        /* Estilo individual de cada card */
        .news-card {
            background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            border: 2px solid #f4fe08;
        }

        .news-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(244, 254, 8, 0.2);
        }

        /* Imagem do card */
        .news-card-image {
            width: 100%;
            height: 200px;
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .news-card-image::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 80px;
            background: linear-gradient(transparent, rgba(0, 0, 0, 0.8));
        }

        /* Categoria/Tag no canto superior */
        .news-category {
            position: absolute;
            top: 15px;
            left: 15px;
            background: #f4fe08;
            color: #000;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* Data no canto superior direito */
        .news-date {
            position: absolute;
            top: 15px;
            right: 15px;
            background: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 5px 10px;
            border-radius: 15px;
            font-size: 12px;
            border: 1px solid #f4fe08;
        }

        /* Conteúdo do card */
        .news-content {
            padding: 25px;
        }

        /* Título do card */
        .news-title {
            color: #f4fe08;
            font-size: 1.4rem;
            font-weight: bold;
            margin-bottom: 15px;
            line-height: 1.3;
            transition: color 0.3s ease;
        }

        .news-card:hover .news-title {
            color: #fff;
        }

        /* Descrição do card */
        .news-description {
            color: #cccccc;
            font-size: 1rem;
            line-height: 1.6;
            margin-bottom: 20px;
            text-align: justify;
        }

        /* Botão de leia mais */
        .read-more-btn {
            display: inline-block;
            background: linear-gradient(45deg, #f4fe08, #e6f200);
            color: #000;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 25px;
            font-weight: bold;
            font-size: 14px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .read-more-btn:hover {
            background: linear-gradient(45deg, #000, #1a1a1a);
            color: #f4fe08;
            transform: translateX(5px);
        }

        /* Efeito de brilho no hover */
        .news-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(244, 254, 8, 0.1), transparent);
            transition: left 0.5s;
            z-index: 1;
        }

        .news-card:hover::before {
            left: 100%;
        }

        /* Responsividade */
        @media (max-width: 768px) {
            .news-container {
                grid-template-columns: 1fr;
                gap: 20px;
                padding: 0 15px;
            }
            
            .news-card {
                margin-bottom: 20px;
            }
            
            .news-title {
                font-size: 1.2rem;
            }
            
            .news-content {
                padding: 20px;
            }
        }
    </style>
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
    
</head>
<body bgcolor="black">
<h1 class="news-section-title">Story Board</h1>

    <div class="galeria-imagens">
        <div class="imagem-container">
          <img src="img/Icar.png" alt="Imagem 1">
        </div>
        <div class="imagem-container">
          <img src="img/Icar (1).png" alt="Imagem 2">
        </div>
        <div class="imagem-container">
          <img src="img/Icar (2).png" alt="Imagem 3">
        </div>
        <div class="imagem-container">
          <img src="img/Icar (3).png" alt="Imagem 4">
        </div>
    </div>

    <footer>
            <a href="https://github.com/ycaruqueda-svg" target="_blank" rel="noopener noreferrer">
                <img src="./img/github.svg"></img>
                <p>Github</p>
            </a>
            <a href="https://www.youtube.com/@QuedaYcaru" target="_blank" rel="noopener noreferrer">
                <img src="./img/youtube.svg"></img>
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