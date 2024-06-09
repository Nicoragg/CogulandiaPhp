<!DOCTYPE html>
<html>
<head>
    <title>Atualizar Produto</title>
</head>
<body>
    <h1>Atualizar Produto</h1>
    <?php
    include_once '../../models/produto.php';
    $produto = Produto::listar()[$_GET['id'] - 1];
    ?>
    <form action="../../controllers/produtocontroller.php" method="POST">
        <input type="hidden" name="acao" value="atualizar">
        <input type="hidden" name="id" value="<?php echo $produto['id']; ?>">
        Nome: <input type="text" name="nome" value="<?php echo $produto['nome']; ?>"><br>
        Descrição: <textarea name="descricao"><?php echo $produto['descricao']; ?></textarea><br>
        Preço: <input type="text" name="preco" value="<?php echo $produto['preco']; ?>"><br>
        <input type="submit" value="Atualizar">
    </form>
</body>
</html>
