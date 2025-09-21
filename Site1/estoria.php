<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESTÓRIA DO YCARU</title>
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

        nav img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            border: 5px solid #f4fe08;
        }

        nav a {
            font-size: 20px;
        }

        nav a:hover {
            color: #f4fe08;
            border-bottom: 2px solid #f4fe08;
        }

        .container {
            padding: 0px 50px;
        }

        /* Título da seção */
        .story-title {
            text-align: center;
            color: #f4fe08;
            font-size: 3rem;
            margin: 50px 0;
            text-transform: uppercase;
            letter-spacing: 3px;
            position: relative;
        }

        .story-title::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 150px;
            height: 4px;
            background: linear-gradient(45deg, #f4fe08, #e6f200);
            border-radius: 2px;
        }

        /* Container principal da história */
        .story-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Seção com personagem e texto */
        .story-section {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 50px;
            align-items: center;
            margin: 80px 0;
            background: linear-gradient(135deg, rgba(26, 26, 26, 0.9) 0%, rgba(45, 45, 45, 0.9) 100%);
            border-radius: 20px;
            padding: 50px;
            border: 3px solid #f4fe08;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.5);
            position: relative;
            overflow: hidden;
        }

        .story-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at center, rgba(244, 254, 8, 0.05) 0%, transparent 70%);
            pointer-events: none;
        }

        /* Container do personagem */
        .character-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
        }

        .character-pixel {
            width: 300px;
            height: 300px;
            image-rendering: pixelated;
            image-rendering: -moz-crisp-edges;
            image-rendering: crisp-edges;
            border: 4px solid #f4fe08;
            border-radius: 15px;
            background: linear-gradient(135deg, #2d2d2d, #1a1a1a);
            padding: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        .character-name {
            margin-top: 20px;
            font-size: 2rem;
            font-weight: bold;
            color: #f4fe08;
            letter-spacing: 2px;
        }

        .character-subtitle {
            color: #cccccc;
            font-size: 1.1rem;
            margin-top: 5px;
            text-align: center;
        }

        /* Texto da história */
        .story-text {
            position: relative;
            z-index: 2;
        }

        .story-paragraph {
            font-size: 1.3rem;
            line-height: 1.8;
            color: #e0e0e0;
            text-align: justify;
            margin-bottom: 25px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.7);
        }

        .story-paragraph:first-child {
            font-size: 1.4rem;
            color: #f4fe08;
            font-weight: bold;
        }

        .highlight {
            color: #f4fe08;
            font-weight: bold;
        }

        /* Call to action */
        .cta-section {
            text-align: center;
            margin: 60px 0;
            padding: 40px;
            background: linear-gradient(135deg, rgba(244, 254, 8, 0.1), rgba(244, 254, 8, 0.05));
            border-radius: 15px;
            border: 2px solid rgba(244, 254, 8, 0.3);
        }

        .cta-text {
            font-size: 1.5rem;
            color: #f4fe08;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .play-button {
            display: inline-block;
            background: linear-gradient(45deg, #f4fe08, #e6f200);
            color: #000;
            padding: 15px 40px;
            text-decoration: none;
            border-radius: 30px;
            font-weight: bold;
            font-size: 1.2rem;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 3px 10px rgba(244, 254, 8, 0.2);
        }

        .play-button:hover {
            background: linear-gradient(45deg, #000, #1a1a1a);
            color: #f4fe08;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(244, 254, 8, 0.2);
        }

        /* Footer */
        footer {
            display: flex;
            justify-content: center;
            margin-top: 80px;
            padding: 20px 0;
        }

        footer img {
            width: 40px;
            height: 40px;
        }

        footer a {
            margin: 20px;
            text-align: center;
        }

        footer p {
            margin-top: 2px;
        }

        /* Responsividade */
        @media (max-width: 968px) {
            .story-section {
                grid-template-columns: 1fr;
                text-align: center;
                gap: 30px;
            }
            
            .character-pixel {
                width: 250px;
                height: 250px;
            }
            
            .story-title {
                font-size: 2.5rem;
            }
            
            .container {
                padding: 0 20px;
            }
        }

        @media (max-width: 768px) {
            .story-section {
                padding: 30px 20px;
            }
            
            .character-pixel {
                width: 200px;
                height: 200px;
            }
            
            .story-paragraph {
                font-size: 1.1rem;
            }
        }

        /* Efeitos de partículas */
        .particles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            overflow: hidden;
        }

        .particle {
            position: absolute;
            background: #f4fe08;
            border-radius: 50%;
            opacity: 0.6;
            animation: particles 15s linear infinite;
        }

        @keyframes particles {
            0% {
                transform: translateY(100vh) rotate(0deg);
                opacity: 0;
            }
            10% {
                opacity: 0.6;
            }
            90% {
                opacity: 0.6;
            }
            100% {
                transform: translateY(-100px) rotate(360deg);
                opacity: 0;
            }
        }
    </style>
</head>
<body>
    <div class="particles">
        <div class="particle" style="left: 10%; width: 3px; height: 3px; animation-delay: 0s;"></div>
        <div class="particle" style="left: 20%; width: 2px; height: 2px; animation-delay: 2s;"></div>
        <div class="particle" style="left: 30%; width: 4px; height: 4px; animation-delay: 4s;"></div>
        <div class="particle" style="left: 40%; width: 2px; height: 2px; animation-delay: 6s;"></div>
        <div class="particle" style="left: 50%; width: 3px; height: 3px; animation-delay: 8s;"></div>
        <div class="particle" style="left: 60%; width: 2px; height: 2px; animation-delay: 10s;"></div>
        <div class="particle" style="left: 70%; width: 4px; height: 4px; animation-delay: 12s;"></div>
        <div class="particle" style="left: 80%; width: 2px; height: 2px; animation-delay: 14s;"></div>
        <div class="particle" style="left: 90%; width: 3px; height: 3px; animation-delay: 16s;"></div>
    </div>

    <div class="container">
        <nav>
            <ul>
                <li>
                    <img src="img/logo.png" alt="Logo">
                </li>
                <li><a href="index.php">O JOGO</a></li>
                <li><a href="personagem.php">PERSONAGENS</a></li>
                <li><a href="estoria.php">ESTÓRIA</a></li>
                <li><a href="noticias.php">NOTÍCIAS</a></li>
                <li><a href="story.php">STORY BOARD</a></li>
                <li>
                    <a href="profile_redirect.php" class="prf-txt">
                        <img src="img/profile.png" style="border: none; height: 60px; width: 60px;" alt="Profile">
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    <h1 class="story-title">A Jornada de Ycaru</h1>

    <div class="story-container">
        <section class="story-section">
            <div class="character-container">
                <div class="character-pixel">
                    <div style="width: 100%; height: 100%; background: url('img/atck.gif') no-repeat center; background-size: contain;"> </div>
                </div>
                <h2 class="character-name">YCARU</h2>
                <p class="character-subtitle">O Viajante Perdido</p>
            </div>
            
            <div class="story-text">
                <p class="story-paragraph">
                    Uma <span class="highlight">explosão estelar</span>, um piscar de luz no vasto vazio, foi o suficiente para que Ycaru perdesse o controle de sua nave espacial.
                </p>
                
                <p class="story-paragraph">
                    A colisão violenta o arremessou do espaço sideral para uma queda turbulenta através da atmosfera terrestre. Quando finalmente acordou, encontrou-se em um lugar completamente estranho e úmido: <span class="highlight">a Terra</span>.
                </p>
                
                <p class="story-paragraph">
                    No meio de uma densa floresta tropical, sua nave espacial jazia em ruínas, destroços espalhados por toda parte. Pior ainda: uma <span class="highlight">peça crucial do motor</span> havia desaparecido durante o acidente.
                </p>
                
                <p class="story-paragraph">
                    Agora, sua única chance de voltar para casa é recuperar essa peça perdida. Mas a missão é ainda mais perigosa do que imagina, pois entre as árvores antigas, uma <span class="highlight">misteriosa civilização rural</span> o observa com desconfiança.
                </p>
            </div>
        </section>

    <footer>
        <a href="https://github.com/ycaruqueda-svg" target="_blank" rel="noopener noreferrer">
            <img src="./img/github.svg" alt="Github">
            <p>Github</p>
        </a>
        <a href="https://www.youtube.com/@QuedaYcaru" target="_blank" rel="noopener noreferrer">
            <img src="./img/youtube.svg" alt="Youtube">
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