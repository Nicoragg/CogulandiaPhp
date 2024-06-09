<?php
// Configurações do banco de dados
$host = 'localhost:3307';  // Pode ser 'localhost' ou o IP do seu servidor MySQL
$db   = 'cogulandia';  // Nome do banco de dados que você criou no MySQL Workbench
$user = 'root';  // Seu usuário do MySQL
$pass = '35892892';  // Sua senha do MySQL
$charset = 'utf8mb4';

// Configurações de DSN (Data Source Name)
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    $pdo = new PDO($dsn, $user, $pass);
    echo "Conexão bem-sucedida!";
    var_dump($pdo);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
?>
