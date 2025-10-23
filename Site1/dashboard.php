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
    <title>Dashboard - A Queda de Ycaru</title>
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

        /* parte de cima */
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
            padding: 0px;
            margin: 0px;
            width: 100%;
        }
        /* Melhorias específicas do dashboard */
        .dashboard-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
            text-align: center;
        }

        .welcome-section {
            background: rgba(244, 254, 8, 0.1);
            border: 2px solid #f4fe08;
            border-radius: 15px;
            padding: 2rem;
            margin: 2rem 0;
        }

        .welcome-title {
            font-size: 2.5rem;
            color: #f4fe08;
            margin-bottom: 1rem;
            text-shadow: 0 0 10px rgba(244, 254, 8, 0.5);
        }

        .user-info {
            font-size: 1.2rem;
            color: white;
            margin-bottom: 1rem;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin: 2rem 0;
        }

        .stat-card {
            background: rgba(26, 26, 26, 0.8);
            border: 2px solid #f4fe08;
            border-radius: 10px;
            padding: 1.5rem;
            transition: transform 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(244, 254, 8, 0.2);
        }

        .stat-title {
            color: #f4fe08;
            font-size: 1.1rem;
            margin-bottom: 0.5rem;
            font-weight: bold;
        }

        .stat-value {
            color: white;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .main-action-section {
            margin: 3rem 0;
            padding: 2rem;
            background: rgba(0, 0, 0, 0.3);
            border-radius: 20px;
            border: 1px solid rgba(244, 254, 8, 0.3);
        }

        .main-logo {
            width: 250px;
            height: 250px;
            border-radius: 50%;
            border: 5px solid #f4fe08;
            margin: 1rem 0;
            transition: all 0.3s ease;
            box-shadow: 0 0 20px rgba(244, 254, 8, 0.5);
        }

        .main-logo:hover {
            transform: scale(1.05);
            box-shadow: 0 0 30px rgba(244, 254, 8, 0.8);
        }

        .action-description {
            font-size: 1.1rem;
            color: rgba(255, 255, 255, 0.9);
            margin: 1rem 0;
            line-height: 1.6;
        }

        .dashboard-nav-actions {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 1rem;
            margin: 2rem 0;
        }

        .nav-button {
            background: linear-gradient(45deg, #f4fe08, #ffcc00);
            color: black;
            text-decoration: none;
            padding: 0.8rem 1.5rem;
            border-radius: 25px;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .nav-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(244, 254, 8, 0.4);
            background: linear-gradient(45deg, #ffcc00, #f4fe08);
        }

        .logout-section {
            margin-top: 2rem;
            padding: 1rem;
            background: rgba(255, 68, 68, 0.1);
            border: 1px solid #ff4444;
            border-radius: 10px;
        }

        .logout-button {
            background: #ff4444;
            color: white;
            text-decoration: none;
            padding: 0.8rem 1.5rem;
            border-radius: 8px;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .logout-button:hover {
            background: #cc3333;
            transform: translateY(-2px);
        }

        @media (max-width: 768px) {
            .welcome-title {
                font-size: 2rem;
            }
            
            .main-logo {
                width: 200px;
                height: 200px;
            }
            
            .stats-grid {
                grid-template-columns: 1fr;
            }
            
            .dashboard-nav-actions {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>
<body bgcolor="black">
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

    <div class="dashboard-content">
        <div class="welcome-section">
            <h1 class="welcome-title">Bem-vindo ao Comando</h1>
            <div class="user-info">
                Comandante: <?php echo isset($_SESSION['username']) ? htmlspecialchars($_SESSION['username']) : 'Desconhecido'; ?>
            </div>
            <p class="action-description">
                Você agora tem acesso total ao universo de Ycaru. Explore, descubra e ajude nosso herói em sua jornada épica!
            </p>
        </div>

        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-title">Status da Missão</div>
                <div class="stat-value">Ativo</div>
            </div>
            <div class="stat-card">
                <div class="stat-title">Progresso</div>
                <div class="stat-value">Iniciando</div>
            </div>
            <div class="stat-card">
                <div class="stat-title">Nível de Acesso</div>
                <div class="stat-value">Comandante</div>
            </div>
        </div>

        <div class="dashboard-nav-actions">
            <a href="personagem.php" class="nav-button">Conhecer Personagens</a>
            <a href="estoria.php" class="nav-button">Ver História</a>
            <a href="noticias.php" class="nav-button">Últimas Notícias</a>
            <a href="story.php" class="nav-button">Storyboard</a>
        </div>

        <div class="main-action-section">
            <a href="https://github.com/ycaruqueda-svg/Arquivo-do-Jogo" target="_blank" rel="noopener noreferrer">
                <img src="img/logo.png" class="main-logo" alt="Logo Ycaru">
                <p style="color: #f4fe08; font-size: 1.2rem; margin-top: 1rem;">Clique para Iniciar a Aventura</p>
            </a>
            
            <p class="action-description">
                A nave de Ycaru está danificada e ele precisa da sua ajuda para encontrar as peças perdidas. 
                Uma aventura épica o aguarda nas profundezas do espaço!
            </p>
        </div>

        <div class="logout-section">
            <h3 style="color: #ff4444; margin-bottom: 1rem;">Sessão Ativa</h3>
            <p style="color: white; margin-bottom: 1rem;">
                Você está logado como comandante. Quando terminar, não esqueça de encerrar sua sessão com segurança.
            </p>
            <a href="logout.php" class="logout-button">Encerrar Sessão</a>
        </div>
    </div>

    <footer>
        <a href="https://github.com/ycaruqueda-svg" target="_blank" rel="noopener noreferrer">
            <img src="./img/github.svg" alt="GitHub">
            <p>Github</p>
        </a>
        <a href="https://www.youtube.com/@QuedaYcaru" target="_blank" rel="noopener noreferrer">
            <img src="./img/youtube.svg" alt="YouTube">
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