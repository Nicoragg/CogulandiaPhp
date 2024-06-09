<!DOCTYPE html>
<html>
<head>
    <title>Deletar Cliente</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>
    <h1>Deletar Cliente</h1>
    <p>ID: <?php echo $cliente['id']; ?></p>
    <p>Nome: <?php echo $cliente['nome']; ?></p>
    <p>Email: <?php echo $cliente['email']; ?></p>
    <p>Telefone: <?php echo $cliente['telefone']; ?></p>
    <form action="/clientes/<?php echo $cliente['id']; ?>" method="POST">
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit">Confirmar Deleção</button>
    </form>
    <a href="/clientes">Cancelar</a>
</body>
</html>
