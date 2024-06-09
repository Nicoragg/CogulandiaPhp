<!DOCTYPE html>
<html>
<head>
    <title>Registro - Cogulandia</title>
</head>
<body>
    <h1>Registrar</h1>
    <nav>
        <a href="../home.php">Home</a> |
        <a href="../sobre.php">Sobre</a> |
        <a href="../contato.php">Contato</a> |
        <a href="login.php">Login</a>
    </nav>
    <form action="../../controllers/clientecontroller.php" method="POST">
        <input type="hidden" name="acao" value="registrar">
        Nome: <input type="text" name="nome"><br>
        Email: <input type="email" name="email"><br>
        Senha: <input type="password" name="senha"><br>
        <input type="submit" value="Registrar">
    </form>
</body>
</html>
