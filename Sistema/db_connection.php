<?php
$servername = "localhost";
$username = "root"; // Substitua pelo seu nome de usuário do banco
$password = ""; // Substitua pela sua senha do banco
$dbname = "bd_game"; // Substitua pelo nome do seu banco de dados

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Checa a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>