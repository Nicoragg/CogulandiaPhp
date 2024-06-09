<?php
include_once '../models/produto.php';

class ProdutoController {
    public function criar($nome, $descricao, $preco) {
        Produto::criar($nome, $descricao, $preco);
        header('Location: ../views/produtos/read.php');
    }

    public function listar() {
        return Produto::listar();
    }

    public function atualizar($id, $nome, $descricao, $preco) {
        Produto::atualizar($id, $nome, $descricao, $preco);
        header('Location: ../views/produtos/read.php');
    }

    public function deletar($id) {
        Produto::deletar($id);
        header('Location: ../views/produtos/read.php');
    }
}

// Roteamento
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $controller = new ProdutoController();
    $acao = $_POST['acao'];
    
    switch ($acao) {
        case 'criar':
            $controller->criar($_POST['nome'], $_POST['descricao'], $_POST['preco']);
            break;
        case 'atualizar':
            $controller->atualizar($_POST['id'], $_POST['nome'], $_POST['descricao'], $_POST['preco']);
            break;
    }
} elseif ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['acao'])) {
    $controller = new ProdutoController();
    $acao = $_GET['acao'];
    
    switch ($acao) {
        case 'deletar':
            $controller->deletar($_GET['id']);
            break;
    }
}
?>
