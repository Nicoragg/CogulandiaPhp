<!DOCTYPE html>
<html>
<head>
    <title>Login - Cogulandia</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <nav>
            <a href="../home.php">Home</a> |
            <a href="../sobre.php">Sobre</a> |
            <a href="../contato.php">Contato</a> |
            <a href="login.php">Login</a>
        </nav>
        <form action="controllers/clienteController.php" method="POST">
            <input type="hidden" name="acao" value="autenticar">
            Email: <input type="email" name="email" required><br>
            Senha: <input type="password" name="senha" required><br>
            <label>
                <input type="checkbox" name="lembrar"> Lembrar senha
            </label><br>
            <input type="submit" value="Login">
        </form>
        <p><a href="registro.php">Não tem uma conta? Cadastre-se</a></p>
        <?php if (isset($_GET['erro'])): ?>
            <p style="color: red;">Email ou senha inválidos.</p>
        <?php endif; ?>
    </div>
</body>
</html>
