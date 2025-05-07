<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <!-- Barra de Navegação Superior -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/dashboard">
                <i class="fas fa-book-open me-2"></i>LivroTech
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTop">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTop">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="/dashboard">Dashboard</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Produtos
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/produtos/novo">Cadastrar Produto</a></li>
                            <li><a class="dropdown-item" href="/produtos">Listar Produtos</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Vendas
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="registro-venda.html">Registrar Venda</a></li>
                            <li><a class="dropdown-item" href="lista-vendas.html">Listar Vendas</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Usuários
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/usuarios/novo">Cadastrar Usuário</a></li>
                            <li><a class="dropdown-item" href="/usuarios">Listar Usuários</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            <i class="fas fa-user-circle me-1"></i> Admin
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="perfil.html"><i class="fas fa-user me-2"></i>Perfil</a></li>
                            <li><a class="dropdown-item" href="configuracoes.html"><i class="fas fa-cog me-2"></i>Configurações</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="login.html"><i class="fas fa-sign-out-alt me-2"></i>Sair</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Conteúdo Principal -->
    <div class="container-fluid">
        <div class="row">
            <!-- Barra Lateral -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="dashboard.html">
                                <i class="fas fa-tachometer-alt me-2"></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="lista-produtos.html">
                                <i class="fas fa-book me-2"></i>
                                Produtos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="lista-vendas.html">
                                <i class="fas fa-shopping-cart me-2"></i>
                                Vendas
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/usuarios">
                                <i class="fas fa-users me-2"></i>
                                Usuários
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="relatorios.html">
                                <i class="fas fa-chart-bar me-2"></i>
                                Relatórios
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contato-admin.html">
                                <i class="fas fa-headset me-2"></i>
                                Suporte
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Conteúdo da Página -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">

                <?php
                echo $content;
                ?>
                
                <!-- Rodapé -->
                <footer class="bg-white p-3 mt-4 text-center text-muted">
                    <div>
                        &copy; 2025 LivroTech. Todos os direitos reservados.
                    </div>
                </footer>
            </main>
        </div>
    </div>

    <!-- Bootstrap 5.3 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>