<?php
// Inclui a conexão com o banco de dados
include 'db_connection.php';

// Inicia a sessão para exibir mensagens
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // 1. Valida se as senhas são iguais
    if ($password !== $confirm_password) {
        $_SESSION['message'] = "Erro: As senhas não coincidem.";
        header("Location: registro.php");
        exit();
    }

    // 2. Verifica se o usuário já existe
    $stmt = $conn->prepare("SELECT id FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();
    
    if ($stmt->num_rows > 0) {
        $_SESSION['message'] = "Erro: O nome de usuário já existe.";
        header("Location: registro.php");
        exit();
    }
    
    $stmt->close();

    // 3. Criptografa a senha antes de salvar
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // 4. Insere o novo usuário no banco de dados
    $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $hashed_password);
    
    if ($stmt->execute()) {
        $_SESSION['message'] = "Usuário registrado com sucesso! Você pode fazer login agora.";
        header("Location: login.php");
    } else {
        $_SESSION['message'] = "Erro ao registrar o usuário.";
        header("Location: registro.php");
    }

    $stmt->close();
    $conn->close();
    exit();
}
?>