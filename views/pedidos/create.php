<!DOCTYPE html>
<html>
<head>
    <title>Criar Pedido</title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
</head>
<body>
    <h1>Criar Pedido</h1>
    <form action="../../controllers/pedidocontroller.php" method="POST">
        <input type="hidden" name="acao" value="criar">
        Cliente ID: <input type="text" name="cliente_id"><br>
        Produto ID: <input type="text" name="produto_id"><br>
        Quantidade: <input type="number" name="quantidade"><br>
        <input type="submit" value="Criar">
    </form>
</body>
</html>
