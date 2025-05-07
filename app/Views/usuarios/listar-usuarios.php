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

<pre>
    <?php print_r($usuarios) ?>
</pre>

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
                        <th scope="col">Status</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>001</td>
                        <td>Ricardo Oliveira</td>
                        <td>ricardo.oliveira@email.com</td>
                        <td>(11) 98765-4321</td>
                        <td><span class="badge bg-primary">Administrador</span></td>
                        <td><span class="badge bg-success">Ativo</span></td>
                        <td>
                            <a href="detalhes-usuario.html"
                                class="btn btn-sm btn-outline-primary btn-action" title="Visualizar">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="editar-usuario.html"
                                class="btn btn-sm btn-outline-success btn-action" title="Editar">
                                <i class="fas fa-edit"></i>
                            </a>
                            <button class="btn btn-sm btn-outline-danger btn-action" title="Excluir">
                                <i class="fas fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>002</td>
                        <td>Ana Silva</td>
                        <td>ana.silva@email.com</td>
                        <td>(11) 91234-5678</td>
                        <td><span class="badge bg-info text-dark">Funcionário</span></td>
                        <td><span class="badge bg-success">Ativo</span></td>
                        <td>
                            <a href="detalhes-usuario.html"
                                class="btn btn-sm btn-outline-primary btn-action" title="Visualizar">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="editar-usuario.html"
                                class="btn btn-sm btn-outline-success btn-action" title="Editar">
                                <i class="fas fa-edit"></i>
                            </a>
                            <button class="btn btn-sm btn-outline-danger btn-action" title="Excluir">
                                <i class="fas fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>003</td>
                        <td>João Santos</td>
                        <td>joao.santos@email.com</td>
                        <td>(11) 98888-7777</td>
                        <td><span class="badge bg-secondary">Cliente</span></td>
                        <td><span class="badge bg-success">Ativo</span></td>
                        <td>
                            <a href="detalhes-usuario.html"
                                class="btn btn-sm btn-outline-primary btn-action" title="Visualizar">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="editar-usuario.html"
                                class="btn btn-sm btn-outline-success btn-action" title="Editar">
                                <i class="fas fa-edit"></i>
                            </a>
                            <button class="btn btn-sm btn-outline-danger btn-action" title="Excluir">
                                <i class="fas fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>004</td>
                        <td>Carla Mendes</td>
                        <td>carla.mendes@email.com</td>
                        <td>(11) 97777-6666</td>
                        <td><span class="badge bg-secondary">Cliente</span></td>
                        <td><span class="badge bg-warning text-dark">Pendente</span></td>
                        <td>
                            <a href="detalhes-usuario.html"
                                class="btn btn-sm btn-outline-primary btn-action" title="Visualizar">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="editar-usuario.html"
                                class="btn btn-sm btn-outline-success btn-action" title="Editar">
                                <i class="fas fa-edit"></i>
                            </a>
                            <button class="btn btn-sm btn-outline-danger btn-action" title="Excluir">
                                <i class="fas fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>005</td>
                        <td>Roberto Oliveira</td>
                        <td>roberto.oliveira@email.com</td>
                        <td>(11) 96666-5555</td>
                        <td><span class="badge bg-secondary">Cliente</span></td>
                        <td><span class="badge bg-danger">Bloqueado</span></td>
                        <td>
                            <a href="detalhes-usuario.html"
                                class="btn btn-sm btn-outline-primary btn-action" title="Visualizar">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="editar-usuario.html"
                                class="btn btn-sm btn-outline-success btn-action" title="Editar">
                                <i class="fas fa-edit"></i>
                            </a>
                            <button class="btn btn-sm btn-outline-danger btn-action" title="Excluir">
                                <i class="fas fa-trash"></i>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>