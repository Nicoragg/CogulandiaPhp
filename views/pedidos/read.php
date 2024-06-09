<!DOCTYPE html>
<html>
<head>
    <title>Listar Pedidos</title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
</head>
<body>
    <h1>Listar Pedidos</h1>
    <?php
    include_once '../../controllers/pedidocontroller.php';
    $controller = new PedidoController();
    $pedidos = $controller->listar();
    ?>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Cliente ID</th>
            <th>Produto ID</th>
            <th>Quantidade</th>
            <th>Data do Pedido</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($pedidos as $pedido) : ?>
            <tr>
                <td><?php echo $pedido['id']; ?></td>
                <td><?php echo $pedido['cliente_id']; ?></td>
                <td><?php echo $pedido['produto_id']; ?></td>
                <td><?php echo $pedido['quantidade']; ?></td>
                <td><?php echo $pedido['data_pedido']; ?></td>
                <td>
                    <a href="update.php?id=<?php echo $pedido['id']; ?>">Editar</a>
                    <a href="../../controllers/pedidocontroller.php?acao=deletar&id=<?php echo $pedido['id']; ?>">Deletar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
