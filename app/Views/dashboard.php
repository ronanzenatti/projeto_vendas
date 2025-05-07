<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><i class="fas fa-tachometer-alt me-2"></i>Dashboard</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Compartilhar</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Exportar</button>
        </div>
        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <i class="fas fa-calendar me-1"></i>
            Esta semana
        </button>
    </div>
</div>

<!-- Cartões de Estatísticas -->
<div class="row dashboard-stats">
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-0 shadow-sm h-100 dashboard-card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-muted fw-normal mb-0">TOTAL DE LIVROS</h6>
                        <h2 class="fw-bold mb-0">1,258</h2>
                        <p class="small text-success mb-0"><i class="fas fa-arrow-up me-1"></i>12% este mês</p>
                    </div>
                    <div class="card-icon">
                        <i class="fas fa-book"></i>
                    </div>
                </div>
            </div>
            <div class="card-footer border-0 bg-transparent">
                <a href="lista-produtos.html" class="small text-primary text-decoration-none">Ver detalhes</a>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-0 shadow-sm h-100 dashboard-card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-muted fw-normal mb-0">VENDAS HOJE</h6>
                        <h2 class="fw-bold mb-0">R$ 2,156</h2>
                        <p class="small text-success mb-0"><i class="fas fa-arrow-up me-1"></i>8% hoje</p>
                    </div>
                    <div class="card-icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                </div>
            </div>
            <div class="card-footer border-0 bg-transparent">
                <a href="lista-vendas.html" class="small text-primary text-decoration-none">Ver detalhes</a>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-0 shadow-sm h-100 dashboard-card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-muted fw-normal mb-0">CLIENTES</h6>
                        <h2 class="fw-bold mb-0">485</h2>
                        <p class="small text-success mb-0"><i class="fas fa-arrow-up me-1"></i>5% este mês</p>
                    </div>
                    <div class="card-icon">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
            </div>
            <div class="card-footer border-0 bg-transparent">
                <a href="lista-usuarios.html" class="small text-primary text-decoration-none">Ver detalhes</a>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-0 shadow-sm h-100 dashboard-card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-muted fw-normal mb-0">MÉDIA DE VENDAS</h6>
                        <h2 class="fw-bold mb-0">R$ 42</h2>
                        <p class="small text-danger mb-0"><i class="fas fa-arrow-down me-1"></i>3% este mês</p>
                    </div>
                    <div class="card-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                </div>
            </div>
            <div class="card-footer border-0 bg-transparent">
                <a href="relatorios.html" class="small text-primary text-decoration-none">Ver detalhes</a>
            </div>
        </div>
    </div>
</div>

<!-- Gráficos e Tabelas -->
<div class="row">
    <div class="col-lg-8 mb-4">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-white border-0">
                <h5 class="card-title mb-0">Vendas dos últimos 7 dias</h5>
            </div>
            <div class="card-body">
                <div style="height: 300px; background-color: #f8f9fa; border-radius: 5px; display: flex; align-items: center; justify-content: center;">
                    <p class="text-muted">Gráfico de Vendas</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 mb-4">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-white border-0">
                <h5 class="card-title mb-0">Produtos mais vendidos</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th>Produto</th>
                                <th>Vendas</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Harry Potter e a Pedra Filosofal</td>
                                <td>42</td>
                            </tr>
                            <tr>
                                <td>O Pequeno Príncipe</td>
                                <td>38</td>
                            </tr>
                            <tr>
                                <td>Dom Casmurro</td>
                                <td>29</td>
                            </tr>
                            <tr>
                                <td>A Culpa é das Estrelas</td>
                                <td>25</td>
                            </tr>
                            <tr>
                                <td>1984</td>
                                <td>23</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 mb-4">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-white border-0 d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">Últimas Vendas</h5>
                <a href="lista-vendas.html" class="btn btn-sm btn-primary">Ver Todas</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Cliente</th>
                                <th>Produto</th>
                                <th>Data</th>
                                <th>Valor</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#1234</td>
                                <td>Ana Silva</td>
                                <td>O Pequeno Príncipe</td>
                                <td>17/04/2025</td>
                                <td>R$ 35,90</td>
                                <td><span class="badge bg-success">Concluída</span></td>
                            </tr>
                            <tr>
                                <td>#1233</td>
                                <td>João Santos</td>
                                <td>1984</td>
                                <td>17/04/2025</td>
                                <td>R$ 45,50</td>
                                <td><span class="badge bg-success">Concluída</span></td>
                            </tr>
                            <tr>
                                <td>#1232</td>
                                <td>Carla Mendes</td>
                                <td>Dom Casmurro</td>
                                <td>16/04/2025</td>
                                <td>R$ 29,90</td>
                                <td><span class="badge bg-warning text-dark">Pendente</span></td>
                            </tr>
                            <tr>
                                <td>#1231</td>
                                <td>Roberto Oliveira</td>
                                <td>Harry Potter e a Pedra Filosofal</td>
                                <td>16/04/2025</td>
                                <td>R$ 55,00</td>
                                <td><span class="badge bg-success">Concluída</span></td>
                            </tr>
                            <tr>
                                <td>#1230</td>
                                <td>Fernanda Lima</td>
                                <td>A Culpa é das Estrelas</td>
                                <td>15/04/2025</td>
                                <td>R$ 39,90</td>
                                <td><span class="badge bg-success">Concluída</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>