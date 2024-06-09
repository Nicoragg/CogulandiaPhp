<!DOCTYPE html>
<html>
<head>
    <title>Criar Cliente</title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
</head>
<body>
    <h1>Criar Cliente</h1>
    <form action="../../controllers/clientecontroller.php" method="POST">
        <input type="hidden" name="acao" value="criar">
        Nome: <input type="text" name="nome"><br>
        Email: <input type="email" name="email"><br>
        Senha: <input type="password" name="senha"><br>
        <input type="submit" value="Criar">
    </form>
</body>
</html>
