<?php
include_once '../models/pedido.php';

class PedidoController {
    public function criar($cliente_id, $produto_id, $quantidade) {
        Pedido::criar($cliente_id, $produto_id, $quantidade);
        header('Location: ../views/pedidos/read.php');
    }

    public function listar() {
        return Pedido::listar();
    }

    public function atualizar($id, $cliente_id, $produto_id, $quantidade) {
        Pedido::atualizar($id, $cliente_id, $produto_id, $quantidade);
        header('Location: ../views/pedidos/read.php');
    }

    public function deletar($id) {
        Pedido::deletar($id);
        header('Location: ../views/pedidos/read.php');
    }
}

// Roteamento
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $controller = new PedidoController();
    $acao = $_POST['acao'];
    
    switch ($acao) {
        case 'criar':
            $controller->criar($_POST['cliente_id'], $_POST['produto_id'], $_POST['quantidade']);
            break;
        case 'atualizar':
            $controller->atualizar($_POST['id'], $_POST['cliente_id'], $_POST['produto_id'], $_POST['quantidade']);
            break;
    }
} elseif ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['acao'])) {
    $controller = new PedidoController();
    $acao = $_GET['acao'];
    
    switch ($acao) {
        case 'deletar':
            $controller->deletar($_GET['id']);
            break;
    }
}
?>
