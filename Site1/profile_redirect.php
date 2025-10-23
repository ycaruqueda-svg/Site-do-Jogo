<?php
session_start();

// Verifica se o usuário está logado
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    // Se estiver logado, redireciona para o dashboard
    header("Location: dashboard.php");
    exit();
} else {
    // Se não estiver logado, redireciona para o login
    header("Location: login.php");
    exit();
}
?>