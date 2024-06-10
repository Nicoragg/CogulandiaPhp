<?php
session_start();
// Inclua aqui o código para se conectar ao banco de dados, se necessário

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["acao"] == "autenticar") {
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        
        if ($email == "usuario@email.com" && $senha == "senha123") {
            $_SESSION["email"] = $email;
            header("Location: home.php");
            exit();
        } else {
            header("Location: login.php?erro=credenciais_invalidas");
            exit();
        }
    } elseif ($_POST["acao"] == "registrar") {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        
        // Exemplo de lógica de registro de usuário (substitua pela sua lógica real)
        // Aqui você precisará inserir os dados do usuário no banco de dados, se necessário
        // Em seguida, redirecione para a página de login
        header("Location: login.php");
        exit();
    }
}
?>