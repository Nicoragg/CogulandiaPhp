<!DOCTYPE html>
<html>
<head>
    <title>Registro - Cogulandia</title>
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
    <div class="login-wrapper">
        <div class="login">
            <h1>Registrar</h1>
            <form action="../../controllers/clientecontroller.php" method="POST">
                <input type="hidden" name="acao" value="registrar">
                
                <label for="nome">Nome:</label><input type="text" name="nome"><br>
                <label for="email">Email:</label><input type="email" name="email"><br>
                <label for="senha">Senha:</label><input type="password" name="senha"><br>
                <input type="submit" value="Registrar">
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
