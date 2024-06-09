<!DOCTYPE html>
<html>
<head>
    <title>Listar Clientes</title>
</head>
<body>
    <h1>Listar Clientes</h1>
    <?php
    include_once '../../controllers/clientecontroller.php';
    $controller = new ClienteController();
    $clientes = $controller->listar();
    ?>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($clientes as $cliente): ?>
            <tr>
                <td><?php echo $cliente['id']; ?></td>
                <td><?php echo $cliente['nome']; ?></td>
                <td><?php echo $cliente['email']; ?></td>
                <td>
                    <a href="update.php?id=<?php echo $cliente['id']; ?>">Editar</a>
                    <a href="../../controllers/clientecontroller.php?acao=deletar&id=<?php echo $cliente['id']; ?>">Deletar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
