<!DOCTYPE html>
<html>
<head>
    <title>Cogulandia</title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
<header>
    <nav class="navbar">
            <div class="logo">
                <a href="#"><img src="views\Imgs\cogulogos.jpg" alt="Minha Logo"></a>
            </div>
            <input type="checkbox" id="menu-toggle">
            <label for="menu-toggle" class="menu-icon"><i class="fas fa-bars"></i></label>
        
            <ul class="nav-links">
                <li><a href="home.php">Home</a></li>
                <li><a href="index.php">Nossos Produtos</a></li>
                <li><a href="sobre.php">Sobre</a></li>
                <li><a href="views/clientes/login.php">Login</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <section>
            <h2>Gerenciar Clientes</h2>
            <p>Aqui você pode adicionar novos clientes e visualizar a lista completa de clientes registrados.</p>
            <a href="views/clientes/create.php" class="btn"><strong>Criar Cliente</strong></a>
            <a href="views/clientes/read.php" class="btn"><strong>Listar Clientes</strong></a>
        </section>

        <section>
            <h2>Gerenciar Produtos</h2>
            <p>Aqui você pode adicionar novos produtos e visualizar a lista completa de produtos disponíveis.</p>
            <a href="views/produtos/create.php" class="btn"><strong>Criar Produto</strong></a>
            <a href="views/produtos/read.php" class="btn"><strong>Listar Produtos</strong></a>
        </section>

        <section>
            <h2>Gerenciar Pedidos</h2>
            <p>Aqui você pode criar novos pedidos e visualizar a lista completa de pedidos realizados pelos clientes.</p>
            <a href="views/pedidos/create.php" class="btn"><strong>Criar Pedido</strong></a>
            <a href="views/pedidos/read.php" class="btn"><strong>Listar Pedidos</strong></a>
        </section>
    </div>

    <footer class="footer">
        <div class="footer-container">
            <div class="footer-column">
                <h4>Contato</h4>
                <ul>
                    <li><a href="mailto:contato@empresa.com">contato@cogulandia.com</a></li>
                    <li><a href="tel:+5541997052920">(41) 99705-2920</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h4>Siga-nós</h4>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Cogulandia. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>
</html>
