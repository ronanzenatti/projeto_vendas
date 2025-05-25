<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard.html">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Usuários</li>
    </ol>
</nav>

<div
    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><i class="fas fa-users me-2"></i>Lista de Usuários</h1>
    <a href="/usuarios/novo" class="btn btn-primary">
        <i class="fas fa-user-plus me-1"></i> Adicionar Novo Usuário
    </a>
</div>

<?php 
if (isset($_SESSION['mensagem'])):
?>
<div class="alert alert-<?= $_SESSION['tipo_mensagem'] ?> alert-dismissible fade show" role="alert">
  <strong>Sucesso!</strong> <?= $_SESSION['mensagem'] ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php 
endif;
unset($_SESSION['mensagem']);
unset($_SESSION['tipo_mensagem']);
?>

<div class="card border-0 shadow-sm mb-4 table-container">
    <div class="card-body">
        <div class="row mb-3">
            <div class="col-md-6">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Buscar usuários..."
                        aria-label="Buscar usuários">
                    <button class="btn btn-outline-secondary" type="button">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
            <div class="col-md-3 ms-auto">
                <select class="form-select">
                    <option selected>Todos os Usuários</option>
                    <option>Administradores</option>
                    <option>Funcionários</option>
                    <option>Clientes</option>
                </select>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Foreach percorre a lista recebida e coloca
                     cada item da lista $usuarios que veio do controller
                      na variavel $user -->
                    <?php foreach($usuarios as $user): ?>
                    <tr>
                        <td><?= $user['id_usuario'] ?></td>
                        <td><?= $user['nome'] ?></td>
                        <td><?= $user['email'] ?></td>
                        <td><?= $user['celular'] ?></td>
                        <td><span class="badge bg-primary"><?= $user['tipo'] ?></span></td>            
                        <td>
                            <a href="/usuarios/<?= $user['id_usuario'] ?>/editar"
                                class="btn btn-sm btn-outline-success btn-action" title="Editar">
                                <i class="fas fa-edit"></i>
                            </a>
                            <button class="btn btn-sm btn-outline-danger btn-action" title="Excluir">
                                <i class="fas fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>