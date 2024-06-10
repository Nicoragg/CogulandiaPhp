<!DOCTYPE html>
<html>
<head>
    <title>Login - Cogulandia</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">
                <a href="#"><img src="../views/Imgs/cogulogos.jpg" alt="Minha Logo"></a>
            </div>
        </nav>
    </header>

    <br><br>
    <div class="features">
        <div class="login">
            <h2>Alterar Cadastro</h2>
            <form action="../../controllers/clientecontroller.php" method="POST">
                <input type="hidden" name="acao" value="alterar">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome"><br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email"><br>
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha"><br>
                <label for="confirmar_senha">Confirmar Senha:</label>
                <input type="password" id="confirmar_senha" name="confirmar_senha"><br>
                <input type="submit" value="Alterar">
            </form>
            <form action="../../controllers/clientecontroller.php" method="POST">
                <input type="hidden" name="acao" value="deletar">
                <input type="submit" value="Deletar Conta" class="delete-btn">
            </form>
            <form action="home.php" method="POST">
                <input type="submit" value="Voltar" class="logout-btn">
            </form>
        </div>
    </div>
    <footer class="footer">
        <div class="footer-bottom">
            <p>&copy; 2024 Cogulandia. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>
</html>
