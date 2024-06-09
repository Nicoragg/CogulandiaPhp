<!DOCTYPE html>
<html>
<head>
    <title>Criar Produto</title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
</head>
<body>
    <h1>Criar Produto</h1>
    <form action="../../controllers/produtocontroller.php" method="POST">
        <input type="hidden" name="acao" value="criar">
        Nome: <input type="text" name="nome"><br>
        Descrição: <textarea name="descricao"></textarea><br>
        Preço: <input type="text" name="preco"><br>
        <input type="submit" value="Criar">
    </form>
</body>
</html>
