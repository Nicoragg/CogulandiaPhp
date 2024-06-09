<!DOCTYPE html>
<html>
<head>
    <title>Atualizar Cliente</title>
</head>
<body>
    <h1>Atualizar Cliente</h1>
    <?php
    include_once '../../models/cliente.php';
    $cliente = Cliente::listar()[$_GET['id'] - 1];
    ?>
    <form action="../../controllers/clientecontroller.php" method="POST">
        <input type="hidden" name="acao" value="atualizar">
        <input type="hidden" name="id" value="<?php echo $cliente['id']; ?>">
        Nome: <input type="text" name="nome" value="<?php echo $cliente['nome']; ?>"><br>
        Email: <input type="email" name="email" value="<?php echo $cliente['email']; ?>"><br>
        Senha: <input type="password" name="senha"><br>
        <input type="submit" value="Atualizar">
    </form>
</body>
</html>
