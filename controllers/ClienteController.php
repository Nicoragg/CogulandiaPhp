<?php
include_once '../models/cliente.php';

class ClienteController {
    public function criar($nome, $email, $senha) {
        Cliente::criar($nome, $email, $senha);
        header('Location: ../views/clientes/read.php');
    }

    public function listar() {
        return Cliente::listar();
    }

    public function atualizar($id, $nome, $email, $senha) {
        Cliente::atualizar($id, $nome, $email, $senha);
        header('Location: ../views/clientes/read.php');
    }

    public function deletar($id) {
        Cliente::deletar($id);
        header('Location: ../views/clientes/read.php');
    }

    public function registrar($nome, $email, $senha) {
        Cliente::criar($nome, $email, $senha);
        header('Location: ../views/clientes/login.php');
    }

    public function autenticar($email, $senha) {
        $cliente = Cliente::autenticar($email, $senha);
        if ($cliente) {
            session_start();
            $_SESSION['cliente'] = $cliente;
            
            if (isset($_POST['lembrar'])) {
                setcookie('email', $email, time() + (86400 * 30), "/");
            } else {
                setcookie('email', '', time() - 3600, "/");
            }

            header('Location: ../../index.php');
        } else {
            header('Location: ../views/clientes/login.php?erro=1');
        }
    }
}

// Roteamento
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $controller = new ClienteController();
    $acao = $_POST['acao'];
    
    switch ($acao) {
        case 'criar':
            $controller->criar($_POST['nome'], $_POST['email'], $_POST['senha']);
            break;
        case 'atualizar':
            $controller->atualizar($_POST['id'], $_POST['nome'], $_POST['email'], $_POST['senha']);
            break;
        case 'registrar':
            $controller->registrar($_POST['nome'], $_POST['email'], $_POST['senha']);
            break;
        case 'autenticar':
            $controller->autenticar($_POST['email'], $_POST['senha']);
            break;
    }
} elseif ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['acao'])) {
    $controller = new ClienteController();
    $acao = $_GET['acao'];
    
    switch ($acao) {
        case 'deletar':
            $controller->deletar($_GET['id']);
            break;
    }
}
?>
