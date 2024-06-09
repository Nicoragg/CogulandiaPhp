<!DOCTYPE html>
<html>
<head>
    <title>Login - Cogulandia</title>
    <link rel="stylesheet" href="../../style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">
                <a href="#"><img src="../Imgs/cogulogos.jpg" alt="Minha Logo"></a>
            </div>
    </header>

    <div class="login-container">
        <h1>Login</h1>
        <form action="../../controllers/clientecontroller.php" method="POST">
            <input type="hidden" name="acao" value="autenticar">
            Email: <input type="email" name="email" required><br>
            Senha: <input type="password" name="senha" required><br>
            <label>
                <input type="checkbox" name="lembrar"> Lembrar senha
            </label><br>
            <input type="submit" value="Login">
        </form>
        <p><a href="registro.php">Não tem uma conta? Cadastre-se</a></p>
    </div>

    <footer class="footer">
        <div class="footer-container">
            <div class="footer-column">
                <p>Fornecemos os melhores cogumelos para nossos clientes.</p>
            </div>
            <div class="footer-column">
                <h4>Contato</h4>
                <ul>
                    <li><a href="mailto:contato@empresa.com">contato@cogulandia.com</a></li>
                    <li><a href="tel:+5541997052920">(41) 99705-2920</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h4>Siga-nós</h4>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Cogulandia. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>
</html>
