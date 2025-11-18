<?php
$servername = "localhost";
$username = "root";  // Usuário padrão do XAMPP
$password = "";      // Senha padrão vazia no XAMPP
$dbname = "agenda_telefonica";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}
?>