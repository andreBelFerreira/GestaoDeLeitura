<?php
$servername = "localhost";
$username = "root"; // ou o usuário que você configurou
$password = ""; // ou a senha que você configurou
$database = "livros";
$port = 3308; // A porta que você está usando

// Criar conexão
$conn = new mysqli($servername, $username, $password, $database, $port);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Definir charset
$conn->set_charset("utf8");

echo "Conexão bem-sucedida com charset UTF-8!";
$conn->close();
?>
