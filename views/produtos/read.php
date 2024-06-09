<!DOCTYPE html>
<html>
<head>
    <title>Listar Produtos</title>
</head>
<body>
    <h1>Listar Produtos</h1>
    <?php
    include_once '../../controllers/produtocontroller.php';
    $controller = new ProdutoController();
    $produtos = $controller->listar();
    ?>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Preço</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($produtos as $produto) : ?>
            <tr>
                <td><?php echo $produto['id']; ?></td>
                <td><?php echo $produto['nome']; ?></td>
                <td><?php echo $produto['descricao']; ?></td>
                <td><?php echo $produto['preco']; ?></td>
                <td>
                    <a href="update.php?id=<?php echo $produto['id']; ?>">Editar</a>
                    <a href="../../controllers/produtocontroller.php?acao=deletar&id=<?php echo $produto['id']; ?>">Deletar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
