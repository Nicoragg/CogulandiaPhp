<!DOCTYPE html>
<html>
<head>
    <title>Atualizar Pedido</title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
</head>
<body>
    <h1>Atualizar Pedido</h1>
    <?php
    include_once '../../models/pedido.php';
    $id = $_GET['id'];
    $pedidos = Pedido::listar();
    $pedido = null;
    foreach ($pedidos as $p) {
        if ($p['id'] == $id) {
            $pedido = $p;
            break;
        }
    }
    ?>
    <?php if ($pedido): ?>
    <form action="../../controllers/pedidocontroller.php" method="POST">
        <input type="hidden" name="acao" value="atualizar">
        <input type="hidden" name="id" value="<?php echo $pedido['id']; ?>">
        Cliente ID: <input type="text" name="cliente_id" value="<?php echo $pedido['cliente_id']; ?>"><br>
        Produto ID: <input type="text" name="produto_id" value="<?php echo $pedido['produto_id']; ?>"><br>
        Quantidade: <input type="number" name="quantidade" value="<?php echo $pedido['quantidade']; ?>"><br>
        <input type="submit" value="Atualizar">
    </form>
    <?php else: ?>
        <p>Pedido não encontrado.</p>
    <?php endif; ?>
</body>
</html>
