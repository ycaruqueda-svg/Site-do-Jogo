<?php
session_start();
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // 1. Busca o usuário no banco de dados
    $stmt = $conn->prepare("SELECT id, username, password, failed_login_attempts, last_failed_login FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        
        // Verifica se o usuário está bloqueado por tentativas excessivas
        $current_time = new DateTime();
        $last_failed = new DateTime($user['last_failed_login']);
        $interval = $current_time->diff($last_failed);
        
        $minutes_diff = $interval->i + ($interval->h * 60) + ($interval->d * 24 * 60);

        if ($user['failed_login_attempts'] >= 3 && $minutes_diff < 5) {
            $_SESSION['message'] = "Conta bloqueada por 5 minutos devido a múltiplas tentativas de login falhas. Tente novamente mais tarde.";
            header("Location: login.php");
            exit();
        }

        // 2. Verifica a senha com a senha criptografada
        if (password_verify($password, $user['password'])) {
            // Login bem-sucedido: reseta as tentativas e inicia a sessão
            $reset_stmt = $conn->prepare("UPDATE users SET failed_login_attempts = 0, last_failed_login = NULL WHERE id = ?");
            $reset_stmt->bind_param("i", $user['id']);
            $reset_stmt->execute();
            $reset_stmt->close();

            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $user['username'];
            header("Location: dashboard.php");
            exit();
        } else {
            // 3. Login falhou: incrementa as tentativas
            $update_stmt = $conn->prepare("UPDATE users SET failed_login_attempts = failed_login_attempts + 1, last_failed_login = NOW() WHERE id = ?");
            $update_stmt->bind_param("i", $user['id']);
            $update_stmt->execute();
            $update_stmt->close();

            $_SESSION['message'] = "Usuário ou senha inválidos.";
            header("Location: login.php");
            exit();
        }
    } else {
        // Usuário não encontrado
        $_SESSION['message'] = "Usuário ou senha inválidos.";
        header("Location: login.php");
        exit();
    }

    $stmt->close();
    $conn->close();
}
?>