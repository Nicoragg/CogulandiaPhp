<!DOCTYPE html>
<html>
<head>
    <title>Criar Pedido</title>
</head>
<body>
    <h1>Criar Pedido</h1>
    <form action="../../controllers/pedidocontroller.php" method="POST">
        <input type="hidden" name="acao" value="criar">
        Cliente ID: <input type="text" name="cliente_id" required><br>
        Produto ID: <input type="text" name="produto_id" required><br>
        Quantidade: <input type="number" name="quantidade" required><br>
        <input type="submit" value="Criar">
    </form>
</body>
</html>
